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
								<img src="assets/img/charts/img-video-comunicacion.gif" alt="" border="0" height="100" width="130" style="width: 100%;height:auto;">
							</a>
							<a href="" class="carbon-text">
								Cómo mejorar la eficiencia y compromiso de tu equipo
							</a>
						</span>
						<a href="" class="carbon-poweredby">Iniciativas claves de comunicación</a>
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
					<li class="sidebar-menu">
						<h2>Comunicación</h2>
						<ul>
							<li><a href="#comunicacion-estrategica">Estrategia de comunicación</a></li>
							<li><a href="#branding">Branding</a></li>
							<li><a href="#contenidos">Generación de contenidos</a></li>
							<li><a href="#eventos">Producción de eventos</a></li>
							<li><a href="#multimedia">Producción de multimedia</a></li>
						</ul>
					</li>
					<li class="">
						<h2>Servicios lingüísticos</h2>
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
			<article>
				<h1>Qué, cómo, cuándo, dónde, a quién y para qué comunicar</h1>
				<ul>
					<li>
						<a href="#comunicacion-estrategica">Estrategia de Comunicación</a>
					</li>
					<li>
						<a href="#branding">Branding</a>
					</li>
					<li>
						<a href="#comunicacion-cross">Comunicación Cross</a>
						<ul>
							<li><a href="#contenidos">Generación de Contenidos</a></li>
							<li><a href="#eventos">Producción de Eventos Corporativos</a></li>
							<li><a href="#multimedia">Producción Multimedia</a></li>
						</ul>
					</li>
				</ul>
				<h2 id="comunicacion-estrategica">Estrategia de comunicación</h2>
				<p>Desarrollamos estrategias de comunicación que transforman la experiencia de los públicos de las empresas en vínculos positivos de alto impacto. Nuestros servicios abarcan de forma integral todos los recursos y canales de contacto con el fin de generar comunicaciones eficientes y efectivas.</p>
				<p>Las organizaciones y sus directivos advierten que el recurso humano es el capital más preciado con el que cuentan. El compromiso, la motivación, la integración cultural, el clima interno y el conocimiento compartido son variables que ayudan a potenciar la productividad y la satisfacción del personal en la labor diaria.</p>
				<p>La comunicación interna se ha consolidado como el eje estratégico para el óptimo funcionamiento de la estructura organizacional y la generación de equipos de personas más motivadas, informadas y productivas. Es por esto que nuestro equipo de consultores desarrolla estrategias para la mejora del entorno laboral, la implicación con los objetivos corporativos y la gestión del cambio dentro de la organización.</p>
				<h2 id="branding">Branding Corporativo</h2>
				<p>En el momento de crear una nueva marca o reposicionar una ya existente, deben contemplarse todos los atributos y elementos que hacen a su identidad. Nuestra experiencia en Brand Marketing mejora las relaciones de las empresas con sus clientes, atrae nuevos consumidores, agrega valor diferencial y promueve la fidelidad a la marca.</p>
				<p>En CoffeeTalk, consideramos que la interacción es el nuevo punto de partida para establecer un vínculo efectivo entre la marca y sus consumidores. Nos especializamos en la construcción de una imagen pública coherente con los valores y objetivos de la empresa, pero flexible y articulable a la dinámica del entorno.</p>
				<img class="img-servicio" src="assets/img/charts/img-chart-diseno-grafico.gif"/>
				<p>Creemos que la imagen corporativa es uno de los activos más importantes en el actual mundo de los negocios. Los públicos son bombardeados por miles de marcas al día y solo unas pocas tienden a sobrevivir en la mente del consumidor. Para lograr superar este desafío, nuestro equipo de profesionales desarrolla diseños efectivos, con alto nivel de recordación, prácticos y afines a la filosofía, los objetivos y los valores de la empresa.</p>
				<p>En el momento de emprender un proyecto de diseño editorial, nos preocupamos por generar contenidos de interés y buena calidad para los públicos seleccionados y, así, crear una herramienta de comunicación efectiva que cumpla con todos los objetivos buscados por la compañía.</p>
				<p>La identidad visual es el primer diferencial que separa a la marca del resto de sus competidores. Ya sea en eventos, vía pública o medios de comunicación, lo cierto es que el diseño editorial se ha consolidado como soporte indiscutido de la gestión comercial de las empresas. La gráfica permite difundir y consolidar la identidad corporativa y responder a las necesidades de comunicación de cada uno de sus públicos.</p>
				<h2 id="comunicacion-cross">Canales de Comunicación Cross</h2>
				<p>Comprendemos que la experiencia actual de los consumidores gira en torno a la web y sus espacios online. Por esto, la presencia digital de las empresas y profesionales independientes actúa como el principal canal de contacto y promoción. Nuestro enfoque nos permite desarrollar sitios de acuerdo a las necesidades de nuestros clientes y ofrecer a sus consumidores experiencias memorables en línea.</p>
				<h3 id="contenidos" class="ico-h3 ico-contenidos">Generación de contenidos</h3>
				<p class="texto-servicio">Comprendemos que la experiencia actual de los consumidores gira en torno a la web y sus espacios online. Por esto, la presencia digital de las empresas y profesionales independientes actúa como el principal canal de contacto y promoción. Nuestro enfoque nos permite desarrollar sitios de acuerdo a las necesidades de nuestros clientes y ofrecer a sus consumidores experiencias memorables en línea.</p>
				<p class="texto-servicio">A través de diseños innovadores, articulados con los principales buscadores de la red y adaptables a cualquier tipo de dispositivo móvil, creamos soluciones prácticas e integradoras con la lógica de la imagen institucional de la marca. Todos nuestros desarrollos son responsivos, en lenguaje HTML5 y CSS3, con animaciones en JQuery y páginas dinámicas que le permiten a la empresa administrar sus propios contenidos y optimizar la experiencia final del usuario. Además, los sitios pueden ser integrados a plataformas de Intranet, Email Marketing, Analytics de Google y propios, y cuentas de las principales redes sociales.</p>
				<h3 id="eventos" class="ico-h3 ico-eventos">Producción de eventos disruptivos</h3>
				<p class="texto-servicio">Consideramos que la organización de eventos es una de las herramientas de comunicación estratégica más importantes, por lo que nuestro equipo planifica, gestiona y produce todos los aspectos tácticos del acontecimiento, sin dejar ningún elemento librado a la suerte.</p>
				<div class='browser-window browser-window-servicio'>
					<div class='top-bar'>
						<div class='circles'>
							<div class="circle circle-red"></div>
							<div class="circle circle-yellow"></div>
							<div class="circle circle-green"></div>
						</div>
					</div>
					<div class='window-content'>
						<iframe class="iframe-servicio" id="video-window" src="https://www.youtube.com/embed/RwDJkaeQ-Qw?modestbranding=1&showinfo=0&rel=0&iv_load_policy=3&theme=light&controls=1&disablekb=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class='browser-window browser-window-servicio'>
					<div class='top-bar'>
						<div class='circles'>
							<div class="circle circle-red"></div>
							<div class="circle circle-yellow"></div>
							<div class="circle circle-green"></div>
						</div>
					</div>
					<div class='window-content'>
						<iframe class="iframe-servicio" id="video-window" src="https://www.youtube.com/embed/5u6kS3JcCjI?modestbranding=1&showinfo=0&rel=0&iv_load_policy=3&theme=light&controls=1&disablekb=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<p class="texto-servicio">Nuestros eventos para empresas se ajustan a la lógica de la marca, aplican diversas temáticas y responden eficazmente a los objetivos del cliente. Con base en los requerimientos del negocio, organizamos eventos corporativos que generan resultados efectivos y medibles en el tiempo.</p>
				<p class="texto-servicio">Además, organizamos eventos sociales orientados a la integración de los públicos de la empresa. Trabajamos con la identidad visual de la Marca y gestionamos cada etapa del proceso de organización. Además, cubrimos el proceso de análisis posterior al evento, con el objetivo de brindarle al cliente un resumen detallado de los logros obtenidos.</p>
				<h3 id="multimedia" class="ico-h3 ico-multimedia">Producción Multimedia</h3>
				<p class="texto-servicio">La explosiva tendencia de las redes sociales, la necesidad de estar presentes en la web y el creciente vuelco a la interacción móvil son sólo algunas de las circunstancias que obligan a las empresas a replantear sus comunicaciones y dar un paso adelante en innovación digital. Es por eso que muchas de las organizaciones invierten en la producción de contenidos multimediales para acercase a sus públicos a través de todos los canales actuales disponibles.</p>
				<div class='browser-window browser-window-servicio'>
					<div class='top-bar'>
						<div class='circles'>
							<div class="circle circle-red"></div>
							<div class="circle circle-yellow"></div>
							<div class="circle circle-green"></div>
						</div>
					</div>
					<div class='window-content'>
						<iframe class="iframe-servicio" id="video-window" src="https://www.youtube.com/embed/vPi70-xFwdc?modestbranding=1&showinfo=0&rel=0&iv_load_policy=3&theme=light&controls=1&disablekb=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class='browser-window browser-window-servicio'>
					<div class='top-bar'>
						<div class='circles'>
							<div class="circle circle-red"></div>
							<div class="circle circle-yellow"></div>
							<div class="circle circle-green"></div>
						</div>
					</div>
					<div class='window-content'>
						<iframe class="iframe-servicio" id="video-window" src="https://www.youtube.com/embed/A-yRW3qPkvo?modestbranding=1&showinfo=0&rel=0&iv_load_policy=3&theme=light&controls=1&disablekb=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<p class="texto-servicio">Realizamos producciones de audio y video y coberturas de filmación para la generación de material multimedial con fines institucionales y comerciales. Nos especializamos en la creación de videos corporativos, motion graphics, video tutoriales, animación 2D y 3D, y packs gráficos que incluyen el diseño de bumpers, zócalos y logos animados.</p>
				<p class="texto-servicio">En CoffeeTalk, contamos con un equipo de fotografía especializado en la cobertura de eventos corporativos, producciones para medios gráficos y material adaptado a plataformas web. Contamos con el equipamiento técnico necesario para garantizar resultados de máxima calidad y un delivery on time.</p>
			</article>
		</div>

	<!--FOOTER-->
	@include('partials.footer')

	@stop
	<!--FOOTER-->
@section('scripts')

@stop