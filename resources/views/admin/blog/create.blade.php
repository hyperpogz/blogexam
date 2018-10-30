@extends('admin.layouts.main')

@section('content')

<!--start l-contents-->
<div class="l-container u-clear">

	<!--start l-main-->
	<main class="l-main js-main">

		<div class="l-main-block"></div>

		<form action="{{route('admin.post.save')}}" class="form" method="post" enctype="multipart/form-data">

			@csrf

			<input type="hidden" name="users_id" value="{{auth()->user()->id}}">

			<label for="image" class="form-title">EYE CATCH IMAGE
				<div class="form-file u-clear">
					<span class="file-name">{{old('image')}}</span>
					<span class="form-file-button">UPLOAD</span>
				</div>
			</label>

			<input type="file" name="image" id="image" class="input input-image">

			<label for="title" class="form-title">TITLE</label>
				<div class="form-body">
					<input type="text" name="title" id="title" class="input input-text" value="{{old('title')}}">
				</div>
			<label for="content" class="form-title">CONTENTS</label>

			<div class="form-textarea">
				<textarea name="content" id="content" cols="30" rows="10" class="input input-contents">{{old('content')}}</textarea>
			</div>

			<div class="errors">
				<p>{{$errors->first('message')}}</p>
			</div>

			<label for="submit" class="form-button">
				<div class="button">
					<p class="button-text">Submit</p>
				</div>
			</label>

			<input type="submit" id="submit" class="input input-submit">

			<a href="{{route('admin.index')}}" class="form-button">
				<div class="button">
					<p class="button-text">Back</p>
				</div>
			</a>

		</form>
	</main>
	<!--end l-main-->

</div>
<!--end l-contents-->

@endsection
