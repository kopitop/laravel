<?php  
namespace Myrepo\Storage;

use Illuminate\Support\ServiceProvider;

/**
* Register Storage service provider to service container
*/
class StorageServiceProvider extends ServiceProvider
{
	public function register(){
		$this->app->bind(
			'Myrepo\Storage\Category\CategoryRepository',
			'Myrepo\Storage\Category\EloquentCategoryRepository'
			);
	}
}

?>