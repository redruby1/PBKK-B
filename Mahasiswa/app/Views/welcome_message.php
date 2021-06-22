<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome to CodeIgniter 4!</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

	<!-- STYLES -->

	<style {csp-style-nonce}>
		* {
			transition: background-color 300ms ease, color 300ms ease;
		}
		*:focus {
			background-color: rgba(221, 72, 20, .2);
			outline: none;
		}
		html, body {
			color: rgba(33, 37, 41, 1);
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
			font-size: 16px;
			margin: 0;
			padding: 0;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
			text-rendering: optimizeLegibility;
		}
		.bg-container{
			background:#40E0D0;
		}
		.bg-tabs-content{
			background:#20B2AA;   
		}
		.text-white {
			color: #fff !important;
		}
		.ui-bg-overlay-container, .ui-bg-video-container {
			position: relative;
		}
		.ui-bg-cover {
			background-color: transparent;
			background-position: center center;
			background-size: cover;
		}
		.ui-bg-overlay-container .ui-bg-overlay {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
			display: block;
		}

		.bg-dark {
			background-color: rgba(24,28,33,0.9) !important;
		}
		.opacity-50 {
			opacity: .5 !important;
		}
		.bg-dark {
			background-color: rgba(24,28,33,0.9) !important;
		}
		.ui-bg-overlay-container>*, .ui-bg-video-container>* {
			position: relative;
		}
		.text-center {
			text-align: center;
		}
		
		@media (min-width: 992px){
			.container, .container-fluid {
				padding-right: 2rem;
				padding-left: 2rem;
			}
		}
		.media, .media>:not(.media-body), .jumbotron, .card {
			-ms-flex-negative: 1;
			flex-shrink: 1;
		}
		.d-flex, .d-inline-flex, .media, .media>:not(.media-body), .jumbotron, .card {
			-ms-flex-negative: 1;
			flex-shrink: 1;
		}
		.ui-w-100 {
			width: 100px !important;
			height: auto;
		}
		.font-weight-bold {
			font-weight: 700 !important;
		}
		.opacity-75 {
			opacity: .75 !important;
		}
		.tabs-alt.nav-tabs .nav-link.active, .tabs-alt.nav-tabs .nav-link.active:hover, .tabs-alt.nav-tabs .nav-link.active:focus, .tabs-alt>.nav-tabs .nav-link.active, .tabs-alt>.nav-tabs .nav-link.active:hover, .tabs-alt>.nav-tabs .nav-link.active:focus {
			-webkit-box-shadow: 0 -2px 0 #26B4FF inset;
			box-shadow: 0 -2px 0 #26B4FF inset;
		}

		.nav-tabs:not(.nav-fill):not(.nav-justified) .nav-link, .nav-pills:not(.nav-fill):not(.nav-justified) .nav-link {
			margin-right: .125rem;
		}
		.nav-tabs.tabs-alt .nav-link, .tabs-alt>.nav-tabs .nav-link {
			border-width: 0 !important;
			border-radius: 0 !important;
			background-color: transparent !important;
		}
		.nav-tabs .nav-link.active {
			border-bottom-color: #fff;
		}
	</style>
</head>
<body>

<!-- HEADER: MENU + HEROE SECTION -->
<div class="bg-container">
  <div class="container">
    <div class="text-center py-5">
    	<img src="" alt class="ui-w-100 rounded-circle">
      	<div class="col-md-8 col-lg-6 col-xl-5 p-0 mx-auto">
        <h4 class="font-weight-bold my-4 text-white">Anisa Aurafitri - 05111840000049</h4>
        <div class="text-muted mb-4">
			PBKK - B / Informatika / Institut Teknologi Sepuluh Nopember
		</div>
    </div>

  </div>
  <hr class="m-0">

  <!-- <ul class="nav nav-tabs bg-tabs-content tabs-alt justify-content-center">
    <li class="nav-item">
    	<a class="nav-link py-4 active" href="#">About Me</a>
    </li>
    <li class="nav-item">
    	<a class="nav-link py-4" href="#">Contact</a>
    </li>
  </ul> -->

</div>

<!-- SCRIPTS -->

<script>
	function toggleMenu() {
		var menuItems = document.getElementsByClassName('menu-item');
		for (var i = 0; i < menuItems.length; i++) {
			var menuItem = menuItems[i];
			menuItem.classList.toggle("hidden");
		}
	}
</script>

</body>
</html>