<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="/">TOPICA AI</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Languages<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/vn">Vietnamese</a>
                        </li>
                        <li>
                            <a href="/">English</a>
                        </li>
                    </ul>
                </li>
				<li>
					<a class="page-scroll" href="#about">About</a>
				</li>
				<li>
					<a class="page-scroll" href="#services">Services</a>
				</li>
				<li>
					<a class="page-scroll" href="/documents">Documents</a>
				</li>
				<li>
					<a class="page-scroll" href="/forum" id="forum">Forum</a>
				</li>
				@if (Auth()->check())
				<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="/sign-out"><i class="fa fa-fw fa-power-off"></i> Sign out</a>
                        </li>
                    </ul>
                </li>
				@else
				<li>
					<a class="page-scrool" href="/sign-in">Sign In</a>
				</li>
				@endif
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
