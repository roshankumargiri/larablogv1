<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;
use DB;
use Gate;
class CategoryController extends Controller
{


    // public function __construct()
    // {
    //     $this->middleware('auth',['except' => ['index','show']]);
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $categories = Category::all();
        return view('category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
        $category = new Category;
        

        $category->name = $request->name;
        $category->slug =$request->name;
        
        $category->save();

        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $blogs = Blog::whereCategoryId($id)->get();
       return view('blog.index', compact('blogs'));
        //$blogs = Blog::where('category_id','$id')->get();
        //$blogs = DB::table('blogs')->where('category_id', '=', $id)->get();
        //$transactions = $transactions::Paginate(3);
        // return $transactions;


        // $category = Category::findOrFail($id);
        // $category = Category::with('blogs')->findOrFail($id);

        // return $category;
       

        //return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)

    {   
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
        $category = Category::find($id);
        return view('category.edit',compact('category'));

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
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
         return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('isAdmin')){
    abort(404,"Sorry, You cannot do this action");
}

$category = Category::find($id);
$category->delete();
  return redirect('/categories');
       
    }
}
