<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;

class IndexController extends Controller
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
      return view('customer.index');
    }
    public function getEdit()
    {
      return view('customer.edit');
    }
    public function postEdit()
    {
      return view('customer.index');
    }
}
