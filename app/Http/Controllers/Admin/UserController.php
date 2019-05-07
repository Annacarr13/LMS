<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
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
      return view('Admin.user.index');
    }
    public function getAdminAdd()
    {
      return view('Admin.user.addAdmin');
    }
    public function postAdminAdd()
    {
      return view('Admin.user.index');
    }
    public function getAdminEdit()
    {
      return view('Admin.user.editAdmin');
    }
    public function postAdminEdit()
    {
      return view('Admin.user.index');
    }
    public function getLibrarianAdd()
    {
      return view('Admin.user.addLibrarian');
    }
    public function postLibrarianAdd()
    {
      return view('Admin.user.index');
    }
    public function getLibrarianEdit()
    {
      return view('Admin.user.editLibrarian');
    }
    public function postLibrarianEdit()
    {
      return view('Admin.user.index');
    }
    public function getCustomerAdd()
    {
      return view('Admin.user.addCustomer');
    }
    public function postCustomerAdd()
    {
      return view('Admin.user.index');
    }
    public function getCustomerEdit()
    {
      return view('Admin.user.editCustomer');
    }
    public function postCustomerEdit()
    {
      return view('Admin.user.index');
    }

}
