@extends('layouts.customer')
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
                    <div class="col-md-10 row offset-md-1" id="bookContainer">
                      <div class="col-md-3" id="img">
                        <img src="{{asset('/images/hp.JPG')}}" alt="Logo" height="auto" width="70%">
                      </div>
                      <div class="col-md-6" id="title">
                        <h5>Harry Potter: The Philosophers Stone</h5>
                      </div>
                      <div class="col-md-3" id="requestBtn">
                        <a href="{{url('customer/book/request')}}" class="btn btn-success  active" role="button" aria-pressed="true">Return Book</a>
                      </div>
                    </div>
                    <div class="col-md-10 row offset-md-1" id="bookContainer">
                      <div class="col-md-3" id="img">
                        <img src="{{asset('/images/cw.JPG')}}" alt="Logo" height="auto" width="70%">
                      </div>
                      <div class="col-md-6" id="title">
                        <h5>Charlotte's Web</h5>
                      </div>
                      <div class="col-md-3" id="requestBtn">
                        <a href="{{url('customer/book/request')}}" class="btn btn-success  active" role="button" aria-pressed="true">Return Book</a>
                      </div>
                    </div>
                    <div class="col-md-10 row offset-md-1" id="bookContainer">
                      <div class="col-md-3" id="img">
                        <img src="{{asset('/images/lot.JPG')}}" alt="Logo" height="auto" width="70%">
                      </div>
                      <div class="col-md-6" id="title">
                        <h5>Lord of the rings: Fellowship of the ring</h5>
                      </div>
                      <div class="col-md-3" id="requestBtn">
                        <a href="{{url('customer/book/request')}}" class="btn btn-success  active" role="button" aria-pressed="true">Return Book</a>
                      </div>
                    </div>
               </div>
           </div>
        </div>
    </div>
</div>
@endsection
