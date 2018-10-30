@extends('layouts.main')

@section('content')
<!--start l-main-->
<main class="l-main js-main">
	<div class="l-main-block"></div>
	<div class="single">
		<img src="{{$post->image ? asset('uploads/'. $post->image) : ''}}" alt="" class="card-image">
		<div class="l-container u-clear">
			<h1 class="single-title">{{$post->title}}</h1>
			<time class="single-date" datetime="{{$post->dateYearMonthDay($post->created_at)}}">{{$post->created_at}}</time>
			<p class="single-desc">{{$post->content}}</p>
			<a href="{{route('index')}}" class="single-button">
				<div class="button">
					<p class="button-text">Top</p>
				</div>
			</a>
		</div>
	</div>
</main>
<!--end l-main-->
@endsection
