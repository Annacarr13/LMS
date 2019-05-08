<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Auth;
use App\Library;

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
      $libraries = Library::all();

      return view('Admin.library.index', [
        'libraries' => $libraries,
      ]);
    }
    public function getAdd()
    {
      return view('Admin.library.add');
    }
    public function postAdd()
    {
      $library =new Library;

      $library->libraryName = Request()->input('name');
      $library->libraryAddress = Request()->input('address');
      $library->libraryPostcode = Request()->input('postcode');

      $library->save();

      $libraries = Library::all();

      return view('Admin.library.index', [
        'libraries' => $libraries,
      ]);
    }
    public function getEdit()
    {
      $id = Request()->input('libraryId');
      $library = Library::where('idLibrary', $id);

      return view('Admin.library.edit', [
        'library' => $library,
      ]);
    }
    public function postEdit()
    {
      $id = Request()->input('libraryId');
      $library = Library::where('idLibrary', $id);

      $libraryName = Request()->input('name');
      $libraryAddress = Request()->input('address');
      $libraryPostcode = Request()->input('postcode');

      $library->save();

      $libraries = Library::all();

      return view('Admin.library.index', [
        'libraries' => $libraries,
      ]);
    }

}
