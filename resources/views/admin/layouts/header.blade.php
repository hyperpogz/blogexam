<!--start header-->
<header class="l-header l-header-admin js-header">
	<div class="l-header-top u-clear">
		
		<div class="l-header-logo">
			<a class="logo" href="/">
				<img src="{{ asset('/images/logo-admin.png') }}" width="138" height="28" alt="BLOG"/>
			</a>
		</div>
		@if(!auth()->guest())
		<div class="l-header-text">
			<p>ADMIN PAGE | <a href="{{route('logout')}}">LOGOUT</a></p>
		</div>
		@endif
	</div>
</header>
<!--end header-->