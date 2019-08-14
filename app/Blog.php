<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\User;

class Blog extends Model
{
    
	public function getAllCategoryAttribute(){

		$category = Category::all();
		// return $todos;


		return view('category.index',compact('category'));
	}

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}



}
