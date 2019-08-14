@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Blog</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="{{ route('blogs.index')}}" title="Category" class="btn btn-primary">View all Blogs</a>
                    <!-- <a href="" title="Blog" class="btn btn-success">Add new Blog</a> -->
                    <hr>
                    <form action="{{route('blogs.store')}}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-control-group">
                            <p>
                                <input type="text"  placeholder="Title" class="form-control" name="title">
                            </p>
                        </div>
                        <p>
                            <!-- id="summary-ckeditor" -->
                            <textarea  id="article-ckeditor"  name = "description" placeholder="Description" class="form-control" rows="4" cols="50"></textarea>
                        </p>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input name="image" type="file" class="custom-file-input" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                        </div>
                        <br>                     
                        
                        <div class="input-group">
                            <select name = "category_id" class="browser-default custom-select">
                                <option selected>Select Category</option>
                                @foreach($categories as $category)
                                <option class="dropdown-item" value = '{{$category->id}}'>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <p>
                            
                            <input type="hidden" name = "user_id" value="{{$user_id}}">
                            
                            
                        </p>
                        
                        <div class="input-group">
                            <select name = "status" class="browser-default custom-select">
                                <option selected>Do you want to publish now ?</option>
                                <option value = 1 >Yes, publish now</option>
                                <option value = 0 >Publish later</option>
                            </select>
                        </div>
                        <br>
                        <p>
                            <input type="submit" value="Add Post" class="btn btn-info">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection