<?php
namespace App\Http\Controllers\Librarian;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class CustomerController extends Controller
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
      return view('Librarian.customer.index');
    }
    public function getAdd()
    {
      return view('Librarian.customer.add');
    }
    public function postAdd()
    {
      return view('Librarian.customer.index');
    }
    public function getEdit()
    {
      return view('Librarian.customer.edit');
    }
    public function postEdit()
    {
      return view('Librarian.customer.index');
    }

}
