<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use Storage;
//use Illuminate\Image\Facades\Image;
use Image;
use Gate;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }
    public function index()
    {

        $blogs = Blog::with('category','user')->get();
        // return $blogs;

        // return $user_id;
        // exit();


        return view('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Gate::allows('isAuthor')){
    abort(404,"Sorry, You cannot do this action");
}

        $user = auth()->user();
        $user_id = ($user->id);



        $categories = Category::all();

        // return $user_id;
        // exit();


        return view('blog.create',compact('categories','user_id'));
        //return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $blog = new Blog;
       
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->user_id = $request->user_id;
        $blog->category_id = $request->category_id;        
        $blog->excerpt = $request->title;
        $blog->status = $request->status;
        //make directory if not exists
        if(!file_exists('images')){
            mkdir('images',007,true);
        }
        //make directory if not exists
        if(!file_exists('images/thumbnails')){
            mkdir('images/thumbnails',007,true);
        }
        //generate image name
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        //upload original image
        request()->image->move(public_path('images'), $imageName);




        // $img = Image::make(public_path('images/'.$imageName));
   
        // /* insert watermark at bottom-right corner with 10px offset */
        // $img->insert(public_path('images/watermark/watermark.png'));
       
        // $img->save(public_path('images/'.$imageName));
            





        //Declaring thumbnails name
        $smallthumbnail = 'small_'.$imageName;
        $mediumthumbnail ='medium_'.$imageName;
        $largethumbnail = 'large_'.$imageName;
        //creating and uploading thumbnails
        $thumb = Image::make('images/'.$imageName)->resize(150, 93)->save('images/thumbnails/'.$smallthumbnail, 50);
        $thumb = Image::make('images/'.$imageName)->resize(300, 185)->save('images/thumbnails/'.$mediumthumbnail, 50);
        $thumb = Image::make('images/'.$imageName)->resize(550, 340)->save('images/thumbnails/'.$largethumbnail, 50);
        //Write data to database
        $blog->image = $imageName;
        $blog->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);
        return view('blog.show_details',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
         if(!Gate::allows('isAuthor')){
    abort(404,"Sorry, You cannot do this action");
}
        $blog = Blog::find($id);
        $user = auth()->user();
        $user_id = ($user->id);




        $categories = Category::all();

        // return $user_id;
        // exit();


        return view('blog.edit',compact('categories','user_id','blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
       
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->user_id = $request->user_id;
        $blog->category_id = $request->category_id;
        

        $blog->image = $request->image;

        $blog->excerpt = $request->title;
        $blog->status = $request->status;

        //make directory if not exists
        if(!file_exists('images')){
            mkdir('images',007,true);
        }
        //make directory if not exists
        if(!file_exists('images/thumbnails')){
            mkdir('images/thumbnails',007,true);
        }
        //generate image name
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        //upload original image
        request()->image->move(public_path('images'), $imageName);  


        //Declaring thumbnails name
        $smallthumbnail = 'small_'.$imageName;
        $mediumthumbnail ='medium_'.$imageName;
        $largethumbnail = 'large_'.$imageName;
        //creating and uploading thumbnails
        $thumb = Image::make('images/'.$imageName)->resize(150, 93)->save('images/thumbnails/'.$smallthumbnail, 50);
        $thumb = Image::make('images/'.$imageName)->resize(300, 185)->save('images/thumbnails/'.$mediumthumbnail, 50);
        $thumb = Image::make('images/'.$imageName)->resize(550, 340)->save('images/thumbnails/'.$largethumbnail, 50);
        $blog->image = $imageName;
        $blog->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(!Gate::allows('isAuthor')){
    abort(404,"Sorry, You cannot do this action");
}
       $blog = Blog::find($id);
$blog->delete();
 return redirect('/');
    }



    // public function createThumbnail($path, $width, $height)
    //  {
    //     $img = Image::make($path)->resize($width, $height, function ($constraint) {
    //     $constraint->aspectRatio();
    //  });
    //   $img->save($path);
    // }
}
