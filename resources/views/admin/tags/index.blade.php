@extends('layouts.admin')

@section('title')
    Tags
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
                <h4>Tags</h4>
                <div class="card-header-form">
                  <a href="{{ route('admin.tags.create') }}" class="btn btn-primary">Create</a>
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
                    @foreach ($tags as $tag)
                    <tr> 
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $tag->name_uz}}</td>
                        <td>{{ $tag->slug }}</td> 
                        <td>
                           
                          <a href="{{ route('admin.tags.edit', $tag->id)}}" class="btn btn-info">Edit</a>
                          <a href="{{ route('admin.tags.show', $tag->id)}}" class="btn btn-primary">View</a>
                          <form style="display: inline" action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST"
                            onclick="return confirm('Confirm delete')">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                          </form>
                        </td> 
                    </tr>
                    @endforeach
                  </tbody></table>
                </div>
              </div>
              <div class="card-footer text-right">
                {{ $tags->links() }}
              </div>
            </div>
          </div>
    </div>
@endsection