<div class="box-video cf">
    <h3 class="title">
        <span class="video">Video</span>
    </h3>
    @if ($firstVideo = $mostVideos->shift())
        <div class="videoBoxIn">
            <div class="videoBoxInObject">
                <iframe width="280" height="280" src="{{$firstVideo->url}}" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    @endif
    <ul class="list-video">
        @foreach ($mostVideos as $video)
            <li><a href="{{url('video', $video->slug)}}">{{str_limit($video->title, 40)}}</a></li>
        @endforeach
    </ul>
</div>