@extends('layouts.librarian')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  <div class=" row">
                      <div class="col-6 col-sm-6 col-md-6">
                          <h3>Requested Books</h3>
                      </div>
                  </div>
                </div>
                <div class="card-body">
                  @foreach($books as $book)
                    <div class="col-md-10 row offset-md-1" id="bookContainer">
                      <div class="col-md-3" id="img">
                        <img src="{{asset('/images/hp.JPG')}}" alt="Logo" height="auto" width="70%">
                      </div>
                      <div class="col-md-5" id="title">
                        <h5>{{$book->bookName}}</h5>
                      </div>
                      <div class="col-md-4" id="requestBtn">
                        @if($book->bookRequested == FALSE )
                        <a href='librarian/books/request?bookId="+$book->idBook+"' class="btn btn-primary  active" role="button" aria-pressed="true">Request Book</a>
                        @else
                        <a href='librarian/books/request/return?bookId="+{{$book->idBook}}+"' class="btn btn-success  active" role="button" aria-pressed="true">Request Return Of Book</a>
                        @endif
                      </div>
                    </div>
                  @endforeach
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
