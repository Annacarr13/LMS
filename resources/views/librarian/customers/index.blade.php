@extends('layouts.librarian')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  <div class=" row">
                      <div class="col-6 col-sm-8 col-md-10">
                          <h3>Customers</h3>
                      </div>
                        <div class="col-6 col-sm-4 col-md-2 text-center row">
                            <a href="{{url('librarian/customer/add')}}" class="btn btn-link" role="button">Add Customer</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

               <table class="table table-striped">
                 <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Role</th>
                   <th>Email</th>
                   <th>Address</th>
                   <th>Mobile</th>
                 </tr>
                 <tr>
                   <td>1</td>
                   <td>Anna Carr</td>
                   <td>Admin</td>
                   <td>acarr@gmail.com</td>
                   <td>76 Jubilee Drive</td>
                   <td>07785224568</td>
                 </tr>

               </table>
             </div>

        </div>
    </div>
</div>
@endsection
