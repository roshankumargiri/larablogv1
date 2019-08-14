@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('categories.index')}}" title="Category" class="btn btn-primary">View all Category</a>
                    <!-- <a href="" title="Blog" class="btn btn-success">Add new Blog</a> -->
                    <hr>
                    <form action="{{route('categories.store')}}" method="post" accept-charset="utf-8">
                        @csrf
                        <p>
                            <input type="text" name="name" class="form-control">
                        </p>
                        <p>
                            <input type="submit" value="Add" class="btn btn-info">
                        </p>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
