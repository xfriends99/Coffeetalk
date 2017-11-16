@extends('layouts.home')
@section('metadata')
	@parent
@stop
@section('title')
	@parent
@stop
@section('css')
	@parent
@stop

@section('content')

	<body class="docs language-php">
		<!--NAV-->
		@include('partials.nav')
		<!--NAV-->

		<div class="docs-wrapper container">
			<section class="sidebar sidebar-right">
				<div id="carbonads">
					<span>
						<span class="carbon-wrap">
							<a href="casos" class="carbon-img">
								<img src="assets/img/charts/img-video-nosotros.gif" alt="" border="0" height="100" width="130" style="width: 100%;height:auto;">
							</a>
							<a href="casos" class="carbon-text">
								¿Sabías que contamos con un equipo con más de 40 expertos?
							</a>
						</span>
						<a href="casos" class="carbon-poweredby">Descubrí nuestras experiencias de éxito</a>
					</span>
				</div>
				<ul>
					<li>
						<h2>Marketing</h2>
						<ul>
							<li><a href="marketing#marketing-estrategico">Marketing Estratégico</a></li>
							<li><a href="marketing#marketing-digital">Marketing Digital</a></li>
							<li><a href="marketing#diseno-web">Diseño Web</a></li>
							<li><a href="marketing#redes-sociales">Redes Sociles</a></li>
							<li><a href="marketing#email-marketing">Email Marketing</a></li>
							<li><a href="marketing#sem">Posicionamiento Web</a></li>
						</ul>
					</li>
					<li>
						<h2>Comunicación</h2>
						<ul>
							<li><a href="comunicacion#comunicacion-estrategica">Estrategia de comunicación</a></li>
							<li><a href="comunicacion#branding">Branding</a></li>
							<li><a href="comunicacion#contenidos">Generación de contenidos</a></li>
							<li><a href="comunicacion#eventos">Producción de eventos</a></li>
							<li><a href="comunicacion#multimedia">Producción de multimedia</a></li>
						</ul>
					</li>
					<li>
						<h2>Traducción</h2>
						<ul>
							<li><a href="traduccion#traduccion">Traducción</a></li>
							<li><a href="traduccion#localizacion">Localización</a></li>
							<li><a href="traduccion#interpretacion">Interpretación</a></li>
						</ul>
					</li>
					<li>
						<a class="link" href="casos">Casos de éxito</a>
					</li>	
					<li>
						<a class="link" href="contacto">Contacto</a>
					</li>	
				</ul>
			</section>
			<article class="nosotros">
				<h1>Somos CoffeeTalk <span class="hidden-xs">Argentina</span></h1>
				<p>Hoy, el mundo de los negocios plantea escenarios cada vez más complejos y cambiantes. Las empresas se ven obligadas a enfocar sus esfuerzos en las áreas de trabajo que les permitan diferenciarse del resto de sus competidores.</p>
				<iframe class="video-nosotros" src="https://www.youtube.com/embed/yvHtTrOtNe8?autoplay=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3&theme=light&controls=0&disablekb=1&mute=1&loop=1" frameborder="0" allowfullscreen></iframe>
				<h2>Equipo</h2>
				<p>Estamos orgullosos de contar con un equipo de profesionales altamente capacitado que comprende las necesidades particulares del negocio y que se esfuerza día a día por brindar las mejores soluciones de comunicación a cada uno de nuestros clientes.</p>
				<p>CoffeeTalk reúne un equipo multidisciplinario especializado en Marketing y Comunicación Estratégica, Diseño Gráfico y Digital, y Organización y Producción de Eventos, que nos permite crear soluciones de alto impacto y valor, y lograr resultados mensurables, positivos y sostenibles a largo plazo.</p>
				<h2>Charlas de café</h2>
				<p>Somos CoffeeTalk porque creemos que las mejores ideas surgen con un café de por medio. Una charla descontracturada puede hacer la diferencia y actuar como disparador de ideas creativas, comunicaciones efectivas, diseños innovadores, sitios web modernos y dinámicos y eventos inolvidables.</p>
				<img class="img-servicio" src="assets/img/charts/img-chart-cafe.gif"/>
				<p>Buscamos responder a todas las necesidades de comunicación de las organizaciones y asistirlas en la identificación de nuevas oportunidades de mejora. Nuestro objetivo es establecer un vínculo de confianza que nos permita, dentro y fuera del negocio, juntarnos con nuestros clientes a conversar y tomar un buen café.</p>
				<h2>Red</h2>
				<p>Somos Miembros Calificados de Red Plataforma, una de las principales redes de empresas y profesionales de la región que brinda soluciones de Management, Innovación y Liderazgo para la mejora de los procesos de negocio de las organizaciones.</p>
				<p><a name="marketing-digital"></a></p>
			</article>
		</div>

		<!--FOOTER-->
		@include('partials.footer')

		@stop
		<!--FOOTER-->
@section('scripts')

@stop