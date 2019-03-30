<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div id="app">
		<p>Mi apliacación</p>
	</div>

	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>