<!DOCTYPE html>
<html lang="en">

<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<meta name="assets-path" content="{{ route('kuponify.assets') }}"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ kuponifyAsset('css/app.css') }}">


	<script src="{{ kuponifyAsset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-500 min-h-screen">
@inertia

{{--<div id="app" class="container mx-auto">--}}
{{--	<nav class="bg-white px-6 py-2 flex items-center justify-between">--}}
{{--		<div>--}}
{{--			<a href="/" class="bg-blue-100 hover:bg-blue-50 shadow-sm block px-3 py-2 rounded-lg">--}}
{{--				<span class="font-bold uppercase text-blue-600 block">Kuponify</span>--}}
{{--				<span class="block uppercase font-light text-sm  text-gray-500">Coupon Generator</span>--}}
{{--			</a>--}}
{{--		</div>--}}
{{--		<div>--}}
{{--			<a href="{{ route('kuponify.showLoginForm') }}">Login</a>--}}
{{--		</div>--}}
{{--	</nav>--}}
{{--	<nav-bar/>--}}
{{--	<main class="py-4">--}}
{{--		@yield('content')--}}
{{--	</main>--}}
{{--</div>--}}

</body>

</html>
