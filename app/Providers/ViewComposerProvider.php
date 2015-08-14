<?php namespace App\Providers;

use App\Category;
use App\Post;
use App\Question;
use App\Setting;
use App\Video;
use DB;
use Illuminate\Support\ServiceProvider;

class ViewComposerProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		DB::listen(function($sql, $bindings) {

			for($j=0; $j<sizeof($bindings); $j++) {
				$sql = implode($bindings[$j], explode('?', $sql, 2));
			}
			$logFile = fopen(storage_path('logs/query.log'), 'a+');
			//write log to file
			fwrite($logFile, $sql . "\n");
			fclose($logFile);
		});

        view()->composer('frontend.box_mostRead', function ($view) {

			$mostRead = Post::whereHas('modules', function($q){
				$q->where('slug', 'bai-doc-nhieu-nhat')->orderBy('order');
			})->limit(4)->get();

            $view->with(['mostRead' => $mostRead]);

        });

		view()->composer('frontend.box_video', function ($view) {
			$view->with(['mostVideos' => Video::latest('updated_at')->limit(3)->get()]);

		});

		view()->composer('frontend.header', function ($view) {
			$view->with(['categories' => Category::whereNull('parent_id')->where('slug', '!=', 'diem-ban')->get()]);

		});

		view()->composer('frontend.footer', function ($view) {
			$view->with(['categories' => Category::whereNull('parent_id')->where('slug', '!=', 'diem-ban')->get()]);

		});

		view()->composer('frontend.box_support', function ($view) {

			$view->with('homepageQuestions',Question::latest('updated_at')->limit(2)->get());

		});


		view()->composer('frontend.box_adv', function ($view) {
			$settings = Setting::lists('value', 'name');
			$view->with('html', $settings['box_adv']);
		});

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
