<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class BooksController extends Controller
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
    public function getRequested()
    {
      return view('Customer.books.index');
    }
    public function postRequest()
    {
      return view('Customer.books.index');
    }
    public function postReturn()
    {
      return view('Customer.books.index');
    }
    public function getEdit()
    {
      return view('Customer.edit');
    }
    public function postEdit()
    {
      return view('Customer.edit');
    }

}
