<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}"/>
	<meta name="assets-path" content="{{ route('kuponify.assets') }}"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="{{ kuponifyAsset('css/app.css') }}">

	@routes
	<script src="{{ kuponifyAsset('js/app.js') }}" defer></script>
</head>

<body class="bg-gray-50 min-h-screen">
@inertia
</body>

</html>
