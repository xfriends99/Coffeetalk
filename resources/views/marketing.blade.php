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
								<img src="assets/img/charts/img-video-marketing.gif" alt="" border="0" height="100" width="130" style="width: 100%;height:auto;">
							</a>
							<a href="" class="carbon-text">
								Cómo medir el impacto real del marketing directo y digital
							</a>
						</span>
						<a href="" class="carbon-poweredby">Prácticas claves de control</a>
					</span>
				</div>
				<ul>
					<li class="sidebar-menu">
						<h2>Marketing</h2>
						<ul>
							<li><a href="#marketing-estrategico">Marketing Estratégico</a></li>
							<li><a href="#marketing-digital">Marketing Digital</a></li>
							<li><a href="#diseno-web">Diseño Web</a></li>
							<li><a href="#redes-sociales">Redes Sociales</a></li>
							<li><a href="#email-marketing">Email Marketing</a></li>
							<li><a href="#sem">Posicionamiento Web</a></li>
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
				<h1>El marketing debe ser estratégico</h1>
				<ul>
					<li>
						<a href="#marketing-estrategico">Marketing Estratégico</a>
					</li>
					<li>
						<a href="#marketing-digital">Marketing Digital</a>
						<ul>
							<li><a href="#diseno-web">Diseño Web</a></li>
							<li><a href="#redes-sociales">Redes Sociales</a></li>
							<li><a href="#email-marketing">Email Marketing</a></li>
							<li><a href="#sem">Posicionamiento Web</a></li>
						</ul>
					</li>
				</ul>
				<h2 id="marketing-estrategico">Estrategia de marketing del negocio</h2>
				<p>Hoy, el mundo de los negocios plantea escenarios cada vez más complejos y cambiantes. Las empresas se ven obligadas a enfocar sus esfuerzos en las áreas de trabajo que les permitan diferenciarse del resto de sus competidores.</p>
				<p>Para superar estos desafíos, nuestro equipo de consultores establece los procesos y mecanismos adecuados, busca, selecciona e implementa las herramientas de gestión más efectivas, y planifica y ejecuta las estrategias de comunicación que aseguren resultados positivos, medibles y a largo plazo.</p>
				<h2 id="marketing-digital">Estrategia de marketing digital</h2>
				<p>El avance de la tecnología ha logrado redefinir la experiencia de las personas a nivel personal y profesional. La explosiva tendencia de las redes sociales, la necesidad de estar presentes en la web y el creciente vuelco a la interacción móvil son solo algunas de las circunstancias que obligan a las empresas a replantear sus comunicaciones y dar un paso adelante en innovación digital. Ya sea a través de un sitio o portal web, un newsletter o las redes sociales, el objetivo final siempre está centrado en el público.</p>
				<p>Nos especializamos en la planificación, desarrollo y control de campañas de marketing online orientadas a segmentos de públicos definidos. Trabajamos con múltiples herramientas web para la interacción con el usuario final y recursos técnicos especializados para el seguimiento de cada campaña.</p>
				<p>Nuestro equipo está integrado por especialistas en marketing digital, diseñadores gráficos y web, programadores web, desarrolladores de aplicaciones móviles, community managers y redactores creativos. De esta manera, logramos cubrir todas las necesidades del cliente y aseguramos una experiencia positiva y a medida del usuario final.</p>
				<h3 id="diseno-web" class="ico-h3 ico-diseno-web">Diseño web</h3>
				<p class="texto-servicio">Comprendemos que la experiencia actual de los consumidores gira en torno a la web y sus espacios online. Por esto, la presencia digital de las empresas y profesionales independientes actúa como el principal canal de contacto y promoción. Nuestro enfoque nos permite desarrollar sitios de acuerdo a las necesidades de nuestros clientes y ofrecer a sus consumidores experiencias memorables en línea.</p>
				<img class="texto-servicio img-servicio" src="assets/img/charts/img-chart-diseno-web.gif"/>
				<p class="texto-servicio">A través de diseños innovadores, articulados con los principales buscadores de la red y adaptables a cualquier tipo de dispositivo móvil, creamos soluciones prácticas e integradoras con la lógica de la imagen institucional de la marca. Todos nuestros desarrollos son responsivos, en lenguaje HTML5 y CSS3, con animaciones en JQuery y páginas dinámicas que le permiten a la empresa administrar sus propios contenidos y optimizar la experiencia final del usuario. Además, los sitios pueden ser integrados a plataformas de Intranet, Email Marketing, Analytics de Google y propios, y cuentas de las principales redes sociales.</p>
				<h3 id="redes-sociales" class="ico-h3 ico-redes-sociales">Redes Sociales</h3>
				<p class="texto-servicio">El 60 por ciento de las personas cambia su decisión de compra con base en los comentarios que encuentran en las redes sociales. Tenemos en claro su valor diferencial y el impacto que pueden generar en las organizaciones, por esto, nuestro equipo diseña y administra perfiles 2.0 que responden a los objetivos de cada cliente y a la lógica de la imagen institucional de la marca.
				</p>
				<div class='browser-window browser-window-servicio'>
					<div class='top-bar'>
						<div class='circles'>
							<div class="circle circle-red"></div>
							<div class="circle circle-yellow"></div>
							<div class="circle circle-green"></div>
						</div>
					</div>
					<div class='window-content'>
						<img class="iframe-servicio" src="assets/img/charts/img-video-redes-1.gif"/>
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
						<img class="iframe-servicio" src="assets/img/charts/img-video-redes-2.gif"/>
					</div>
				</div>
				<p class="texto-servicio">Community Management o Social Media Management es la gestión, construcción y moderación de comunidades en torno a una Marca en internet. Involucra el seguimiento continuo de las tendencias en la web, las novedades del sector productivo de la empresa, la interacción con las opiniones y mensajes de los públicos y el análisis de los resultados obtenidos. El Community Manager realiza publicaciones, sorteos, encuestas y juegos entre los seguidores de la empresa en las distintas redes sociales, como Facebook, Twitter, LinkedIn y Youtube, con el objetivo de potenciar la difusión de la marca y lograr su viralización.</p>
				<p class="texto-servicio">Nuestro enfoque de trabajo en Community Management aporta transparencia a la organización, ofrece experiencias integradoras, establece lazos de colaboración y fortalece las relaciones entre las empresas y sus clientes, más allá de los productos y servicios que se comercialicen. Para alcanzar resultados efectivos y comprobables, desarrollamos estrategias de marketing digital que delinean la generación de contenidos 2.0, su planificación de dosificación, y propuestas que comprometan al usuario con el medio. A su vez, acompañamos el plan de acción con un monitoreo permanente que nos permite medir los resultados y analizar el impacto de cada comunicación.</p>
				<h3 id="email-marketing" class="ico-h3 ico-email-marketing">Email Marketing</h3>
				<p class="texto-servicio">Tener la capacidad de enviar un único correo electrónico a toda tu base de datos con un mensaje cien por ciento personalizable convierte al mailing en una herramienta de comunicación efectiva, amigable y de alcance masivo. Nuestro equipo de profesionales te ayudará a identificar y segmentar a los públicos objetivo, diseñar mensajes de alto impacto y recordación, y a controlar y dar seguimiento a los resultados de cada campaña, siempre en línea con la estrategia de comunicación de la empresa.</p>
				<p class="texto-servicio">Diseñamos newsletters y piezas de email marketing que se adaptan a las necesidades de nuestros clientes y que les permiten, además, mantener una interacción periódica con cada uno de los públicos. Asimismo, generamos reportes que permiten definir los gustos y preferencias de la audiencia y así adaptar los mensajes y formatos para alcanzar mayores niveles de lectura, interacción y efectividad.</p>
				<h3 id="sem" class="ico-h3 ico-sem">Posicionamiento Web</h3>
				<p class="texto-servicio">El 96 por ciento de los usuarios de internet realiza sus búsquedas en Google. Tener un sitio web y no aparecer en sus resultados reduce drásticamente el tráfico orgánico de tus páginas, por lo que nadie podrá encontrarlas ni visitarlas. En CoffeeTalk, desarrollamos campañas de posicionamiento web que aseguran la presencia de tu sitio en las primeras posiciones de los resultados de búsqueda de Google y los principales directorios de internet.</p>
				<div class='browser-window browser-window-servicio'>
					<div class='top-bar'>
						<div class='circles'>
							<div class="circle circle-red"></div>
							<div class="circle circle-yellow"></div>
							<div class="circle circle-green"></div>
						</div>
					</div>
					<div class='window-content'>
						<img class="iframe-servicio" src="assets/img/charts/img-video-sem.gif"/>
					</div>
				</div>
				<p class="texto-servicio">Proveemos el servicio de Posicionamiento Orgánico o Search Engine Optimization (SEO) que mejora la performance general del sitio web en los principales buscadores. Además, nuestra experiencia en el diseño de sitios web y tiendas de e-commerce en HTML5 nos permite generar estructuras amigables y de fácil lectura para Google y mantener actualizadas todas las etiquetas y metatextos, lo que agiliza el posicionamiento natural en los resultados de búsqueda.</p>
				<p class="texto-servicio">Creamos campañas de Search Engine Marketing (SEM) a través de Google Adwords, un servicio que permite promocionar los productos y servicios de una compañía en Google y su red de sitios asociados. Esta modalidad permite administrar las campañas por clic recibido o con base en el número de ingresos en el sitio web. En cualquiera de los casos, segmenta el público objetivo para garantizar el máximo alcance posible y el mayor nivel de efectividad.</p>
			</article>
		</div>
		<!--FOOTER-->
		@include('partials.footer')

		@stop
		<!--FOOTER-->
@section('scripts')

@stop