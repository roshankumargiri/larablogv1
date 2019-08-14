@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    <h2>Home Page</h2>
                    <a href="/categories" title="" class="btn btn-primary">view all categories</a>
                   @can('isAdmin')
                    <a href="/categories/create" title="" class="btn btn-primary">Add Category</a>
                    @endcan
                    <a href="/blogs" title="" class="btn btn-primary">View all posts</a>
                    @can('isAuthor')
                    <a href="/blogs/create" title="" class="btn btn-primary">Add Post</a>
                    @endcan
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection