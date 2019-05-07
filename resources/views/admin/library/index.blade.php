@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  <div class=" row">
                      <div class="col-9 col-sm-9 col-md-9">
                          <h3>Books</h3>
                      </div>

                    </div>
                </div>

                <div class="card-body ">

                  <div class="col-md-10 row offset-md-1" id="bookContainer">
                    <div class="col-md-3" id="img">
                      <img src="{{asset('/images/hp.JPG')}}" alt="Logo" height="auto" width="70%">
                    </div>
                    <div class="col-md-6" id="title">
                      <h5>Harry Potter: The Philosophers Stone</h5>
                    </div>
                    <div class="col-md-3" id="requestBtn">
                      <a href="{{url('customer/book/request')}}" class="btn btn-primary  active" role="button" aria-pressed="true">Request Book</a>
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
                      <a href="{{url('customer/book/request')}}" class="btn btn-primary  active" role="button" aria-pressed="true">Request Book</a>
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
                      <a href="{{url('customer/book/request')}}" class="btn btn-primary  active" role="button" aria-pressed="true">Request Book</a>
                    </div>
                  </div>

               </div>

            </div>
        </div>
    </div>
</div>
@endsection


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  <div class=" row">
                      <div class="col-9 col-sm-9 col-md-9">
                          <h3>Libraries</h3>
                      </div>
                        <div class="col-3 col-sm-3 col-md-3 text-center row">
                            <a href="{{url('admin/library/add')}}" class="btn btn-link" role="button">Add Library</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

               <table class="table table-striped">
                 <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Address</th>
                   <th>Postcode</th>
                 </tr>
                 <tr>
                   <td>1</td>
                   <td>Liverpool city Library</td>
                   <td>City Centre</td>
                   <td>L1</td>
                 </tr>

               </table>
             </div>

            </div>
        </div>
    </div>
</div> -->
