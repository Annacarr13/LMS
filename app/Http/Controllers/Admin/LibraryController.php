<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class LibraryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
                              //  $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
      return view('Admin.library.index');
    }
    public function getAdd()
    {
      return view('Admin.library.add');
    }
    public function postAdd()
    {
      return view('Admin.library.index');
    }
    public function getEdit()
    {
      return view('Admin.library.edit');
    }
    public function postEdit()
    {
      return view('Admin.library.index');
    }

}
