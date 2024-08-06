<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Employee;
use App\Models\EmployeeBank;
use App\Models\EmployeeVisa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\DataTables\EmployeesDataTable;
use Yajra\DataTables\DataTables;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(EmployeesDataTable $dataTable)
    {
        //
        return $dataTable->render('admin.employees.index');
    }


    public function getEmployeesDatatable()
    {
        $data = Employee::select('*');
        return   DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '';
                if(AdminCan('user-delete')) {
                    $btn .= '<a class="action_link" id="deleteBtn" data-toggle="modal" data-target="#deletemodal" data-id="' . $row->id . '"  data-color="#e95959" style="color: rgb(233, 89, 89);  cursor: pointer;"><i class="icon-copy dw dw-delete-3"></i></a>';
                }

                if(AdminCan('user-edit')){
                    $btn .= '<a class="action_link" href="' . Route('admin.employees.edit', $row->id) . '"  data-color="#265ed7" style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-edit2"></i></a>';
                }

                if(AdminCan('user-edit')){
                    $btn .= '<a class="action_link" href="' . Route('admin.employees.show', $row->id) . '"  data-color="#265ed7" style="color: rgb(38, 94, 215);"><i class="icon-copy dw dw-eye"></i></a>';
                }
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getTrshedEmployeesDatatable()
    {
        $data = Employee::onlyTrashed();
        return   DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '';
                if(AdminCan('user-forcedelete')) {
                    $btn .= '<a class="action_link" id="deleteBtn" data-toggle="modal" data-target="#deletemodal" data-id="' . $row->id . '"  data-color="#e95959" style="color: rgb(233, 89, 89);  cursor: pointer;"><i class="icon-copy dw dw-delete-3"></i></a>';
                }

                if(AdminCan('user-forcedelete')) {
                    $btn .= '<a class="action_link" href="'.route('admin.employees.restore',$row->id).'" data-color="#265ed7" style="cursor: pointer;"><i class="icon-copy dw dw-cursor-1"></i></a>';
                }
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function archive()
    {
        //
        $users = Employee::onlyTrashed()->orderBy('id','DESC')->paginate(admin_paginate());
        return view('admin.employees.archive',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categories::all();
        return view('admin.employees.create',['categories'=>$categories]);
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
            'name_ar'     => 'required|max:255|min:3|required',
            'name_en'     => 'required|max:255|min:3|required',
            'persional_num'    => 'required',
            'job_pos'    => 'nullable',
            'passport_num'    => 'required',
            'nationality'    => 'required',
            'birthplace'    => 'required',
            'passposrt_releasedate'    => 'required',
            'passport_expirationdate'    => 'required',
            'pasport_type'    => 'required',
            'gender'    => 'nullable',
            'personal_picture'    => 'nullable',
            'mobile_num'    => 'required',
            'phone_num'    => 'nullable',
            'sos_phone_num'    => 'nullable',
            'kinship'    => 'nullable',
            'email'    => 'nullable',
            'apartment'    => 'nullable',
            'building'    => 'nullable',
            'streat'    => 'nullable',
            'complex'    => 'nullable',
            'region'    => 'nullable',
            'work_type'    => 'nullable',
            'work_place'    => 'nullable',
            'job_number'    => 'nullable',
            'job_title'    => 'nullable',
            'work_section'    => 'nullable',
            'line_manger_name'    => 'nullable',
            'tshirt_size'    => 'nullable',
            'shoe_size'    => 'nullable',
            'mandate_type'    => 'nullable',
            'mandate_startdate'    => 'nullable',
            'mandate_enddate'    => 'nullable',
            'category'    => 'nullable',

            'bank_name'    => 'nullable',
            'account_num'    => 'nullable',
            'iban_num'    => 'nullable',
            'branch'    => 'nullable',
            'swift_code'    => 'nullable',
            'visa_type'    => 'nullable',
            'visa_releasedate'    => 'nullable',
            'visa_expirationdate'    => 'nullable',
            'notes'    => 'nullable',
            'visa_image'    => 'nullable',

            'passport_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'smart_id_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'salary_print_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'bank_report_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'cv_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'other_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data['name_ar'] = $request->name_ar;
        $data['name_en'] = $request->name_en;
        $data['persional_num'] = $request->persional_num;
        $data['job_pos'] = $request->job_pos;
        $data['passport_num'] = $request->passport_num;
        $data['nationality'] = $request->nationality;
        $data['birthplace'] = $request->birthplace;
        $data['passposrt_releasedate'] = $request->passposrt_releasedate;
        $data['passport_expirationdate'] = $request->passport_expirationdate;
        $data['pasport_type'] = $request->pasport_type;
        $data['gender'] = $request->gender;
        $data['personal_picture'] = $request->personal_picture;
        $data['mobile_num'] = $request->mobile_num;
        $data['phone_num'] = $request->phone_num;
        $data['sos_phone_num'] = $request->sos_phone_num;
        $data['kinship'] = $request->kinship;
        $data['email'] = $request->email;
        $data['apartment'] = $request->apartment;
        $data['building'] = $request->building;
        $data['streat'] = $request->streat;
        $data['complex'] = $request->complex;
        $data['region'] = $request->region;
        $data['work_type'] = $request->work_type;
        $data['work_place'] = $request->work_place;
        $data['job_number'] = $request->job_number;
        $data['job_title'] = $request->job_title;
        $data['work_section'] = $request->work_section;
        $data['line_manger_name'] = $request->line_manger_name;
        $data['tshirt_size'] = $request->tshirt_size;
        $data['shoe_size'] = $request->shoe_size;
        $data['mandate_type'] = $request->mandate_type;
        $data['mandate_startdate'] = $request->mandate_startdate;
        $data['mandate_enddate'] = $request->mandate_enddate;
        $data['category'] = $request->category;

        if(!empty($request->passport_file)){
            $passport_file = time().'.'.$request->passport_file->extension();
            $request->passport_file->move(public_path('passport_file'), $passport_file);
            $data['passport_file'] = $passport_file;
        }
        if(!empty($request->smart_id_file)){
            $smart_id_file = time().'.'.$request->smart_id_file->extension();
            $request->smart_id_file->move(public_path('smart_id_file'), $smart_id_file);
            $data['smart_id_file'] = $smart_id_file;
        }
        if(!empty($request->salary_print_file)){
            $salary_print_file = time().'.'.$request->salary_print_file->extension();
            $request->salary_print_file->move(public_path('salary_print_file'), $salary_print_file);
            $data['salary_print_file'] = $salary_print_file;
        }
        if(!empty($request->bank_report_file)){
            $bank_report_file = time().'.'.$request->bank_report_file->extension();
            $request->bank_report_file->move(public_path('bank_report_file'), $bank_report_file);
            $data['bank_report_file'] = $bank_report_file;
        }
        if(!empty($request->cv_file)){
            $cv_file = time().'.'.$request->cv_file->extension();
            $request->cv_file->move(public_path('cv_file'), $cv_file);
            $data['cv_file'] = $cv_file;
        }
        if(!empty($request->other_file)){
            $other_file = time().'.'.$request->other_file->extension();
            $request->other_file->move(public_path('other_file'), $other_file);
            $data['other_file'] = $other_file;
        }

        $employee = Employee::Create($data);
        $eid = $employee->id;

        if($request->bank_name) {
            $bank['bank_name'] = $request->bank_name;
            $bank['account_num'] = $request->account_num;
            $bank['iban_num'] = $request->iban_num;
            $bank['branch'] = $request->branch;
            $bank['swift_code'] = $request->swift_code;
            $banks = array_map(null, $bank['bank_name'], $bank['account_num'],$bank['iban_num'],$bank['branch'],$bank['swift_code']); // 0 : id , 1 : link
            EmployeeBank::Create(['employee_id' => $eid, 'data' => json_encode($banks)]);
        }
        if($request->visa_type) {
            $visa['visa_type'] = $request->visa_type;
            $visa['visa_other'] = $request->visa_other;
            $visa['visa_releasedate'] = $request->visa_releasedate;
            $visa['visa_expirationdate'] = $request->visa_expirationdate;
            $visa['notes'] = $request->notes;
            $visa['visa_image'] = $request->visa_image;
            $visas = array_map(null, $visa['visa_type'], $visa['visa_releasedate'],$visa['visa_expirationdate'],$visa['notes'],$visa['visa_image'], $visa['visa_other']); // 0 : id , 1 : link
            EmployeeVisa::Create(['employee_id' => $eid, 'data' => json_encode($visas)]);
        }
        /*
        $data['bank_name'] = $request->bank_name;
        $data['account_num'] = $request->account_num;
        $data['iban_num'] = $request->iban_num;
        $data['branch'] = $request->branch;
        $data['swift_code'] = $request->swift_code;
        */
        /*
        $data['visa_type'] = $request->visa_type;
        $data['visa_releasedate'] = $request->visa_releasedate;
        $data['visa_expirationdate'] = $request->visa_expirationdate;
        $data['notes'] = $request->notes;
        $data['visa_image'] = $request->visa_image;
        */

        return redirect()->route('admin.employees.index')->with([
            'message' => trans('admin/employees.messages.created'),
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
        $data = Employee::find($id);
        $category = Categories::find($data->category);
        $categories = Categories::all();
        $banks = EmployeeBank::where('employee_id',$id)->get();
        $banks_dats = $banks->pluck('data')->toArray();
        if($banks_dats){
            $banks_data = json_decode($banks_dats[0], true);
        }else{
            $banks_data = [];
        }
        $visas = EmployeeVisa::where('employee_id',$id)->get();
        $visas_dats = $visas->pluck('data')->toArray();
        if($visas_dats){
            $visas_data = json_decode($visas_dats[0], true);
        }else{
            $visas_data = [];
        }
        return view('admin.employees.show',['data'=>$data,'categories' => $categories,'category' => $category,'banks' => $banks_data,'visas' => $visas_data]);
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
        $data = Employee::find($id);
        $categories = Categories::all();
        $banks = EmployeeBank::where('employee_id',$id)->get();
        $banks_dats = $banks->pluck('data')->toArray();
        if($banks_dats){
            $banks_data = json_decode($banks_dats[0], true);
        }else{
            $banks_data = [];
        }
        $visas = EmployeeVisa::where('employee_id',$id)->get();
        $visas_dats = $visas->pluck('data')->toArray();
        if($visas_dats){
            $visas_data = json_decode($visas_dats[0], true);
        }else{
            $visas_data = [];
        }
//        dd($visas_data);
        return view('admin.employees.edit',['data'=>$data,'categories' => $categories,'banks' => $banks_data,'visas' => $visas_data]);
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
            'name_ar'     => 'required|max:255|min:3|required',
            'name_en'     => 'required|max:255|min:3|required',
            'persional_num'    => 'required',
            'job_pos'    => 'nullable',
            'passport_num'    => 'required',
            'nationality'    => 'required',
            'birthplace'    => 'required',
            'passposrt_releasedate'    => 'required',
            'passport_expirationdate'    => 'required',
            'pasport_type'    => 'required',
            'gender'    => 'nullable',
            'personal_picture'    => 'nullable',
            'mobile_num'    => 'required',
            'phone_num'    => 'nullable',
            'sos_phone_num'    => 'nullable',
            'kinship'    => 'nullable',
            'email'    => 'nullable',
            'apartment'    => 'nullable',
            'building'    => 'nullable',
            'streat'    => 'nullable',
            'complex'    => 'nullable',
            'region'    => 'nullable',
            'work_type'    => 'nullable',
            'work_place'    => 'nullable',
            'job_number'    => 'nullable',
            'job_title'    => 'nullable',
            'work_section'    => 'nullable',
            'line_manger_name'    => 'nullable',
            'tshirt_size'    => 'nullable',
            'shoe_size'    => 'nullable',
            'mandate_type'    => 'nullable',
            'mandate_startdate'    => 'nullable',
            'mandate_enddate'    => 'nullable',
            'category'    => 'nullable',

            'bank_name'    => 'nullable',
            'account_num'    => 'nullable',
            'iban_num'    => 'nullable',
            'branch'    => 'nullable',
            'swift_code'    => 'nullable',
            'visa_type'    => 'nullable',
            'visa_releasedate'    => 'nullable',
            'visa_expirationdate'    => 'nullable',
            'notes'    => 'nullable',
            'visa_image'    => 'nullable',

            'passport_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'smart_id_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'salary_print_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'bank_report_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'cv_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
            'other_file' => 'nullable|mimetypes:image/jpeg,image/png,image/gif,image/bmp,application/pdf|max:10000',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

//        dd($request->all());
        $employee = Employee::find($id);
        /****************************/

        $employee->name_ar = $request->name_ar;
        $employee->name_en = $request->name_en;
        $employee->persional_num = $request->persional_num;
        $employee->job_pos = $request->job_pos;
        $employee->passport_num = $request->passport_num;
        $employee->nationality = $request->nationality;
        $employee->birthplace = $request->birthplace;
        $employee->passposrt_releasedate = $request->passposrt_releasedate;
        $employee->passport_expirationdate = $request->passport_expirationdate;
        $employee->pasport_type = $request->pasport_type;
        $employee->gender = $request->gender;
        $employee->personal_picture = $request->personal_picture;
        $employee->mobile_num = $request->mobile_num;
        $employee->phone_num = $request->phone_num;
        $employee->sos_phone_num = $request->sos_phone_num;
        $employee->kinship = $request->kinship;
        $employee->email = $request->email;
        $employee->apartment = $request->apartment;
        $employee->building = $request->building;
        $employee->streat = $request->streat;
        $employee->complex = $request->complex;
        $employee->region = $request->region;
        $employee->work_type = $request->work_type;
        $employee->work_place = $request->work_place;
        $employee->job_number = $request->job_number;
        $employee->job_title = $request->job_title;
        $employee->work_section = $request->work_section;
        $employee->line_manger_name = $request->line_manger_name;
        $employee->tshirt_size = $request->tshirt_size;
        $employee->shoe_size = $request->shoe_size;
        $employee->mandate_type = $request->mandate_type;
        $employee->mandate_startdate = $request->mandate_startdate;
        $employee->mandate_enddate = $request->mandate_enddate;
        $employee->category = $request->category;

        if(!empty($request->passport_file)){
            $passport_file = time().'.'.$request->passport_file->extension();
            $request->passport_file->move(public_path('passport_file'), $passport_file);
            $employee->passport_file = $passport_file;
        }
        if(!empty($request->smart_id_file)){
            $smart_id_file = time().'.'.$request->smart_id_file->extension();
            $request->smart_id_file->move(public_path('smart_id_file'), $smart_id_file);
            $employee->smart_id_file = $smart_id_file;
        }
        if(!empty($request->salary_print_file)){
            $salary_print_file = time().'.'.$request->salary_print_file->extension();
            $request->salary_print_file->move(public_path('salary_print_file'), $salary_print_file);
            $employee->salary_print_file = $salary_print_file;
        }
        if(!empty($request->bank_report_file)){
            $bank_report_file = time().'.'.$request->bank_report_file->extension();
            $request->bank_report_file->move(public_path('bank_report_file'), $bank_report_file);
            $employee->bank_report_file = $bank_report_file;
        }
        if(!empty($request->cv_file)){
            $cv_file = time().'.'.$request->cv_file->extension();
            $request->cv_file->move(public_path('cv_file'), $cv_file);
            $employee->cv_file = $cv_file;
        }
        if(!empty($request->other_file)){
            $other_file = time().'.'.$request->other_file->extension();
            $request->other_file->move(public_path('other_file'), $other_file);
            $employee->other_file = $other_file;
        }


        if($request->bank_name) {
            $bank['bank_name'] = $request->bank_name;
            $bank['account_num'] = $request->account_num;
            $bank['iban_num'] = $request->iban_num;
            $bank['branch'] = $request->branch;
            $bank['swift_code'] = $request->swift_code;
            $banks = array_map(null, $bank['bank_name'], $bank['account_num'],$bank['iban_num'],$bank['branch'],$bank['swift_code']); // 0 : id , 1 : link
            EmployeeBank::updateOrCreate(['employee_id' => $id],['data' => json_encode($banks)]);
        }
        if($request->visa_type) {
            $visa['visa_type'] = $request->visa_type;
            $visa['visa_other'] = $request->visa_other;
            $visa['visa_releasedate'] = $request->visa_releasedate;
            $visa['visa_expirationdate'] = $request->visa_expirationdate;
            $visa['notes'] = $request->notes;
            $visa['visa_image'] = $request->visa_image;
            $visas = array_map(null, $visa['visa_type'], $visa['visa_releasedate'],$visa['visa_expirationdate'],$visa['notes'],$visa['visa_image'], $visa['visa_other']); // 0 : id , 1 : link
            EmployeeVisa::updateOrCreate(['employee_id' => $id],['data' => json_encode($visas)]);
        }
        /****************************/

        $employee->save();

        return redirect()->route('admin.employees.index')->with([
            'message' => trans('admin/employees.messages.edited',['name' => $employee->name_ar]),
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
        $item = Employee::withTrashed()->find($request->id);
        if (is_numeric($request->id)) {
            if($item->trashed()){
                $item->forceDelete();
                return redirect()->route('admin.employees.archive')->with([
                    'message' => trans('admin/employees.messages.deleted'),
                    'alert_type' => 'success'
                ]);
            }else{
                $item->delete();
                return redirect()->route('admin.employees.index')->with([
                    'message' => trans('admin/employees.messages.deleted'),
                    'alert_type' => 'success'
                ]);
            }
        }

    }


    public function destroy($id)
    {
        //
        $item = Employee::withTrashed()->find($id);
        if($item->trashed()){
            $item->forceDelete();
            return redirect()->route('admin.employees.archive')->with([
                'message' => trans('admin/employees.messages.deleted'),
                'alert_type' => 'success'
            ]);
        }else{
            $item->delete();
            return redirect()->route('admin.employees.index')->with([
                'message' => trans('admin/employees.messages.deleted'),
                'alert_type' => 'success'
            ]);
        }
    }

    public function restore($id)
    {
        //
        Employee::onlyTrashed()->find($id)->restore();

        return redirect()->route('admin.employees.archive')->with([
            'message' => trans('admin/employees.messages.restored'),
            'alert_type' => 'success'
        ]);
    }

}
