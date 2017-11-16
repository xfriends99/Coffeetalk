		<footer class="main">
			<ul>
				<li><a href="/nosotros">Nosotros</a></li>
				<li><a href="/marketing">Marketing</a></li>
				<li><a href="/comunicacion">Comunicación</a></li>
				<li><a href="/novedades">News</a></li>
				<li><a href="/casos">Casos de éxito</a></li>
				<li><a href="/contacto">Contacto</a></li>
				<li class="dropdown community-dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">@if(Session::get('lang')) {{strtoupper(Session::get('lang'))}} @else ES @endif <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="/lang/es">Español</a></li>
						<li class="divider"></li>
						<li><a href="/lang/en">English</a></li>
					</ul>
				</li>
			</ul>
			<p>Copyright &copy; CoffeeTalk S.R.L. Todos los derechos reservados.</p>
			<p class="less-significant">
				<a href="/index">
					Obviamente, diseñado por<br><br>
					<img src="/assets/img/logos/img-logo-footer.png"/>
				</a>
			</p>
		</footer>