<?php
namespace App\Http\Controllers\Librarian;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Book;
use App\Library;


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
    public function getIndex()
    {
      $books = Book::all();

      return view('Librarian.books.index', [
        'books' => $books,
      ]);
    }
    public function getAdd()
    {

      $libraries = Library::all();

      return view('Librarian.books.add', [
        'libraries' => $libraries,
      ]);
    }
    public function postAdd()
    {
      $book = new Book;

      $book->bookName = Request()->input('name');
      $book->idLibrary = Request()->input('library');

      $book->save();

      $books = Book::all();

      return view('Librarian.index', [
        'books' => $books,
      ]);
    }
    public function getEdit()
    {
      return view('Librarian.books.edit');
    }
    public function postEdit()
    {
      return view('Librarian.index');
    }
    public function getRequested()
    {
      $books = Book::where('bookRegistered', TRUE)->get();

      return view('Librarian.books.index', [
        'books' => $books,
      ]);

    }#

    public function requestBook()
    {
      $id = Request()->input('bookId');
      $book = Book::where('idBook', $id)->first();
      $book->bookRegistered = TRUE;
      $book->save();

      $books = Book::all();
      return view('Librarian.books.index', [
        'books' => $books,
      ]);

    }
    public function requestBookReturn()
    {
      $id = Request()-input('bookId');
      $book = Book::find($id);
      $book->bookRegistered = FALSE;
      $book->save();

      $books = Book::all();
      return view('Librarian.index', [
        'books' => $books,
      ]);


    }
}
