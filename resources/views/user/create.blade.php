@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{route('users.store')}}" method="post" accept-charset="utf-8">
                        @csrf
                        <p>
                            <input type="text" name="name" value = "name" class="form-control">
                        </p>
                        <p>
                            <input type="text" name="email" value = "email" class="form-control">
                        </p>
                        <p>
                            <input type="text" name="role" value = "role" class="form-control">
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
