@extends('layouts.main')

@section('content')

<!--start l-contents-->
<div class="l-container u-clear">

	<!--start l-main-->
	<main class="l-main js-main">
		<div class="l-main-block"></div>

		<div class="page-number">
			{!!$posts->total() ? 'Page <span>'.$posts->currentPage().'/'.$posts->lastPage().'</span>' : ''!!}
		</div>

		<div class="archive">
			<ul class="archive-list">
				@if($posts->total())
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
					<li>No post to show.</li>
				@endif
			</ul>
		</div>

		<div class="paginate">
			{{ $posts->links() }}
		</div>
	
	</div>
</main>
<!--end l-main-->

</div>
<!--end l-contents-->
	
@endsection
