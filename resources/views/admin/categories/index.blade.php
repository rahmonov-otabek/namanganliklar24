@extends('layouts.admin')

@section('title')
    Categories
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              @if (session('success'))
              <div class="alert alert-success alert-dismissible show fade col-lg-4">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>x</span>
                  </button>
                   {{session('success')}}
                </div> 
              </div> 
              @endif 

              <div class="card-header">
                <h4>Categories</h4>
                <div class="card-header-form">
                  <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Create</a>
                </div>
              </div>
              <div class="card-body ">
                <div class="table-responsive">
                  <table class="table table-bordered table-md ">
                    <tbody><tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Created At</th> 
                      <th>Action</th>
                    </tr>
                    @foreach ($categories as $category)
                    <tr> 
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name_uz}}</td>
                        <td>{{ $category->slug }}</td> 
                        <td>
                          <a href="#" class="btn btn-danger">Delete</a>
                          <a href="{{ route('admin.categories.edit', $category->id)}}" class="btn btn-info">Edit</a>
                        </td> 
                    </tr>
                    @endforeach
                  </tbody></table>
                </div>
              </div>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
    </div>
@endsection