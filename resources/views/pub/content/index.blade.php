@extends('publicLay.app')
@section('content')
<h3 class="category-headding "> مقالات  </h3>
<div class="headding-border"></div>
<section class="recent_news_inner">
    <div class="row">
        @foreach ($raContents as $raContent)
        <div class="item col-lg-6">
            <div class="post-wrapper wow fadeIn animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;">
                <h3><a href="{{ Route('showBlog', [$raContent->id, Str::arabic_slug($raContent->title)]) }}">{{ $raContent->title }}</a></h3>
                <div class="post-thumb">
                    <a href="{{ Route('showBlog', [$raContent->id, Str::arabic_slug($raContent->title)]) }}">
                        <!--<img class="img-responsive" src="images/recent_news_01.jpg" alt="">-->
                        {{-- <?php $path = $raContent->picture; ?> --}}
                        <img class="img-responsive" src="{{ asset($raContent->picture) }}" alt="">
                    </a>
                </div>
                <!--                                        <div class="post-info meta-info-rn">
                    <div class="slide">
                        <a target="_blank" href="#" class="post-badge btn_six">T</a>
                    </div>
                </div>-->
            </div>
            <div class="post-title-author-details">
                <div class="post-editor-date">
                    <div class="post-date">
                    <i class="pe-7s-clock"></i>  {{ $raContent->created }}                                            </div>
                    <div class="post-author-comment"><i class="pe-7s-comment"></i>  {{$raContent->view}} </div>
                </div>
                {{ Str::limit(strip_tags($raContent->content), 130, '...') }}<p> <a style="color:white; text-decoration: none;" href="{{ Route('showBlog', [$raContent->id, Str::arabic_slug($raContent->title)]) }}" class="btn btn-primary form-control">...اقرأ أكثر</a></p>
            </div>
        </div>
        @endforeach
    </div>
</section>
<h3 class="category-headding "> الاخبار  </h3>
<div class="headding-border"></div>
<div class="row rn_block">
    @foreach ($raContents19 as $raContent19)
    <div class="col-md-4 col-sm-6 padd">
        <div class="post-wrapper wow fadeIn animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;"><!-- image -->
        <div class="post-thumb">
            <a href="{{ Route('showBlog', [$raContent->id, Str::arabic_slug($raContent->title)]) }}">
                <img class="img-responsive" src="{{ asset($raContent19->picture) }}" alt="">
            </a>
        </div>
        <div class="post-info meta-info-rn">
            <div class="slide">
                <a target="_blank" href="{{ Route('showBlog', [$raContent->id, Str::arabic_slug($raContent->title)]) }}" class="post-badge btn_eight">{{ $raContent19->title }}</a>
            </div>
        </div>
    </div>
    <div class="post-title-author-details">
        <h4>{{ Str::limit(strip_tags($raContent19->content), 130, '...') }}<a href="{{ Route('showBlog', [$raContent->id, Str::arabic_slug($raContent->title)]) }}">...اقرأ أكثر</a>
        </h4>
        <div class="post-editor-date">
            <div class="post-date">
            <i class="pe-7s-clock"></i>  {{$raContent19->created}}                                        </div>
            <div class="post-author-comment"><i class="pe-7s-comment"></i> 46254 </div>
        </div>
    </div>
</div>

@endforeach
</div>
<section class="politics_wrapper" style="padding-bottom:: 0px !Important;">
<h3 class="category-headding ">شعر</h3>
<div class="headding-border"></div>
<div class="row center">
    {{$ShaarBlogs->title}}

    {!!$ShaarBlogs->content!!}
</div>
            @endsection