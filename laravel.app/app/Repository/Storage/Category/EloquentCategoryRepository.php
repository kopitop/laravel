<?php  
namespace Myrepo\Storage\Category;

use App\Category;

class EloquentCategoryRepository implements CategoryRepository{

	public function all(){
		return Category::all();
	}

	public function find($id){
		return Category::find($id);
	}

	public function create($input){
		return Category::find($input);
	}
}

?>