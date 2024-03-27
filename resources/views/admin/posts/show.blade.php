@extends('layouts.admin')

@section('title')
    Post
@endsection

@section('content')
    <div class="row">
        
        <div class="col-12 col-md-12 col-lg-12"> 
            <div class="card">
              <div class="card-header">
                <h4>Post ID {{ $post->id }}</h4>
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Back</a>
              </div>
              <div class="card-body"> 
                    <div class="table-responsive">
                        <table class="table"> 
                            <tr>
                                <th>Title UZ</th><td>{{ $post->title_uz }} </td>
                            </tr>
                            <tr>
                                <th>Title RU</th><td>{{ $post->title_ru }} </td>
                            </tr>
                            <tr>
                                <th>Body UZ</th><td>{!! $post->body_uz !!} </td>
                            </tr>
                            <tr>
                                <th>Body RU</th><td>{!! $post->body_ru !!} </td>
                            </tr> 
                            <tr>
                                <th>Image</th>
                                <td>
                                    <img src="site/images/posts/{{$post->image}}" width="150px" alt="">
                                </td>
                            </tr> 
                            <tr>
                                <th>Slug</th><td>{{ $post->slug }} </td>
                            </tr>
                            <tr>
                                <th>View</th><td>{{ $post->view }} </td>
                            </tr>
                            <tr>
                                <th>Created at</th><td>{{ $post->created_at }} </td>
                            </tr>
                        </table>
                    </div>
              </div> 
            </div>  
        </div>
        
    </div>
@endsection