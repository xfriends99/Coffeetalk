@extends('layouts.home')
@section('metadata')
	@parent
@stop
@section('title')
	@parent
@stop
@section('css')
	@parent
	<link rel="stylesheet" href="assets/css/style-news.css"/>
@stop

@section('content')
	<body class="home docs language-php">
	<!--NAV-->
	@include('partials.nav')
	<!--NAV-->

		<main class="site-main">
			<div class="container wrapper">
				<div class="gutter">
					<div class="md-col md-col-7 lg-col-8">
						<div class="card card-contacto card--post mt0 mt3 mb3">
							<div class="post__image">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13136.810440921054!2d-58.384749!3d-34.5990378!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xad39763e48b8dc9f!2sCoffeeTalk+Argentina!5e0!3m2!1ses-419!2sar!4v1510255335006" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>								
							</div>
							<div class="post__content truncate">
								<span class="label">
								Contacto
								<span class="text--gray"> / </span>
								<span class="text--gray">Estamos para ayudarte</span>
								</span>
								<h2>¿Tenés alguna consulta?</h2>
								<p>Las opciones sobran: Podés llamarnos por teléfono al <a href="tel:+541152630279" target="_blank">(+5411) 5263-0279</a>, visitarnos en nuestras oficinas en Buenos Aires, conocer nuestras novedades en las principales redes sociales o, simplemente, enviarnos un email con tus datos.</p>
								<p>Siempre estamos listos para compartir una buena charla de café y trabajar juntos.</p>
							</div>
							<div class="post__footer">
								<div class="post__author">
									<a class="redes" href="https://www.facebook.com/CoffeeTalkArgentina" target="_blank">
										<img src="assets/img/social/icon-facebook.svg"/>
									</a>
									<a class="redes" href="https://twitter.com/CoffeeTalkARG" target="_blank">
										<img src="assets/img/social/icon-twitter.svg"/>
									</a>
									<a class="redes" href="https://www.linkedin.com/company/coffeetalk" target="_blank">
										<img src="assets/img/social/icon-linkedin.svg"/>
									</a>
									<a class="redes" href="https://www.youtube.com/user/CoffeeTalkNews" target="_blank">
										<img src="assets/img/social/icon-youtube.svg"/>
									</a>
								</div>
								<ul class="tags"></ul>
							</div>
						</div>
					</div>
					<div class="md-col md-col-5 lg-col-4 sidebar-news mt3 p0">
						<div class="card card--red mb3">
							<div class="card__header">
								<h2>Escribinos</h2>
								<img class="header__icon" src="assets/img/icons/ico-newsletter.png">
							</div>
							<div class="card__content">
								<form action="mail/contacto" method="post" class="newsletter-form" data-area="home">
									{{csrf_field()}}
									<div class="input__group mb1">
										<input class="input__sm" type="text" placeholder="Nombre completo" name="nombre" required>
									</div>
									<div class="input__group mb1">
										<input class="input__sm" type="text" placeholder="Organización" name="empresa" required>
									</div>
									<div class="input__group mb1">
										<input class="input__sm" type="tel" placeholder="Teléfono" name="telefono" required>
									</div>
									<div class="input__group mb1">
										<textarea class="input__sm" placeholder="Tu mensaje" name="mensaje" required></textarea>
									</div>
									<div class="input__group">
										<input class="input__sm" type="email" placeholder="Email" name="email" required>
										<button class="btn btn--dark-red btn--thin btn--sm newsletter-subscribe">Enviar</button>
									</div>
								</form>
							</div>
						</div>
						<div class="card card--teal mb3">
							<div class="card__header">
								<h2>Envianos tu CV</h2>
								<img class="header__icon" src="assets/img/icons/ico-newsletter.png">
							</div>
							<div class="card__content">
								<form action="mail/cv" method="post" enctype="multipart/form-data" class="newsletter-form" data-area="home">
									{{csrf_field()}}
									<div class="input__group mb1">
										<input class="input__sm" type="text" placeholder="Nombre completo" name="nombre" required>
									</div>
									<div class="input__group mb1 white">
										<input class="input__sm" type="file" placeholder="cv" name="cv" required>
									</div>
									<div class="input__group">
										<input class="input__sm" type="email" placeholder="Email" name="email" required>
										<button class="btn btn--dark-red btn--thin btn--sm newsletter-subscribe">Enviar</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<!--FOOTER-->
		@include('partials.footer')

		@stop
		<!--FOOTER-->
@section('scripts')

@stop