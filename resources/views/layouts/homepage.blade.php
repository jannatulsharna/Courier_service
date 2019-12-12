<html>
	<head>
		<title>Courier.com.bd</title>


		<link rel="stylesheet" type="text/css" href="{{{asset('css/home_style.css')}}}">
	</head>
	<body>
	<header style="background-image:  url({{asset('image/background3.jpg')}});">
		<div class="style">
			<div class="logo">
				<img src="{{{asset('image/Capture.JPG')}}}">
			</div>
			<ul>
				<li><a href="/">Homepage</a></li>
				<li><a href="#">Sign in or Create</a>
					<div class="logIn_Dropdown">
						<ul>
							<li><a href="#">Customer</a>
								<div class="sub-menu">
									<ul>
										<li><a href="/signin">Log In</a></li>
										<li><a href='/register'>Create</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">Admin</a>
								<div class="sub-menu">
									<ul>
										<li><a href="/admin_signin">Log In</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li><a href="/us">Contact Us</a></li>
			</ul>
		</div>
	</header>
	
@yield('body')
<footer class="footer">
			<a href="/us">About Us</a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="/us">Contact Us</a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="https://www.facebook.com/jannatul.7"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="https://www.linkedin.com/in/jannatul-140a41161/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-envelope" aria-hidden="true"></i></a>
		</footer>
	
	</body>
<html>