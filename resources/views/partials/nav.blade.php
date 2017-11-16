		<span class="overlay"></span>
		<nav class="main">
			<a href="/" class="brand nav-block">
				<img class="logo" src="/assets/img/logos/img-logo.png"/>
				<span>CoffeeTalk</span>
			</a>
			<div class="search nav-block nav-redes-sociales">
				<a href="https://www.facebook.com/CoffeeTalkArgentina" target="_blank">
					<img src="/assets/img/social/icon-facebook.svg"/>
				</a>
				<a href="https://twitter.com/CoffeeTalkARG" target="_blank">
					<img src="/assets/img/social/icon-twitter.svg"/>
				</a>
				<a href="https://www.linkedin.com/company/coffeetalk" target="_blank">
					<img src="/assets/img/social/icon-linkedin.svg"/>
				</a>
				<a href="https://www.youtube.com/user/CoffeeTalkNews" target="_blank">
					<img src="/assets/img/social/icon-youtube.svg"/>
				</a>
			</div>
			<ul class="main-nav">
				<li><a href="/nosotros">Nosotros</a></li>
				<li><a href="/marketing">Marketing</a></li>
				<li><a href="/comunicacion">Comunicación</a></li>
				<li><a href="/traduccion">Traducción</a></li>
				<li><a href="/novedades">News</a></li>
				<li><a href="/contacto">Contacto</a></li>
				<li class="dropdown community-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@if(Session::get('lang')) {{strtoupper(Session::get('lang'))}} @else ES @endif <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/lang/es">Español</a></li>
						<li><a href="/lang/en">English</a></li>
					</ul>
				</li>
			</ul>
			<div class="responsive-sidebar-nav">
				<a href="#" class="toggle-slide menu-link btn">&#9776;</a>
			</div>
		</nav>

		<nav id="slide-menu" class="slide-menu" role="navigation">
			<div class="brand">
				<a href="/">
					<img src="/assets/img/logos/img-logo-sidebar.png" height="50" title="CoffeeTalk" alt="CoffeeTalk">
				</a>
			</div>
			<ul class="slide-main-nav">
				<li><a href="/nosotros">Nosotros</a></li>
				<li><a href="/marketing">Marketing</a></li>
				<li><a href="/comunicacion">Comunicación</a></li>
				<li><a href="/traduccion">Traducción</a></li>
				<li><a href="/novedades">News</a></li>
				<li><a href="/contacto">Contacto</a></li>
				<li class="dropdown community-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@if(Session::get('lang')) {{strtoupper(Session::get('lang'))}} @else ES @endif <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/lang/es">Español</a></li>
						<li><a href="/lang/en">English</a></li>
					</ul>
				</li>
			</ul>
		</nav>