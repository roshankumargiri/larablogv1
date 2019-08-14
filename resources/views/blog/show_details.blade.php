@extends('layouts.app')
@section('content')
	<section>
		<div class="container">
			<div class="row">
			
				<div class="col-md-12 col-lg-8">
					<img src="/images/{{$blog->image}}" alt="">
					<h3 class="mt-30"><b>{{$blog->title}}</b></h3>
					<ul class="list-li-mr-20 mtb-15">
						<li>Category <a href="/categories/{{$blog->category->id}}"><b>{{$blog->category->name}}</b></a> {{$blog->created_at}}</li>
						
					</ul>
					{{$blog->description}}
				</div><!-- col-md-9 -->
				
				
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section>
	@endsection