@extends('app')

@section('content')
<!--
<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			.body1 {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container1 {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content1 {
				text-align: center;
				display: inline-block;
			}

			.title1 {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote1 {
				font-size: 24px;
			}
		</style>
	</head>
	<body class="body1">
		<div class="container1">
			<div class="content1">
				<div class="title1">Laravel 5</div>
				<div class="quote1">{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</body>
</html>
-->
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
			.body1 {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container1 {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content1 {
				text-align: center;
				display: inline-block;
			}

			.title1 {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote1 {
				font-size: 24px;
			}
		</style>
	
<div class="body1">
<div class="container1">
	<div>
		<div class="col-md-10 col-md-offset-1">
			<div>
				<div class="content1">
					<div class="title1">Laravel 5</div>
					<div class="quote1">{{ Inspiring::quote() }}</div>
				</div>
		
				<!--<div class="panel-heading">About Me</div>

				<div class="panel-body">
					Hello Everyone! I am Mark Joseph Napisa a student studying BSIT.
				</div>-->
			</div>
		</div>
	</div>
</div>
</div>
@endsection
