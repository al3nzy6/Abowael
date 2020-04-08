@extends('publicLay.app')
@section('title')
{{ $blog->title }} - رمضان العنزي
@endsection
@section('content')
<div class="col-sm-12">
	<article class="content">
		<div class="sharethis-inline-share-buttons st-right st-has-labels  st-inline-share-buttons st-animated" id="st-1"><div class="st-total st-hidden">
  <span class="st-label"></span>
  <span class="st-shares">
    Shares
  </span>
</div><div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
  <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
  <span class="st-label">Share</span>
</div><div class="st-btn" data-network="twitter" style="display: inline-block;">
  <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
  <span class="st-label">Tweet</span>
</div><div class="st-btn" data-network="pinterest" style="display: inline-block;">
  <img alt="pinterest sharing button" src="https://platform-cdn.sharethis.com/img/pinterest.svg">
  <span class="st-label">Pin</span>
</div><div class="st-btn" data-network="email" style="display: inline-block;">
  <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">
  <span class="st-label">Email</span>
</div><div class="st-btn st-last" data-network="sharethis" style="display: inline-block;">
  <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">
  <span class="st-label">Share</span>
</div></div>
		<div class="post-thumb" width="100%">

			@if (!empty($blog->picture) && $blog->picture != 'style/images/logo.png')
			<img src="{{asset($blog->picture)}}" class="img-responsive post-image" alt="">
			@endif
		</div>
		
		<h1>{{ $blog->title }}</h1>
		<div class="date">
			<ul>
				<li>بواسطة <span><font color="red"> Abowael </font></span> --</li>
				<li>التاريخ <span><font color="red">{{$blog->created}}</font></span>   --</li>
				<li>مشاهدة<span><font color="red">{{$blog->view}} </font></span></li>
			</ul>
		</div>
		{!! $blog->content !!}
	</article>
</div>
@endsection