@extends('layouts.librarian')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add Book</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('librarian/books/add') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row ">
                          <div class="custom-file col-md-7 offset-md-3">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Upload Book Cover</label>
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="library" class="col-md-4 col-form-label text-md-right">Library</label>

                            <div class="col-md-6">
                              <select class="form-control" id="library" name="library">
                                  <option value="">--Select Library--</option>
                                  @foreach($libraries as $library)
                                  <option value="{{$library->idLibrary}}">{{$library->libraryName}}</option>
                                  @endforeach
                              </select>
                                @if ($errors->has('library'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('library') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
