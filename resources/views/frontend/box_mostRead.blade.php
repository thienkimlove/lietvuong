<h3 class="global-title">
    Bài viết đọc nhiều nhất
</h3>
<div class="box-news cf">
    <div class="data">
        @foreach ($mostRead as $k => $post)
            <div class="item cf{{($k == ($mostRead->count() -1)) ? ' last' : ''}}">
                <a href="{{url($post->slug.'.html')}}" class="thumb">
                    <img src="{{url('t/115x80', $post->image)}}"  alt="{{$post->title}}">
                </a>
                <p>{{str_limit($post->title, env('TITLE_TRIM'))}}</p>
                <a href="{{url($post->slug.'.html')}}">Xem thêm</a>
            </div>
        @endforeach
    </div>
</div>