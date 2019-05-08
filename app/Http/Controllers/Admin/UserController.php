<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
      $users = User::all();

      return view('Admin.user.index', [
        'users' => $users,
      ]);
    }
    public function getAdminAdd()
    {
      return view('Admin.user.addAdmin');
    }
    public function postAdminAdd()
    {
      // $this->validate(Request(), [
      //       'firstname'     => 'required|min:3',
      //       'lastname'     => 'required|min:3',
      //       'userEmail'    => 'required|email|unique:User',
      //       'password' => 'requisred|confirmed|min:6',
      //   ]);

      $user = new User;
      $user->userRole = 'admin';
      $user->userFirstname = Request()->input('firstname');
      $user->userSurname = Request()->input('lastname');
      $user->userEmail = Request()->input('email');
      $user->password = Hash::make(Request()->input('password'));
      $user->save();

      $users = User::all();

      return view('Admin.user.index', [
        'users' => $users,
      ]);
    }

    public function getAdminEdit()
    {
      $id = Request()->input('userid');

      $user = User::where('idUser', $id);

      return view('Admin.user.editAdmin',[
        'user' => $user,
      ]);
    }


    public function postAdminEdit()
    {
      $id = Request()->input('userid');

      $user = User::where('idUser', $id);
      $user->userRole = 'admin';
      $user->userFirstname = Request()->input('firstname');
      $user->userSurname = Request()->input('lastname');
      $user->userEmail = Request()->input('email');
      $user->password = Hash::make(Request()->input('password'));

      $user->save();

      $users = User::all();

      return view('Admin.user.index', [
        'users' => $users,
      ]);
    }
    public function getLibrarianAdd()
    {
      return view('Admin.user.addLibrarian');
    }
    public function postLibrarianAdd()
    {
      $user = new User;
      $user->userRole = 'admin';
      $user->userFirstname = Request()->input('firstname');
      $user->userSurname = Request()->input('lastname');
      $user->userEmail = Request()->input('email');
      $user->password = Hash::make(Request()->input('password'));

      $user->save();

      $users = User::all();

      return view('Admin.user.index', [
        'users' => $users,
      ]);
    }
    public function getLibrarianEdit()
    {
      $id = Request()->input('userid');

      $user = User::where('idUser', $id);

      return view('Admin.user.editLibrarian',[
        'user' => $user,
      ]);
    }
    public function postLibrarianEdit()
    {
      $id = Request()->input('userid');

      $user = User::where('idUser', $id);
      $user->userRole = 'admin';
      $user->userFirstname = Request()->input('firstname');
      $user->userSurname = Request()->input('lastname');
      $user->userEmail = Request()->input('email');
      $user->userAddress = Request()->input('address');
      $user->userMobile = Request()->input('mobile');
      $user->password = Hash::make(Request()->input('password'));

      $user->save();

      $users = User::all();

      return view('Admin.user.index', [
        'users' => $users,
      ]);
    }
    public function getCustomerAdd()
    {

      return view('Admin.user.addCustomer');
    }
    public function postCustomerAdd()
    {
      $user = new User;
      $user->userRole = 'admin';
      $user->userFirstname = Request()->input('firstname');
      $user->userSurname = Request()->input('lastname');
      $user->userEmail = Request()->input('email');
      $user->userAddress = Request()->input('address');
      $user->userMobile = Request()->input('mobile');
      $user->password = Hash::make(Request()->input('password'));

      $user->save();

      $users = User::all();

      return view('Admin.user.index', [
        'users' => $users,
      ]);
    }
    public function getCustomerEdit()
    {
      $id = Request()->input('userid');

      $user = User::where('idUser', $id);

      return view('Admin.user.editCustomer',[
        'user' => $user,
      ]);
    }
    public function postCustomerEdit()
    {
      $id = Request()->input('userid');

      $user = User::where('idUser', $id);
      $user->userRole = 'admin';
      $user->userFirstname = Request()->input('firstname');
      $user->userSurname = Request()->input('lastname');
      $user->userEmail = Request()->input('email');
      $user->userAddress = Request()->input('address');
      $user->userMobile = Request()->input('mobile');
      $user->password = Hash::make(Request()->input('password'));

      $user->save();

      $users = User::all();

      return view('Admin.user.index', [
        'users' => $users,
      ]);
    }

}
