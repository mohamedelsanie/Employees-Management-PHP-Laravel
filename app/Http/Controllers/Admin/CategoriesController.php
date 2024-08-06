<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\DataTables\CategoriesDataTable;
use Yajra\DataTables\DataTables;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(CategoriesDataTable $dataTable)
    {

        return $dataTable->render('admin.categories.index');
    }


    public function getCategoriesDatatable()
    {
        $data = Categories::select('*');
        return   DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '';
                if(AdminCan('user-delete')) {
                    $btn .= '<a class="action_link" id="deleteBtn" data-toggle="modal" data-target="#deletemodal" data-id="' . $row->id . '"  data-color="#e95959" style="color: rgb(233, 89, 89);  cursor: pointer;"><i class="icon-copy dw dw-delete-3"></i></a>';
                }

                if(AdminCan('user-edit')){
                    $btn .= '<a class="action_link" href="' . Route('admin.categories.edit', $row->id) . '"  data-color="#265ed7" style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-edit2"></i></a>';
                }
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getTrshedCategoriesDatatable()
    {
        $data = Categories::onlyTrashed();
        return   DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '';
                if(AdminCan('user-forcedelete')) {
                    $btn .= '<a class="action_link" id="deleteBtn" data-toggle="modal" data-target="#deletemodal" data-id="' . $row->id . '"  data-color="#e95959" style="color: rgb(233, 89, 89);  cursor: pointer;"><i class="icon-copy dw dw-delete-3"></i></a>';
                }

                if(AdminCan('user-forcedelete')) {
                    $btn .= '<a class="action_link" href="'.route('admin.categories.restore',$row->id).'" data-color="#265ed7" style="cursor: pointer;"><i class="icon-copy dw dw-cursor-1"></i></a>';
                }
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function archive()
    {
        //
        $categories = Categories::onlyTrashed()->orderBy('id','DESC')->paginate(admin_paginate());
        return view('admin.categories.archive',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:255|min:3|required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['name'] = $request->name;

        Categories::Create($data);

        return redirect()->route('admin.categories.index')->with([
            'message' => trans('admin/categories.messages.created'),
            'alert_type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = User::find($id);
        return view('admin.categories.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Categories::find($id);
        return view('admin.categories.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name'     => 'required|max:255|min:3|required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
//        dd($request->all());
        $category= Categories::find($id);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('admin.categories.index')->with([
            'message' => trans('admin/categories.messages.edited',['name' => $category->name]),
            'alert_type' => 'success'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function delete(Request $request)
    {
        $item = Categories::withTrashed()->find($request->id);
        if (is_numeric($request->id)) {
            if($item->trashed()){
                $item->forceDelete();
                return redirect()->route('admin.categories.archive')->with([
                    'message' => trans('admin/categories.messages.deleted'),
                    'alert_type' => 'success'
                ]);
            }else{
                $item->delete();
                return redirect()->route('admin.categories.index')->with([
                    'message' => trans('admin/categories.messages.deleted'),
                    'alert_type' => 'success'
                ]);
            }
        }

    }


    public function destroy($id)
    {
        //
        $item = Categories::withTrashed()->find($id);
        if($item->trashed()){
            $item->forceDelete();
            return redirect()->route('admin.categories.archive')->with([
                'message' => trans('admin/categories.messages.deleted'),
                'alert_type' => 'success'
            ]);
        }else{
            $item->delete();
            return redirect()->route('admin.categories.index')->with([
                'message' => trans('admin/categories.messages.deleted'),
                'alert_type' => 'success'
            ]);
        }
    }

    public function restore($id)
    {
        //
        Categories::onlyTrashed()->find($id)->restore();

        return redirect()->route('admin.categories.archive')->with([
            'message' => trans('admin/categories.messages.restored'),
            'alert_type' => 'success'
        ]);
    }



}
