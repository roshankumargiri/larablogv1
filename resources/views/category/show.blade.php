<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>


  <h1>Category :: <u>{{$category->name}}</u></h1>

  <hr>
  @foreach($category->blogs as $blog)

    <h3>{{$blog->title}}</h3>

  @endforeach
</body>
</html>