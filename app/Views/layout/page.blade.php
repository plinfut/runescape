<!DOCTYPE html>
<html>
<head>
    <title>{{ $mainTitle }} - {{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/general.css') }}"/>
</head>
<body>
	@include('layout.mainMenu')
	<div id="main-content">
		<h1>{{ $mainTitle }}</h1>
		@include('layout.flashFeedback')
		@include($mainView, $mainData)
	</div>
</body>
</html>
