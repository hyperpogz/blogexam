@extends('admin.layouts.main')

@section('content')
<!--start l-contents-->
<div class="l-container u-clear">

	<!--start l-main-->
	<main class="l-main js-main">

		<div class="l-main-block"></div>

		<form action="{{route('doLogin')}}" method="post" class="form">

			@csrf

			<label for="user-id" class="form-title">USER ID</label>
			<input type="text" id="user-id" name="username" class="input input-text" value="{{old('username')}}">

			<label for="password" class="form-title">PASSWORD</label>
			<input type="password" id="password" name="password" class="input input-text" autocomplete="off">

			<div class="errors">
				<p>{{ $errors->first('message') }}</p>
			</div>

			<label for="submit" class="form-button">
				<div class="button">
					<p class="button-text">Login</p>
				</div>
			</label>
			<input type="submit" id="submit" class="input input-submit">
		</form>
	</main>
	<!--end l-main-->

</div>
<!--end l-contents-->
	
@endsection
