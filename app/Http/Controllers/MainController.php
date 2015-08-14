<?php namespace App\Http\Controllers;


use App\Category;
use App\Contact;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\QuestionRequest;
use App\Http\Requests\RegisterEmailRequest;
use App\Post;
use App\Question;
use App\Setting;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{   
    public function index()
    {
        $page = 'index';
        $settings = Setting::lists('value', 'name');
        $listPosts = Post::where('status', true)
            ->whereHas('modules', function($q){
            $q->where('slug', 'phi-tien-liet-tuyen-trang-chu')->orderBy('order');
        })
            ->limit(3)
            ->get();
        $listProducts = Post::where('status', true)
            ->whereHas('modules', function($q){
                $q->where('slug', 'dinh-duong-trang-chu')->orderBy('order');
            })
            ->limit(3)
            ->get();

        return view('frontend.index', compact(
            'page', 'listPosts', 'listProducts'
        ))->with([
            'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : env('WEBSITE_NAME'),
            'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : env('WEBSITE_NAME'),
            'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : env('WEBSITE_NAME'),
        ]);
    }

    public function tag($keyword)
    {
        $tag = Tag::where('slug', $keyword)->first();
        $posts = $tag->posts();
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Các bài viết với nhãn '.$keyword.' tại '.env('WEBSITE_NAME'),
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }
    public function video($value = null)
    {
        $page = 'video';

        $hotVideos = Video::where('is_video', true)
            ->latest('updated_at')
            ->limit(5)
            ->get();

        if ($value) {
            $videoMain = Video::where('slug', $value)->first();
        } else {
            $videoMain = $hotVideos->shift();
        }

        $videos = Video::latest('updated_at')->paginate(10);

        return view('frontend.video', compact('page', 'hotVideos', 'videos', 'videoMain'))->with([
            'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'Video | '.env('WEBSITE_NAME'),
            'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'Video '.env('WEBSITE_NAME'),
            'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'Video, '.env('WEBSITE_NAME'),
        ]);
    }
    
    public function phanphoi()
    {
        $page = 'diem-ban';

        $category = Category::where('slug', 'diem-ban')->first();

        return view('frontend.diem-ban', compact('page', 'category'))->with([
            'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'Điểm bán | '.env('WEBSITE_NAME'),
            'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'Điểm bán '.env('WEBSITE_NAME'),
            'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'Điểm bán, '.env('WEBSITE_NAME'),
        ]);
    }

    public function lienhe()
    {
        $page = 'lien-he';
        return view('frontend.lien-he', compact('page'))->with([
            'meta_title' => (!empty($settings['meta_title'])) ? $settings['meta_title'] : 'Liên hệ | '.env('WEBSITE_NAME'),
            'meta_desc' => (!empty($settings['meta_desc'])) ? $settings['meta_desc'] : 'Liên hệ '.env('WEBSITE_NAME'),
            'meta_keywords' => (!empty($settings['meta_keywords'])) ? $settings['meta_keywords'] : 'Liên hệ, '.env('WEBSITE_NAME'),
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('q');
        $posts = Post::where('title', 'LIKE', '%'.$keyword.'%')
            ->where('status', true)
            ->paginate(10);
        return view('frontend.search', compact('posts', 'keyword'))->with([
            'meta_title' => ' Các bài viết với nhãn '.$keyword.' tại '.env('WEBSITE_NAME'),
            'meta_desc' => '',
            'meta_keywords' => $keyword,
        ]);
    }

    /**
     * save contact form.
     * @param ContactRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function saveContact(ContactRequest $request)
    {
        Contact::create($request->all());
        return redirect('/');
    }

    public function registerEmail(RegisterEmailRequest $request)
    {
        Mail::send('emails.register', ['email' => $request->input('email')], function ($message) {
            $message->from(env('EMAIL_FROM_EMAIL'), env('EMAIL_FROM_NAME'));

            $message->to(env('EMAIL_TO_EMAIL'))
                ->cc('thienkimlove@gmail.com')
                ->subject('Email đăng ký nhận tin!');
        });
        return redirect('/');
    }

    /**
     * save question form.
     * @param ContactRequest|QuestionRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function createQuestion(QuestionRequest $request)
    {
        Question::create($request->all());
        return redirect('/');
    }


    /**
     * ajax increase likes.
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function increaseLikes(Request $request)
    {
        $post = Post::findOrFail($request->input('post_id'));
        $post->likes = $post->likes + 1;
        $post->save();

        return \Response::json([]);
    }

}
