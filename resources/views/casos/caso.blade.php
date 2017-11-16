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

	<section class="partner-profile">
			<div class="container">
				<a>
					<h4>Experiencias de éxito</h4>
				</a>
				<div class="partner-profile-header clearfix">
					<div class="partner-logo"><img src="../assets/img/clientes/codeship_400.png"></div>
					<div class="partner-ctas">
						<a href="">
							<div class="btn btn-primary">Más casos</div>
						</a>
						<a href="">
							<div class="btn btn-default">Descargar</div>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="partner-profile-overview col-md-6">
						<div class="partner-profile-img"><img src="../assets/img/casos/partner-img-vehikl.png"></div>
						<div class="partner-proficiencies">
							<h4>Resultados</h4>
							<div class="flex">
								<ul class="partner-proficiencies-list multi-col flex-fill">
									<li>Estrategia corporativa</li>
									<li>Estrategia regional</li>
									<li>Estrategia omnicanal</li>
									<li>Estrategia digital</li>
									<li>Entendimiento de públicos</li>
									<li>Entendimiento de canales</li>
									<li>Estrategia go-to-market</li>
								</ul>
								<ul class="partner-proficiencies-list multi-col flex-fill">
									<li>+ 40% en ventas online</li>
									<li>+ 40% en ventas de módulos</li>
									<li>+ 40% en contactos web</li>
									<li>+ 40% en conversiones</li>
									<li>+ 40% en inscriptos</li>
									<li>Medición e integración de resultados offline y online</li>
								</ul>
							</div>
						</div>
						<div class="partner-social">
							<h4>Compartí</h4>
							<ul class="partner-social-list">
								<li>
									<span class="twitter">
										<a href="https://twitter.com/@paulredmond" rel="nofollow">
											<img src="../assets/img/social/icon-facebook.svg"/>
										</a>
									</span>
								</li>
								<li>
									<span class="github">
										<a href="https://twitter.com/@paulredmond" rel="nofollow">
											<img src="../assets/img/social/icon-twitter.svg"/>
										</a>
									</span>
								</li>
								<li>
									<span class="github">
										<a href="https://twitter.com/@paulredmond" rel="nofollow">
											<img src="../assets/img/social/icon-linkedin.svg"/>
										</a>
									</span>
								</li>
							</ul>
						</div>
					</div>
					<div class="partner-profile-bio col-md-6">
						<h2>Problemática</h2>
						<p>Vehikl is a team of code-crushing Laravel experts.  Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use. </p>
						<h2>Necesidad</h2>
						<p>Vehikl is a team of code-crushing Laravel experts.  Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use. </p>
						<h2>Plan de acción</h2>
						<p>Vehikl is a team of code-crushing Laravel experts.  Over the years we have built a variety of web applications for customers using Laravel as our framework of choice and implemented Lean Agile development techniques to build professional applications that are functional and easy to use. </p>
					</div>
				</div>
			</div>
		</section>


		<!--FOOTER-->
		@include('partials.footer')

		@stop
		<!--FOOTER-->
@section('scripts')

@stop