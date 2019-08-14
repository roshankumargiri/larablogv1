@extends('layouts.app')
@section('content')
<div class="container">
<h3>Users:</h3>
<br>
<div class="col col-sm-8 row">

<table class="table bordered">
  
  <thead>
    <tr>
      <th>SN</th>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody><?php $sn=1 ?>
    @foreach($users as $user)
    <tr>
      <td>{{$sn}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>



        @if($user->role == 1)
        {{'Admin'}}
      
      @elseif( $user->role == 2)
        {{'Author'}}
      
      @elseif( $user->role == 3)
        {{'User'}}
        @endif





      </td>
      <td><a href="/users/{{$user->id}}/edit" title="">Edit</a>
      <a href="/users/{{$user->id}}/delete" title="">Delete</a></td>
    </tr>
    <?php $sn= $sn+1 ;?>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection