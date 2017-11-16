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

		<section class="hero">
		    <div class="container">

		        <div class="content">
		            <h1>Experiencias de éxito</h1>
		            <p>
		                Nos esforzamos por transformar la relación con nuestros clientes en experiencias positivas y memorables que fortalezcan un vínculo de confianza tanto a nivel corporativo como humano.
		            </p>
		        </div>
		    </div>
		</section>

		<section class="panel partners dark">
		    <div class="container">
		        <div class="callouts flex-column mw-620px">
		            <a href="casos/caso" class="partner-card">
		                <div class="partner-card-banner partner-card-lg partner-logo-banner-vehikl">
		                    <img src="assets/img/casos/img-logo-casos-serinco.png">
		                </div>
		            </a>

		            <div class="flex-row">
		                <a href="casos/caso"  class="partner-card mr-2">
		                    <div class="partner-card-banner partner-card-md partner-logo-banner-tighten">
		                    <img src="assets/img/casos/img-logo-casos-bd.png">
		                    </div>
		                </a>
		                <a href="casos/caso"  class="partner-card">
		                    <div class="partner-card-banner partner-card-md partner-logo-banner-kirschbaum">
		                    <img src="assets/img/casos/img-logo-casos-hafele.png">
		                    </div>
		                </a>
		            </div>

		            <div class="flex-row">
		                <a href="casos/caso"  class="partner-card mr-2">
		                    <div class="partner-card-banner partner-card-md partner-logo-banner-byte5">
		                    <img src="assets/img/casos/img-logo-casos-red.png">
		                    </div>
		                </a>

		                <a href="contacto" class="partner-card-md partner-card-call mb-2">
		                    <div class="partner-banner-become-title">¿Querés ser el próximo caso de éxito?</div>

		                    <div class="partner-card-body">
		                        <p class="mb-2">Si es así, ¡podemos ayudarte!<br/>Trabajemos juntos en la planificación y desarrollo de la estrategia de marketing y comunicación de tu negocio. </p>
		                        <div class="text-red">Asesorate con uno de nuestros consultores ahora</div>
		                    </div>
		                </a>
		            </div>
		        </div>
		    </div>
		</section>
		<section class="panel light">
			<div class="container">
				<div class="callout rule">
					<span class="text">Más clientes exitosos</span>
				</div>
				<div class="clientes">						
					<img src="assets/img/clientes/img-logo-aesa.gif"/>
        			<img src="assets/img/clientes/img-logo-asante.gif"/>
        			<img src="assets/img/clientes/img-logo-asege.gif"/>
        			<img src="assets/img/clientes/img-logo-bbdo.gif"/>
        			<img src="assets/img/clientes/img-logo-bd.gif"/>
        			<img src="assets/img/clientes/img-logo-bemis.gif"/>
        			<img src="assets/img/clientes/img-logo-bluedraft.gif"/>
                    <img src="assets/img/clientes/img-logo-ccsa.gif"/>
                    <img src="assets/img/clientes/img-logo-club.gif"/>
                    <img src="assets/img/clientes/img-logo-credicop.gif"/>
        			<img src="assets/img/clientes/img-logo-dove.gif"/>
        			<img src="assets/img/clientes/img-logo-ep.gif"/>
        			<img src="assets/img/clientes/img-logo-facturaya.gif"/>
        			<img src="assets/img/clientes/img-logo-foro.gif"/>
        			<img src="assets/img/clientes/img-logo-gabriel_rubinstein.gif"/>
                    <img src="assets/img/clientes/img-logo-gcba.gif"/>
        			<img src="assets/img/clientes/img-logo-globalsis.gif"/>
        			<img src="assets/img/clientes/img-logo-google.gif"/>
                    <img src="assets/img/clientes/img-logo-grobo.gif"/>
        			<img src="assets/img/clientes/img-logo-hafele.gif"/>
                    <img src="assets/img/clientes/img-logo-hcdn.gif"/>
                    <img src="assets/img/clientes/img-logo-hp.gif"/>
        			<img src="assets/img/clientes/img-logo-iaef.gif"/>
                    <img src="assets/img/clientes/img-logo-icbc.gif"/>
                    <img src="assets/img/clientes/img-logo-infotema.gif"/>
                    <img src="assets/img/clientes/img-logo-intec.gif"/>
                    <img src="assets/img/clientes/img-logo-irecovery.gif"/>
                    <img src="assets/img/clientes/img-logo-itwarp.gif"/>
        			<img src="assets/img/clientes/img-logo-lebebot.gif"/>
        			<img src="assets/img/clientes/img-logo-macro.gif"/>
                    <img src="assets/img/clientes/img-logo-metrovias.gif"/>
        			<img src="assets/img/clientes/img-logo-mind.gif"/>
                    <img src="assets/img/clientes/img-logo-movistar.gif"/>
                    <img src="assets/img/clientes/img-logo-mundo_hafele.gif"/>
        			<img src="assets/img/clientes/img-logo-nexo_medico.gif"/>
                    <img src="assets/img/clientes/img-logo-nextel.gif"/>
                    <img src="assets/img/clientes/img-logo-paradigma_software.gif"/>
                    <img src="assets/img/clientes/img-logo-red_plataforma.gif"/>
                    <img src="assets/img/clientes/img-logo-saconsultores.gif"/>
        			<img src="assets/img/clientes/img-logo-saroka.gif"/>
                    <img src="assets/img/clientes/img-logo-serinco.gif"/>
                    <img src="assets/img/clientes/img-logo-servesalud.gif"/>
        			<img src="assets/img/clientes/img-logo-vmware.gif"/>
        			<img src="assets/img/clientes/img-logo-ymaz.gif"/>
                    <img src="assets/img/clientes/img-logo-ypf.gif"/>
				</div>
			</div>
		</section>

	<!--FOOTER-->
	@include('partials.footer')

	@stop
	<!--FOOTER-->
@section('scripts')

@stop