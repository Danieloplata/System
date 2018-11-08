<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thanks, you're all done!</title>
	<style>
		body {
			background: url({{ URL::asset('img/bg.jpg') }}) right bottom no-repeat;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			position: relative;
			height: 100%;
		}
		.checkmark {
			font-size: 9.75rem;
		}
		@media only screen and (max-width: 1099px) {
			.container {
				background: #fff;
				margin-left: 2%;
				margin-right: 2%;
				margin-top: 2%;
				padding-bottom: 3%;
				padding-left: 1%;
				padding-right: 1%;
				border-radius: 25px;
				border: 1px solid #d6351b;
			}
			.spacer {
				height: 5%;
			}
			.thankyou {
				padding-top: 3%;
			}
		}
		@media only screen and (min-width: 1100px) {
		
			.container {
				background: #fff;
				margin-left: 30%;
				margin-right: 30%;
				margin-top: 2%;
				padding-bottom: 3%;
				padding-left: 1%;
				padding-right: 1%;
				border-radius: 25px;
				border: 1px solid #d6351b;
			}
			.spacer {
				height: 5%;
			}
			.thankyou {
				padding-top: 3%;
			}
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
	
</head>
<body>

	<div class="spacer">

	</div>

	<div class="container">

		<header class="thankyou" id="header">
			<h1 class="site-header__title" data-lead-id="site-header-title">OOPS!</h1>
		</header>

		<div class="main-content">
			<i class="fa fa-times main-content__checkmark" id="checkmark" style="color:red"></i>
			
			<p class="main-content__body" data-lead-id="main-content-body">
				This survey is not currently available in your country.
			</p>
		</div>

	</div>
	
</body>
</html>