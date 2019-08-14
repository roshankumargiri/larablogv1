@extends('layouts.app')

@section('content')
<div class="container">
      <h2>Blogs<h2>

          <h4 class="p-title mt-30"><b>Posts</b></h4>
          <div class="row">
          @foreach($blogs as $blog)  
            <div class="col-sm-4">
              <?php $imagename = "large_".$blog->image?>
           <img src="/images/thumbnails/{{$imagename}}" alt="">
              <h4 class="pt-20"><a href="/blogs/{{$blog->id}}"><b>{{$blog->title}}</h4></a><br/></h6><a href = "/categories/{{$blog->category->id}}">Category: {{$blog->category->name}}</b></a></h6>
              <ul class="list-li-mr-20 pt-10 mb-30">
                <li class="color-lite-black">by <b>{{$blog->user->name}},</b>
               </li>
            
              @can('isAuthor')
              <li><i class="color-primary mr-5 font-12 ion-ios-bolt"></i><a href="/blogs/{{$blog->id}}/edit" title="">Edit</a></li>
              <li><i class="color-primary mr-5 font-12 ion-chatbubbles"></i><a href="/blogs/{{$blog->id}}/delete" title="">Delete</a></li>
            @endcan
              </ul>
              <hr>
            </div><!-- col-sm-4 -->
          @endforeach 
          </div><!-- row -->
         
        </div>




        @endsection