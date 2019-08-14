@extends('layouts.app')
@section('content')
<div class="container">
<h3>Categories:</h3>
<br>
<br><div class="col col-sm-4 row">
    <ol>
      @foreach($categories as $category)
      <li><h5> <a href="/categories/{{$category->id}}" >{{$category->name}} </a></h5>
      @can('isAdmin')
      <a href="/categories/{{$category->id}}/edit" title="">Edit</a>
      <a href="/categories/{{$category->id}}/delete" title="">Delete</a>
      @endcan
      </li>
      <hr>
      <br>
    @endforeach
  </ol>
</div>

</div>
@endsection