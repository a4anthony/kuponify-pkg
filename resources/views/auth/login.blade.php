@extends('kuponify::index')

@section('content')
	<div class="container">
		<div class="row justify-content-center" style="min-height: 80vh;">
			<div class="col-md-8 my-auto">
				<div class="card my-auto" style="margin-top: auto; margin-bottom: auto;">
					<div class="card-header">{{ __('Login') }}</div>

					<div class="card-body b-shadow">
						<form method="POST" action="{{ route('kuponify.login') }}">
							@csrf


						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection