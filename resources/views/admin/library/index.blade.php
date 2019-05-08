@extends('layouts.admin')
@section('content')

<div class="container">
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
                 @foreach($libraries as $library)
                 <tr>
                   <td>{{$loop->iteration}}</td>
                   <td>{{$library->libraryName}}</td>
                   <td>{{$library->libraryAddress}}</td>
                   <td>{{$library->libraryPostcode}}</td>
                 </tr>
                 @endforeach
               </table>
             </div>

            </div>
        </div>
    </div>
</div>

@endsection
