<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Myrepo\Storage\Category\CategoryRepository as Category;

class CategoryController extends Controller
{
    //
    var $category;

    public function __construct(Category $category){
    	$this->middleware('auth');
    	$this->category = $category;
    }

    public function index(){
    	$category_list = $this->category->all();
    	return response()->view('category.list',['category_list'=>$category_list]);
    }

    public function getCreate(){
        
    }
}
