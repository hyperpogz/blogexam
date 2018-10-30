@extends('layouts.main')

@section('content')
<!--start l-contents-->
<div class="l-container u-clear">

	<!--start l-main-->
	<main class="l-main js-main">
		<div class="l-main-block"></div>
		<div class="archive">
			<ul class="archive-list">
				@if(count($posts))
					@foreach($posts as $post)
					<li class="archive-item">
						<article class="card">
							<a href="{{route('post.single-post', [$post->id, $post->slug])}}" class="card-link">
								<img src="{{$post->image ? asset('uploads/'. $post->image) : ''}}" alt="" class="card-image">
								<div class="card-bottom">
									<h1 class="card-title">{{$post->title}}</h1>
									<time class="card-date" datetime="2016-9-16">
										{{$post->created_at}}
									</time>
								</div>
							</a>
						</article>
					</li>			
					@endforeach
				@else
					<li class="no-item">No post to show.</li>
				@endif
			</ul>
		</div>
		@if(count($posts))
		<a href="{{route('posts.archive')}}" class="archive-button">
			<div class="button">
				<p class="button-text">More</p>
			</div>
		</a>
		@endif
		
	</main>
	<!--end l-main-->

</div>
<!--end l-contents-->

@endsection
