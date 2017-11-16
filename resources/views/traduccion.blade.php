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
	<body class="home docs language-php">
	<!--NAV-->
	@include('partials.nav')
	<!--NAV-->

		<div class="docs-wrapper container">
			<section class="sidebar">
				<div id="carbonads">
					<span>
						<span class="carbon-wrap">
							<a href="" class="carbon-img">
								<img src="assets/img/charts/img-video-traduccion.gif" alt="" border="0" height="100" width="130" style="width: 100%;height:auto;">
							</a>
							<a href="" class="carbon-text">
								¿Cómo impactan las traducciones no profesionales en tu empresa?
							</a>
						</span>
						<a href="" class="carbon-poweredby">Enterate cómo te ven tus clientes</a>
					</span>
				</div>
				<ul>
					<li class="">
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
					<li class="">
						<h2>Comunicación</h2>
						<ul>
							<li><a href="comunicacion#comunicacion-estrategica">Estrategia de comunicación</a></li>
							<li><a href="comunicacion#branding">Branding</a></li>
							<li><a href="comunicacion#contenidos">Generación de contenidos</a></li>
							<li><a href="comunicacion#eventos">Producción de eventos</a></li>
							<li><a href="comunicacion#multimedia">Producción de multimedia</a></li>
						</ul>
					</li>
					<li class="sidebar-menu">
						<h2>Servicios lingüísticos</h2>
						<ul>
							<li><a href="#traduccion">Traducción</a></li>
							<li><a href="#localizacion">Localización</a></li>
							<li><a href="#interpretacion">Interpretación</a></li>
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
			<article>
				<h1>Resolvemos las necesidades lingüísticas de tu organización</h1>
				<ul>
					<li>
						<a href="#servicios">Servicios Lingüísticos</a>
						<ul>
							<li><a href="#traduccion">Traducción Pública</a></li>
							<li><a href="#traduccion-tecnica">Traducción Técnica</a></li>
							<li><a href="#localizacion">Localización</a></li>
							<li><a href="#interpretacion">Interpretación</a></li>
						</ul>
					</li>
				</ul>
				<h2 id="servicios">Servicios lingüísticos</h2>
				<p>Brindamos una amplia variedad de servicios lingüísticos orientados a potenciar las comunicaciones de las empresas. Abordamos proyectos de traducción de textos, interpretación en conferencias, generación y corrección de contenidos para múltiples plataformas digitales y medios gráficos. En CoffeeTalk, vas a encontrar la solución que mejor se adapte a tus necesidades de negocios.</p>
				<h3 id="traduccion" class="ico-h3 ico-traduccion">Traducción Pública</h3>
				<p class="texto-servicio">En muchos casos, los documentos escritos en lengua extranjera que deben presentarse ante organismos públicos o ciertas entidades privadas deben estar traducidos y firmados por un traductor público matriculado para garantizar la fidelidad de la traducción. En CoffeeTalk nos encargamos de las gestiones necesarias para su legalización ante el Colegio de Traductores de la Ciudad de Buenos Aires, siempre con la más absoluta confidencialidad.</p>
				<h3 id="traduccion-tecnica" class="ico-h3 ico-traduccion-tecnica">Traducción Técnica</h3>
				<p class="texto-servicio">La traducción de textos técnicos no solo requiere un amplio conocimiento de los idiomas de trabajo, sino también del tema en cuestión. En CoffeeTalk, contamos con un equipo multidisciplinario de traductores especializados en diferentes áreas de expertise.</p>
				<p class="texto-servicio">Para garantizar el máximo nivel de calidad y eficiencia, desarrollamos glosarios y bases de datos terminológicas que se someten a la revisión y aprobación del cliente. De esa manera, aseguramos la uniformidad y coherencia en todo el material.</p>
				<h3 id="localizacion" class="ico-h3 ico-localizacion">Localización</h3>
				<p class="texto-servicio">La localización consiste en adaptar una aplicación de software para su uso en mercados extranjeros. Para esto, es necesario diseñar un plan que comprenda las instancias claves de control. En CoffeeTalk, te ayudamos durante todo el proceso de planificación, traducción e implementación para garantizar la uniformidad y coherencia del contenido.</p>
				<h3 id="interpretacion" class="ico-h3 ico-interpretacion">Interpretación</h3>
				<p class="texto-servicio">A la hora de organizar un evento, hay muchos factores para tener en cuenta, en especial si los interlocutores no hablan el mismo idioma. En este caso, resulta fundamental contar con la ayuda de intérpretes profesionales para garantizar la eficacia del evento.</p>
				<p class="texto-servicio">Por eso, nuestro equipo de expertos te ayuda a determinar cuál es el método de interpretación adecuado y te brinda todo lo necesario para que tu evento sea todo un éxito.</p>
			</article>
		</div>

		<!--FOOTER-->
		@include('partials.footer')

		@stop
		<!--FOOTER-->
@section('scripts')

@stop