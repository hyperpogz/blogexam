@extends('admin.layouts.main')

@section('content')

<!--start l-contents-->
<div class="l-container u-clear">

	<!--start l-main-->
	<main class="l-main js-main">
		<div class="l-main-block"></div>
		<a href="{{route('admin.post.create')}}" class="l-main-button">
			<div class="button">
				<p class="button-text">New Article</p>
			</div>
		</a>
		<ul class="archive archive-admin">
			@if(count($posts))
				@foreach($posts as $post)
				<li class="archive-item">
					<a href="{{route('admin.post.edit', $post->id)}}" class="post-article">
						<time class="post-article-date" datetime="2016-9-16">{{$post->created_at}}</time>
						<h1 class="post-article-title">{{$post->title}}</h1>
					</a>
					<a href="{{route('admin.post.delete', $post->id)}}" class="delete">X</a>
				</li>
				@endforeach
			@else
				<li>No items.</li>
			@endif
		</ul>
	</main>
	<!--end l-main-->

</div>

<!--end l-contents-->
	
@endsection
