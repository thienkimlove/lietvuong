<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Category;
use App\Post;


Route::resource('admin/posts', 'PostsController');
Route::resource('admin/categories', 'CategoriesController');
Route::resource('admin/questions', 'QuestionsController');
Route::resource('admin/products', 'ProductsController');
Route::resource('admin/settings', 'SettingsController');
Route::resource('admin/contacts', 'ContactsController');
Route::resource('admin/videos', 'VideosController');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::post('saveContact', ['as' => 'saveContact', 'uses' => 'MainController@saveContact']);
Route::post('createQuestion', ['as' => 'createQuestion', 'uses' => 'MainController@createQuestion']);
Route::post('registerEmail', ['as' => 'registerEmail', 'uses' => 'MainController@registerEmail']);

Route::get('admin', 'AdminController@index');
Route::get('tim-kiem', 'MainController@search');

Route::get('tu-khoa/{tag}', 'MainController@tag');

Route::get('video/{value?}', 'MainController@video');


Route::get('diem-ban', 'MainController@phanphoi');

Route::get('lien-he', 'MainController@lienhe');
Route::get('hoi-dap-chuyen-gia', function(){
    $page = 'hoi-dap-chuyen-gia';
    $questions = \App\Question::paginate(10);
    return view('frontend.hoi-dap-chuyen-gia', compact('page', 'questions'))->with([
        'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : env('WEBSITE_NAME'),
        'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : env('WEBSITE_NAME'),
        'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : env('WEBSITE_NAME'),
    ]);
});

Route::get('/', 'MainController@index');

Route::get('{value}', function ($value) {
    if (preg_match('/([a-z0-9\-]+)\.html/', $value, $matches)) {
        $page = 'post_detail';
        $post = Post::where('slug', $matches[1])->first();

        return view('frontend.post_detail', compact('post', 'page'))->with([
            'meta_title' => $post->title . ' | '.env('WEBSITE_NAME'),
            'meta_desc' => $post->desc,
            'meta_keywords' => ($post->tagList) ? implode(',', $post->tagList) : env('WEBSITE_NAME').', huongdan, bai viet',
        ]);
    } else {
        if (in_array($value, ['san-pham', 'thong-tin-san-pham'])) {
            $page = 'san-pham';
            $category = Category::where('slug', 'thong-tin-san-pham')->first();
            $post = Post::where('category_id', $category->id)->first();

            return view('frontend.post_detail', compact('post', 'page'))->with([
                'meta_title' => 'Thông tin sản phẩm | '.env('WEBSITE_NAME'),
                'meta_desc' => 'Thông tin sản phẩm',
                'meta_keywords' => env('WEBSITE_NAME').', Thông tin sản phẩm',
            ]);

        }
        $category = Category::where('slug', $value)->first();
        if ($category->parent_id) {
            $page = $category->parent->slug;
            $whereConditions = [
                'status' => true,
                'category_id' => $category->id
            ];
        } else {
            $page = $category->slug;
            if ($category->subCategories->count() > 0) {
                $whereConditions = [
                    'status' => true,
                    'category_id' => $category->subCategories->lists('id')
                ];
            } else {
                $whereConditions = [
                    'status' => true,
                    'category_id' => $category->id
                ];
            }

        }
        $topPosts = Post::where($whereConditions)->whereHas('modules', function($q){
            $q->where('slug', 'hien-thi-chuyen-muc')->orderBy('order');
               })
            ->limit(5)
            ->get();
        $posts = Post::where($whereConditions)->paginate(8);

        return view('frontend.category', compact(
            'category', 'page', 'topPosts', 'posts'
        ))->with([
            'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : $category->name.' | '.env('WEBSITE_NAME'),
            'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : $category->name.' '.env('WEBSITE_NAME'),
            'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : env('WEBSITE_NAME'),
        ]);
    }
});




