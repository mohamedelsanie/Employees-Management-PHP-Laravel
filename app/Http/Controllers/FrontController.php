<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Game;
use App\Models\Image;
use App\Models\News;
use App\Models\Order;
use App\Models\Page;
use App\Models\PageComment;
use App\Models\Player;
use App\Models\Result;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    //
    public function index()
    {
        return redirect('/admin/');
    }


    public function closed()
    {
        return view('closed');
    }

}
