@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('users.update',$user->id)}}" method="post" accept-charset="utf-8">
                        @csrf
                        @method('PUT')
                        <p>
                            <input type="text" name="name" value = "{{$user->name}}" class="form-control">
                        </p>
                        <p>
                            <input type="text" name="email" value = "{{$user->email}}" class="form-control">
                        </p>
                        <p>
                            <input type="text" name="role" value = "{{$user->role}}" class="form-control">
                        </p>
                        <p>
                            <input type="submit" value="Update" class="btn btn-info">
                        </p>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
