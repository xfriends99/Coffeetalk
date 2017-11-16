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
					<h1>Definimos las experiencia de tus públicos</h1>
					<p>Somos especialistas en marketing y comunicación estratégica</p>
				</div>
				<div class='browser-window'>
					<div class='top-bar'>
						<div class='circles'>
							<div class="circle circle-red"></div>
							<div class="circle circle-yellow"></div>
							<div class="circle circle-green"></div>
						</div>
					</div>
					<div class='window-content'>
						<iframe class="video-home" id="video-window" src="https://www.youtube.com/embed/1zvDqEFOnFk?modestbranding=1&showinfo=0&rel=0&iv_load_policy=3&theme=light&controls=0&disablekb=1" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="macbook">
					<iframe class="video-home" id="video-mac" src="https://www.youtube.com/embed/1zvDqEFOnFk?autoplay=1&loop=1&modestbranding=1&showinfo=0&rel=0&iv_load_policy=3&theme=light&controls=0&disablekb=1&mute=1" frameborder="0" allowfullscreen></iframe>

					<svg version="1.1"
						xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
						x="0px" y="0px" width="694.1px" height="384px" viewBox="0 0 694.1 384" enable-background="new 0 0 694.1 384"
						xml:space="preserve">
						<defs></defs>
						<g id="macbook" transform="translate(1.000000, 1.000000)" sketch:type="MSLayerGroup">
							<path id="body-top" sketch:type="MSShapeGroup" fill="#FEFEFE" stroke="#8492A5" stroke-width="2" d="M594,0H98
								C84.5,0,73,11.1,73,24.8V351h546V24.8C619,11.1,607.5,0,594,0z"/>
							<circle id="webcam" sketch:type="MSShapeGroup" fill="none" stroke="#8492A5" stroke-width="2" cx="347" cy="19" r="4">
							</circle>
							<g id="body-bottom-group" transform="translate(0.000000, 351.000000)" sketch:type="MSShapeGroup">
								<path id="body-bottom" fill="#FDFDFD" stroke="#8492A5" stroke-width="2" d="M640.8,31H51.3C20.6,31,0,20.5,0,16V2.4C0,1.1,1.3,0,3,0
									h686.1c1.7,0,3,1.1,3,2.4v14.1C692.1,20.1,676.1,31,640.8,31z"/>
								<path id="bottom-seam" fill="none" stroke="#8492A5" stroke-linecap="square" d="M0.5,14.5h689.7"/>
							</g>
							<rect id="screen" x="95" y="39" sketch:type="MSShapeGroup" fill="#FFFFFF" stroke="#8492A5" width="501.1" height="282">
							</rect>
							<path id="touchpad" sketch:type="MSShapeGroup" fill="#FFFFFF" stroke="#8492A5" d="M421,352v3.1c0,2.2-4.3,2.9-7.6,2.9H278.8 c-3.5,0-7.8-0.7-7.8-2.9V352"/>
						</g>
					</svg>
				</div>

				<div class="callout rule">
					<span class="text">¿Cuál es tu estrategia?</span>
				</div>
				<div class="callouts">
					<a href="traduccion" class="callout minimal third">
						<div class="callout-head">
							<div class="callout-title">Traducción</div>
							<div class="callout-icon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 60" width="48" height="48">
									<g transform="translate(0.000000,62.000000) scale(0.100000,-0.100000)" fill="#C7CECB" stroke="none">
										<path d="M214 610 c-54 -17 -128 -73 -161 -123 -43 -64 -56 -117 -51 -203 8
										-114 65 -200 171 -256 35 -19 58 -23 137 -23 86 0 100 3 148 29 60 33 101 76
										134 139 19 35 23 58 23 137 0 79 -4 102 -23 137 -33 63 -75 106 -134 138 -44
										24 -67 29 -133 32 -44 1 -94 -2 -111 -7z m296 -305 l0 -185 -195 0 -195 0 0
										185 0 185 195 0 195 0 0 -185z"/><path d="M160 425 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M330 425 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M160 385 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M330 385 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M160 345 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M330 345 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M160 305 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M330 305 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M160 265 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M330 265 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M160 225 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M330 225 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M160 185 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/><path d="M330 185 c0 -12 14 -15 70 -15 56 0 70 3 70 15 0 12 -14 15 -70 15
										-56 0 -70 -3 -70 -15z"/>
									</g>
								</svg>
							</div>
						</div>
						<p>Brindamos múltiples servicios lingüísticos para que hables el mismo idioma que tus clientes.</p>
					</a>
					<a href="marketing" class="callout minimal third">
						<div class="callout-head">
							<div class="callout-title">Marketing</div>
							<div class="callout-icon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 60" width="48" height="48">
									<g transform="translate(0.000000,62.000000) scale(0.100000,-0.100000)" fill="#C7CECB" stroke="none">
										<path d="M214 610 c-54 -17 -128 -73 -161 -123 -43 -64 -56 -117 -51 -203 8
										-114 65 -200 171 -256 35 -19 58 -23 137 -23 86 0 100 3 148 29 60 33 101 76
										134 139 19 35 23 58 23 137 0 79 -4 102 -23 137 -33 63 -75 106 -134 138 -44
										24 -67 29 -133 32 -44 1 -94 -2 -111 -7z m181 -67 c92 -31 165 -134 165 -233
										0 -132 -118 -250 -250 -250 -60 0 -130 30 -175 75 -98 98 -98 252 0 350 69 70
										164 91 260 58z"/><path d="M225 483 c-70 -37 -105 -94 -105 -173 0 -111 79 -190 190 -190 111 0
										190 79 190 190 0 113 -79 190 -192 190 -29 -1 -66 -8 -83 -17z m164 -71 c58
										-43 64 -140 12 -193 -76 -75 -204 -30 -217 77 -14 110 115 183 205 116z"/><path d="M260 360 c-43 -43 -11 -120 50 -120 17 0 39 9 50 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -11 11 -33 20 -50 20 -17 0 -39 -9 -50 -20z"/>
									</g>
								</svg>
							</div>
						</div>
						<p>Planificamos, diseñamos e implementamos estrategias de marketing de alto impacto.</p>
					</a>
					<a href="comunicacion" class="callout minimal third">
						<div class="callout-head">
							<div class="callout-title">Comunicación</div>
							<div class="callout-icon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 65 60" width="48" height="48">
									<g transform="translate(0.000000,62.000000) scale(0.100000,-0.100000)" fill="#C7CECB" stroke="none">
										<path d="M209 606 c-102 -36 -179 -119 -203 -218 l-6 -28 75 0 c68 0 75 2 75
										20 0 28 9 25 65 -25 l50 -45 -50 -45 c-56 -50 -65 -53 -65 -25 0 18 -7 20 -75
										20 l-75 0 6 -28 c24 -103 122 -201 227 -226 l27 -6 0 70 c0 63 -2 70 -20 70
										-11 0 -20 3 -20 7 0 10 82 113 90 113 8 0 90 -103 90 -113 0 -4 -9 -7 -20 -7
										-18 0 -20 -7 -20 -70 l0 -70 28 6 c103 24 201 122 226 227 l6 27 -70 0 c-68 0
										-70 -1 -70 -26 0 -24 -1 -24 -57 22 -32 26 -58 50 -58 54 0 4 26 28 58 54 56
										46 57 46 57 22 0 -25 2 -26 70 -26 l70 0 -6 28 c-25 104 -123 202 -226 226
										l-28 6 0 -70 c0 -63 2 -70 20 -70 11 0 20 -3 20 -7 0 -10 -82 -113 -90 -113
										-8 0 -90 103 -90 113 0 4 9 7 20 7 18 0 20 7 20 70 0 39 -3 70 -7 70 -5 -1
										-24 -7 -44 -14z"/>	
									</g>								
								</svg>
							</div>
						</div>
						<p>Alineamos la comunicación de tu empresa a través de estrategias orientadas a tus públicos objetivo.</p>
					</a>
				</div>
			</div>
		</section>
		<section class="panel features dark" id="features">
			<h1>La transformación digital del marketing</h1>
			<p class="intro">Sabemos cómo potenciar los canales de marketing digital y generar ROI</p>
			<div class="blocks stacked">
			<div class="block odd">
				<div class="text">
					<h2>Diseñamos sitios web que potencian la experiencia del usuario</h2>
					<p>Aplicamos las mejores prácticas de diseño web para asegurar que la <a>experiencia del usuario</a> sea intuitiva, memorable y orientada siempre a los <a>objetivos del cliente</a>.</p>
				</div>
				<div class="media">
					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<img class="img-video" src="assets/img/charts/img-video-web.gif"/>
						</div>
					</div>
				</div>
			</div>
			<!-- /.block -->
			<div class="block even">
				<div class="text">
					<h2>Planificamos y desarrollamos plataformas digitales 100% autoadministrables</h2>
					<p>Contamos con amplia experiencia en el desarrollo a medida de <a>sitios web</a>, <a>ecommerce</a> y <a>apps móviles</a>, que se integran fácilmente a sistemas externos y garantizan el máximo nivel de performance y control.</p>
				</div>
				<div class="media">
					<div class="terminal-window">
						<div class='top-bar'></div>
						<div class='window-content'>
							<div class="dark-code">
								<pre><code class="language-bash">
~/Apps $ php artisan make:migration create_users_table
Migration created successfully!

~/Apps $ php artisan migrate --seed
Migrated: 2015_01_12_000000_create_users_table
Migrated: 2015_01_12_100000_create_password_resets_table
Migrated: 2015_01_13_162500_create_projects_table
Migrated: 2015_01_13_162508_create_servers_table
</code></pre>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /.block -->
			<div class="block odd">
				<div class="text">
					<h2>Planificamos campañas en redes sociales que garantizan resultados de alto impacto y ROI</h2>
					<p>Ayudamos a las empresas a planificar su <a>estrategia digital</a>. Generamos el <a>contenido adecuado</a> para cada público objetivo y obtenemos <a>resultados medibles</a> y de alto impacto para el negocio.
				</div>
				<div class="media">
					<div class='browser-window'>
						<div class='top-bar'>
							<div class='circles'>
								<div class="circle circle-red"></div>
								<div class="circle circle-yellow"></div>
								<div class="circle circle-green"></div>
							</div>
						</div>
						<div class='window-content'>
							<img class="img-video" src="assets/img/charts/img-video-redes.gif"/>
						</div>
					</div>
				</div>
				<!-- /.block -->
			</div>
		</section>
		<section class="panel ecosystem light" id="ecosystem">
			<h1>Un enfoque 100% disruptivo</h1>
			<p class="intro">Porque las mejores ideas surgen con un café de por medio</p>
			<div class="container">
				<a href="casos" class="callout full forge">
					<div class="content">
						<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="250" viewBox="0 0 904.000000 164.000000" preserveAspectRatio="xMidYMid meet">
							<g transform="translate(0.000000,164.000000) scale(0.100000,-0.100000)" fill="#fff" stroke="none">
								<path d="M215 1617 c-144 -82 -215 -346 -215 -803 0 -489 91 -743 286 -800 69
								-20 156 -14 212 15 46 23 113 95 141 149 32 64 60 179 67 277 l7 91 -97 27
								c-53 15 -100 27 -106 27 -6 0 -10 -34 -10 -82 0 -159 -30 -252 -92 -287 -63
								-36 -118 27 -137 158 -7 42 -14 198 -18 346 -6 319 7 579 34 634 41 82 122 72
								168 -23 20 -42 44 -169 45 -238 0 -5 45 -8 100 -8 l100 0 0 260 0 260 -100 0
								-100 0 0 -36 0 -36 -26 32 c-39 46 -74 60 -151 60 -52 0 -77 -6 -108 -23z"/>
								<path d="M7532 1626 c-36 -19 -62 -66 -62 -111 0 -122 145 -181 227 -91 29 31
								33 42 33 92 0 50 -3 59 -34 90 -30 30 -40 34 -87 34 -30 -1 -64 -6 -77 -14z"/>
								<path d="M4340 1525 l0 -95 65 0 65 0 0 -176 0 -176 -41 35 c-88 76 -213 70
								-283 -14 -71 -84 -91 -192 -91 -499 0 -274 11 -348 66 -460 43 -85 83 -113
								170 -118 80 -5 103 6 149 70 l30 41 0 -51 0 -52 150 0 150 0 0 95 0 95 -50 0
								-50 0 0 700 0 700 -165 0 -165 0 0 -95z m77 -567 c40 -43 48 -99 48 -343 0
								-274 -7 -334 -42 -375 -50 -60 -131 -24 -150 68 -13 58 -8 509 6 572 6 30 21
								65 33 77 28 30 78 30 105 1z"/>
								<path d="M6211 1433 c-45 -86 -81 -160 -81 -165 0 -4 35 -8 78 -8 l77 1 80
								112 c44 61 97 135 118 164 l38 53 -115 0 -115 0 -80 -157z"/>
								<path d="M8053 1388 l-93 -70 0 -89 0 -89 -50 0 -50 0 0 -95 0 -95 50 0 50 0
								0 -368 c0 -452 7 -488 101 -541 37 -21 51 -23 142 -19 56 2 108 7 115 11 8 6
								12 37 12 98 l0 89 -27 -7 c-51 -14 -95 -8 -115 16 -17 22 -18 48 -18 372 l0
								349 65 0 65 0 0 95 0 95 -65 0 -65 0 0 160 c0 122 -3 160 -12 159 -7 -1 -55
								-33 -105 -71z"/>
								<path d="M1123 1160 c-120 -25 -211 -115 -229 -227 l-6 -39 79 -23 c43 -12 85
								-24 94 -27 13 -3 18 5 23 35 9 59 49 101 96 101 79 0 99 -46 100 -227 l0 -102
								-37 25 c-47 32 -71 37 -143 32 -161 -12 -251 -159 -237 -387 12 -195 96 -301
								238 -301 70 0 116 20 156 68 l23 27 0 -42 0 -43 145 0 145 0 0 95 0 95 -45 0
								-45 0 0 358 c0 399 -2 416 -66 490 -63 74 -187 113 -291 92z m118 -643 l34
								-23 3 -121 3 -121 -31 -26 c-59 -49 -136 -25 -160 50 -17 50 -8 184 13 214 37
								53 86 62 138 27z"/>
								<path d="M2583 1160 c-86 -18 -136 -60 -178 -152 -40 -88 -56 -179 -62 -360
								-7 -192 6 -323 44 -442 45 -143 151 -219 283 -203 122 15 192 89 241 258 17
								61 22 110 26 274 7 283 -21 432 -102 538 -55 72 -154 106 -252 87z m110 -232
								c26 -52 40 -263 31 -458 -8 -185 -19 -236 -56 -263 l-28 -21 -27 20 c-15 11
								-31 34 -36 50 -5 16 -12 142 -14 280 -7 351 9 439 80 432 26 -2 36 -10 50 -40z"/>
								<path d="M5117 1159 c-119 -29 -185 -119 -224 -309 -23 -109 -22 -446 1 -555
								34 -160 98 -250 200 -280 102 -31 190 -10 261 62 44 44 100 144 111 200 6 29
								5 30 -82 62 -97 35 -98 35 -109 -36 -13 -87 -94 -136 -137 -83 -26 32 -38 84
								-45 198 l-6 102 191 0 192 0 0 158 c0 221 -24 311 -107 403 -20 22 -53 49 -72
								59 -45 22 -125 31 -174 19z m114 -209 c23 -31 39 -112 39 -196 l0 -64 -92 0
								-91 0 6 103 c6 108 15 143 42 171 25 24 74 17 96 -14z"/>
								<path d="M6220 1159 c-120 -24 -197 -138 -229 -339 -14 -82 -14 -405 -1 -485
								37 -230 125 -330 290 -330 64 0 82 4 121 27 26 15 59 42 74 59 34 42 82 136
								90 181 l7 35 -87 32 c-47 17 -88 31 -89 31 -2 0 -7 -17 -11 -37 -19 -103 -67
								-156 -119 -132 -14 7 -32 27 -41 45 -17 35 -34 149 -35 227 l0 47 196 0 197 0
								-6 158 c-2 86 -10 182 -17 212 -44 197 -177 303 -340 269z m108 -201 c27 -30
								41 -94 42 -190 l0 -78 -91 0 -92 0 7 93 c7 105 18 152 42 178 23 26 66 24 92
								-3z"/>
								<path d="M8682 1159 c-112 -22 -179 -108 -219 -280 -24 -106 -24 -482 1 -589
								46 -202 126 -285 276 -285 119 0 183 44 239 165 44 95 61 212 61 419 -1 250
								-30 387 -103 483 -55 72 -157 107 -255 87z m111 -227 c29 -50 44 -294 30 -505
								-11 -170 -18 -196 -58 -223 -23 -15 -27 -15 -49 -1 -45 30 -51 71 -51 362 0
								149 4 291 8 316 15 90 81 118 120 51z"/>
								<path d="M1774 1131 c-118 -72 -159 -294 -82 -445 21 -41 93 -116 202 -210 90
								-78 106 -105 106 -182 0 -46 -4 -65 -18 -77 -60 -54 -122 27 -122 157 l0 46
								-100 0 -100 0 0 -195 0 -195 95 0 95 0 0 38 0 37 18 -23 c33 -42 74 -62 130
								-62 63 0 98 16 141 65 55 63 65 97 65 230 0 101 -3 127 -21 167 -29 62 -79
								116 -191 205 -102 81 -131 126 -132 198 0 52 23 85 59 85 46 0 64 -31 71 -118
								l5 -77 98 -3 97 -3 0 186 0 185 -95 0 -95 0 0 -37 -1 -38 -20 28 c-12 15 -34
								34 -50 42 -40 21 -117 19 -155 -4z"/>
								<path d="M3182 1130 c-37 -23 -87 -97 -102 -150 -5 -19 -10 -74 -10 -122 0
								-147 40 -216 203 -352 56 -46 111 -99 121 -117 27 -45 28 -140 2 -168 -53 -59
								-112 3 -123 130 l-6 69 -98 0 -99 0 0 -195 0 -195 100 0 100 0 0 31 0 31 41
								-37 c40 -36 43 -37 108 -33 50 2 74 9 96 26 79 62 109 148 103 291 -7 152 -50
								222 -220 353 -90 70 -117 108 -124 175 -6 63 11 97 52 101 46 5 65 -24 77
								-118 l11 -80 93 0 93 0 0 185 0 185 -95 0 -95 0 0 -36 0 -37 -21 27 c-45 58
								-143 75 -207 36z"/>
								<path d="M6690 1045 l0 -95 38 0 37 0 63 -174 c34 -95 62 -180 62 -187 0 -8
								-28 -94 -62 -191 l-62 -178 -38 0 -38 0 0 -95 0 -95 100 0 99 0 53 166 53 166
								50 -166 50 -166 118 0 117 0 0 95 0 95 -44 0 -44 0 -57 162 c-32 90 -64 178
								-71 196 -12 31 -9 43 48 202 l61 170 38 0 39 0 0 95 0 95 -103 0 -103 0 -44
								-147 -45 -146 -45 144 -46 144 -112 3 -112 3 0 -96z"/>
								<path d="M7420 1045 l0 -95 40 0 40 0 0 -365 0 -365 -40 0 -40 0 0 -95 0 -95
								175 0 175 0 0 95 0 95 -30 0 -30 0 0 460 0 460 -145 0 -145 0 0 -95z"/>
							</g>
						</svg>

						<p>Antes de comunicarte con nosotros.<br/>Antes de decidir avanzar.<br/>Antes que nada...</p>
						<p>Queremos que conozcas la experiencia de nuestros clientes. Ellos también son parte de nuestro equipo y éxito.</p>
					</div>
				</a>
				<div class="callouts">
					<a class="third callout pop bordeau" href="comunicacion#contenidos">
						<div class="callout-head">
							<div class="callout-title">Contenidos</div>
							<div class="callout-icon">
								<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="-10 0 75 70" preserveAspectRatio="xMidYMid meet">
									<g transform="translate(-1.000000,65.000000) scale(0.100000,-0.100000)"
									fill="#fff" stroke="none">
										<path d="M214 610 c-54 -17 -128 -73 -161 -123 -43 -64 -56 -117 -51 -203 8
										-114 65 -200 171 -256 35 -19 58 -23 137 -23 86 0 100 3 148 29 60 33 101 76
										134 139 19 35 23 58 23 137 0 79 -4 102 -23 137 -33 63 -75 106 -134 138 -44
										24 -67 29 -133 32 -44 1 -94 -2 -111 -7z m286 -105 c10 -13 -3 -30 -81 -108
										-52 -51 -108 -113 -124 -137 -25 -36 -37 -45 -60 -45 -27 0 -30 3 -30 30 0 23
										9 35 45 60 24 16 85 72 135 122 49 51 93 93 96 93 4 0 12 -7 19 -15z m-303
										-338 c-13 -20 -65 -43 -75 -33 -1 2 3 16 8 33 14 38 49 57 69 38 12 -12 12
										-17 -2 -38z"/>
										<path d="M156 183 c-11 -11 -6 -23 9 -23 8 0 15 4 15 9 0 13 -16 22 -24 14z"/>
									</g>
								</svg>
							</div>
						</div>
						<div class="callout-body">
							<p>Le ponemos un alto a los contenidos tradicionales. Proponemos enfoques creativos y orientados a los públicos objetivo que aseguran resultados de lectura e interacción.</p>
						</div>
					</a>
					<a class="third callout pop green" href="comunicacion#eventos">
						<div class="callout-head">
							<div class="callout-title">Eventos</div>
							<div class="callout-icon">
								<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="-10 0 75 70" preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)"
									fill="#fff" stroke="none">
										<path d="M214 610 c-54 -17 -128 -73 -161 -123 -43 -64 -56 -117 -51 -203 8
										-114 65 -200 171 -256 35 -19 58 -23 137 -23 86 0 100 3 148 29 60 33 101 76
										134 139 19 35 23 58 23 137 0 79 -4 102 -23 137 -33 63 -75 106 -134 138 -44
										24 -67 29 -133 32 -44 1 -94 -2 -111 -7z m96 -145 c65 0 65 0 69 30 l4 30 6
										-30 c5 -26 11 -31 46 -35 35 -4 40 -9 43 -32 l3 -28 -171 0 -171 0 3 28 c3 23
										8 27 39 30 32 3 38 7 44 35 l8 32 6 -30 c6 -30 7 -30 71 -30z m170 -203 c0
										-78 -4 -122 -12 -130 -17 -17 -299 -17 -316 0 -8 8 -12 52 -12 130 l0 118 170
										0 170 0 0 -118z"/>
										<path d="M212 433 c4 -23 36 -29 44 -8 9 21 -5 33 -16 15 -7 -10 -10 -11 -10
										-2 0 6 -5 12 -11 12 -6 0 -9 -8 -7 -17z"/>
										<path d="M362 433 c4 -23 36 -29 44 -8 9 21 -5 33 -16 15 -7 -10 -10 -11 -10
										-2 0 6 -5 12 -11 12 -6 0 -9 -8 -7 -17z"/>
										<path d="M165 361 c-3 -2 -5 -17 -5 -33 0 -25 3 -28 36 -28 34 0 35 1 32 32
										-3 27 -7 32 -31 33 -15 0 -30 -1 -32 -4z"/>
										<path d="M395 362 c-3 -3 -5 -18 -5 -34 0 -27 3 -29 33 -26 26 2 33 8 35 29 3
										23 -1 27 -28 31 -16 3 -32 2 -35 0z"/>
										<path d="M240 330 c0 -27 3 -30 30 -30 27 0 30 3 30 30 0 27 -3 30 -30 30 -27
										0 -30 -3 -30 -30z"/>
										<path d="M319 355 c-9 -38 -2 -50 29 -53 30 -3 32 -1 32 27 0 28 -3 31 -30 31
										-16 0 -30 -2 -31 -5z"/>
										<path d="M164 276 c-12 -31 1 -51 34 -54 31 -3 32 -2 32 32 0 33 -2 36 -30 36
										-17 0 -33 -6 -36 -14z"/>
										<path d="M240 255 c0 -32 2 -35 30 -35 28 0 30 3 30 35 0 32 -2 35 -30 35 -28
										0 -30 -3 -30 -35z"/>
										<path d="M319 285 c-1 -3 -1 -17 -2 -32 -1 -24 3 -28 31 -31 31 -3 32 -2 32
										32 0 33 -2 36 -30 36 -16 0 -30 -2 -31 -5z"/>
										<path d="M390 255 c0 -35 1 -36 33 -33 28 3 32 6 32 33 0 27 -4 30 -32 33 -32
										3 -33 2 -33 -33z"/>
										<path d="M162 178 c3 -28 7 -32 33 -32 26 0 30 4 33 32 3 31 2 32 -33 32 -35
										0 -36 -1 -33 -32z"/>
										<path d="M240 182 c0 -36 5 -40 35 -34 20 3 25 10 25 33 0 26 -4 29 -30 29
										-26 0 -30 -4 -30 -28z"/>
										<path d="M318 203 c-2 -5 -3 -19 -3 -32 0 -21 5 -25 30 -25 26 0 30 4 33 32 3
										30 1 32 -27 32 -16 0 -31 -3 -33 -7z"/>
										<path d="M392 179 c3 -29 6 -33 33 -33 27 0 30 3 30 30 0 26 -4 29 -33 32 -32
										3 -33 2 -30 -29z"/>
									</g>
								</svg>
							</div>
						</div>
						<div class="callout-body">
							<p>¡Basta de los eventos de siempre! Ayudamos a las empresas en el proceso de planificación y producción para alcanzar resultados con alto niveles de recordación y conversión.</p>
						</div>
					</a>
					<a class="third callout pop violet" href="comunicacion#multimedia">
						<div class="callout-head">
							<div class="callout-title">Multimedia</div>
							<div class="callout-icon">
								<svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="-10 0 75 70" preserveAspectRatio="xMidYMid meet">
									<g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)"
									fill="#fff" stroke="none">
										<path d="M214 610 c-54 -17 -128 -73 -161 -123 -43 -64 -56 -117 -51 -203 8
										-114 65 -200 171 -256 35 -19 58 -23 137 -23 86 0 100 3 148 29 60 33 101 76
										134 139 19 35 23 58 23 137 0 79 -4 102 -23 137 -33 63 -75 106 -134 138 -44
										24 -67 29 -133 32 -44 1 -94 -2 -111 -7z m67 -87 c27 -16 31 -16 64 0 33 16
										38 16 66 2 16 -9 37 -31 46 -50 15 -32 15 -35 -6 -70 -16 -27 -21 -53 -21
										-101 l0 -64 -35 0 c-42 0 -43 -9 -10 -58 25 -37 32 -62 16 -62 -4 0 -20 18
										-35 40 -14 22 -31 40 -36 40 -6 0 -10 -27 -10 -61 0 -37 -4 -58 -10 -54 -5 3
										-10 31 -10 61 0 30 -4 54 -9 54 -4 0 -20 -18 -35 -40 -25 -38 -46 -52 -46 -29
										0 5 11 27 25 47 34 50 32 62 -9 62 -25 0 -36 5 -41 19 -4 14 -15 18 -43 17
										-35 -1 -37 1 -40 32 -4 43 10 60 47 54 36 -5 47 11 27 40 -30 43 -16 96 32
										122 35 19 38 19 73 -1z"/>
									</g>
								</svg>
							</div>
						</div>
						<div class="callout-body">
							<p>Si todos los canales digitales de las empresas utilizan imágenes y videos, ¿por qué vas a ser la excepción? Te ayudamos a producir contenidos audiovisuales de alto impacto.</p>
						</div>
					</a>
				</div>
				<div class="callout rule">
					<span class="text">Nuestra propuesta de valor</span>
				</div>
				<div class="packages">
					<div class="third">
						<div class="package">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 75 65">
									<g transform="translate(0.000000,75.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
										<path d="M230 727 c-96 -29 -190 -125 -218 -223 -60 -208 119 -421 336 -401
										137 12 247 110 283 251 6 25 14 46 17 46 3 0 18 -15 33 -32 31 -38 49 -33 24
										6 -26 39 2 34 36 -6 31 -38 49 -33 24 6 -25 37 -1 33 34 -6 36 -40 51 -31 20
										11 l-23 31 23 31 c31 42 16 51 -20 11 -35 -39 -59 -43 -34 -6 25 39 7 44 -24
										7 -34 -41 -62 -46 -36 -7 25 39 7 44 -24 7 -32 -39 -41 -41 -41 -12 0 40 -23
										104 -57 156 -74 112 -226 169 -353 130z m219 -39 c84 -41 151 -131 166 -225 7
										-43 7 -43 -24 -43 -22 0 -31 5 -31 16 0 108 -125 224 -240 224 -124 0 -240
										-116 -240 -240 0 -63 23 -114 75 -165 70 -70 144 -90 240 -64 57 15 137 100
										154 162 12 42 17 47 42 47 27 0 29 -2 23 -27 -27 -128 -117 -220 -237 -244
										-159 -32 -316 74 -348 234 -30 149 64 303 211 344 59 17 152 8 209 -19z m-58
										-63 c58 -21 114 -77 134 -133 21 -63 19 -72 -13 -72 -24 0 -29 5 -40 44 -31
										116 -177 154 -263 67 -113 -112 -12 -296 146 -267 45 9 101 57 115 101 10 30
										16 35 41 35 27 0 30 -3 23 -22 -33 -109 -116 -178 -215 -178 -47 0 -115 30
										-152 68 -38 38 -67 105 -67 151 0 82 67 176 145 205 53 19 93 19 146 1z m4
										-89 c30 -19 51 -51 60 -88 7 -26 5 -28 -24 -28 -21 0 -31 5 -31 15 0 27 -47
										65 -80 65 -70 0 -105 -86 -55 -135 35 -36 79 -33 116 6 20 21 36 29 54 27 l25
										-3 -17 -34 c-67 -131 -258 -87 -258 59 0 109 120 175 210 116z m-35 -76 c28
										-28 25 -40 -10 -40 -16 0 -30 -4 -30 -10 0 -5 11 -10 25 -10 14 0 25 -4 25
										-10 0 -12 -33 -30 -54 -30 -22 0 -56 36 -56 60 0 11 9 29 20 40 11 11 29 20
										40 20 11 0 29 -9 40 -20z"/>
									</g>
								</svg>
							</div>
							<div class="content">
								<a class="package-title">Estrategia</a>
								<p>Alineamos y profesionalizamos el marketing y la comunicación de las empresas.</p>
							</div>
						</div>
						<div class="package">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 85 65">
									<g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
										<path d="M658 695 c-13 -28 -30 -32 -48 -10 -30 36 -71 9 -63 -40 5 -32 4 -34
										-28 -37 -45 -4 -52 -40 -14 -70 l26 -20 -21 -23 c-18 -19 -20 -27 -10 -45 9
										-17 19 -21 41 -18 33 5 45 -5 51 -42 5 -36 37 -38 65 -4 21 27 22 28 42 10 14
										-13 28 -16 46 -12 23 6 25 11 23 44 -3 35 -1 37 29 40 45 4 55 38 19 67 -30
										24 -32 32 -10 56 10 11 13 25 9 39 -6 18 -13 21 -43 18 -33 -3 -37 0 -40 22
										-8 53 -54 69 -74 25z m50 -26 c6 -37 22 -51 54 -45 32 6 44 -6 23 -24 -23 -19
										-18 -57 10 -76 29 -19 24 -34 -9 -34 -33 0 -50 -24 -42 -60 6 -33 -12 -41 -34
										-15 -19 22 -48 18 -66 -10 -21 -32 -34 -32 -34 -1 0 36 -27 58 -61 51 -33 -8
										-39 8 -13 36 19 22 11 56 -17 64 -31 10 -23 35 11 35 35 0 50 23 43 63 -6 30
										7 36 27 12 20 -24 59 -19 72 10 14 31 32 28 36 -6z"/>
										<path d="M617 582 c-35 -39 -9 -102 41 -102 28 0 62 34 62 60 0 27 -35 60 -63
										60 -13 0 -31 -8 -40 -18z m67 -18 c9 -8 16 -19 16 -24 0 -13 -30 -40 -44 -40
										-31 0 -47 45 -24 68 16 16 33 15 52 -4z"/>
										<path d="M222 588 c-6 -6 -12 -19 -12 -28 0 -9 -6 -25 -14 -36 -14 -19 -15
										-19 -51 0 -39 21 -58 17 -79 -17 -8 -13 -7 -25 7 -48 21 -38 12 -58 -34 -73
										-30 -10 -34 -15 -34 -46 0 -31 4 -36 34 -46 46 -15 55 -35 34 -73 -14 -23 -15
										-35 -7 -48 21 -34 40 -38 79 -17 36 19 37 19 51 0 8 -11 14 -27 14 -37 0 -24
										25 -41 57 -37 23 2 30 10 37 40 11 44 36 56 68 34 30 -21 51 -20 73 4 18 19
										18 22 2 56 -25 51 -22 62 22 74 42 11 57 34 46 70 -4 12 -21 24 -46 30 -44 12
										-47 23 -22 74 16 34 16 37 -2 56 -22 24 -43 25 -73 4 -32 -22 -57 -10 -68 34
										-8 31 -14 37 -39 40 -17 2 -36 -3 -43 -10z m67 -48 c14 -49 48 -62 93 -36 22
										14 32 15 43 6 12 -10 12 -16 -2 -45 -24 -50 -12 -82 37 -95 55 -15 55 -45 0
										-60 -49 -13 -61 -45 -37 -95 14 -29 14 -35 2 -45 -11 -9 -21 -8 -43 6 -45 26
										-79 13 -93 -37 -10 -31 -17 -39 -33 -37 -12 2 -23 14 -27 31 -15 58 -52 73
										-98 41 -20 -14 -25 -15 -38 -2 -12 13 -12 19 3 51 16 33 16 38 1 60 -8 13 -29
										27 -46 30 -43 9 -43 45 0 54 17 3 38 17 46 30 15 22 15 27 -1 60 -15 31 -15
										38 -3 51 13 12 18 12 40 -3 47 -30 81 -11 101 58 10 33 42 20 55 -23z"/>
										<path d="M184 416 c-28 -28 -34 -42 -34 -76 0 -34 6 -48 34 -76 53 -53 123
										-44 167 22 24 37 24 71 0 108 -44 66 -114 75 -167 22z m115 -1 c59 -30 59
										-120 -1 -151 -79 -41 -163 52 -112 124 28 41 69 50 113 27z"/>
									</g>
								</svg>
							</div>
							<div class="content">
								<a class="package-title">Metodología</a>
								<p>Utilizamos una metodología ágil que asegura resultados on-time y on-budget.</p>
							</div>
						</div>
					</div>
					<div class="third">
						<div class="package">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 75 65">
									<g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
										<path d="M220 613 c-69 -36 -111 -100 -118 -176 -5 -65 12 -110 69 -177 23
										-27 44 -64 48 -82 6 -32 9 -34 96 -55 49 -12 91 -20 94 -17 11 10 -18 23 -91
										38 -71 16 -78 20 -78 41 0 13 -22 51 -50 85 -79 100 -89 165 -36 254 30 51
										107 96 166 96 46 0 134 -44 159 -78 59 -83 50 -181 -24 -265 -25 -29 -48 -62
										-52 -75 -3 -14 -11 -21 -19 -18 -7 3 -29 8 -48 12 -56 10 -44 -12 14 -26 51
										-12 70 -8 70 15 0 8 21 40 46 71 82 101 94 170 47 265 -36 70 -99 111 -181
										117 -48 3 -66 -1 -112 -25z"/>
										<path d="M235 99 c-7 -11 0 -14 88 -34 79 -18 87 -18 87 -6 0 5 -33 16 -72 26
										-40 9 -78 18 -85 20 -7 2 -15 0 -18 -6z"/>
										<path d="M240 40 c0 -5 12 -12 28 -16 15 -3 43 -10 62 -15 45 -11 60 -11 60 0
										0 5 -31 17 -69 25 -82 19 -81 19 -81 6z"/>
									</g>
								</svg>
							</div>
							<div class="content">
								<a class="package-title">Expertos</a>
								<p>Contamos con especialistas en múltiples áreas de expertise e industrias.</p>
							</div>
						</div>
						<div class="package">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 75 65">
									<g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
										<path d="M295 656 c-54 -24 -92 -74 -118 -154 l-24 -75 34 -66 c20 -36 44 -79
										55 -94 21 -29 21 -29 1 -55 -14 -18 -45 -35 -99 -53 -79 -27 -144 -78 -144
										-114 0 -22 18 -19 25 5 10 31 62 68 123 86 68 21 120 56 128 88 5 21 -22 76
										-79 159 -20 30 -19 34 6 125 27 99 114 158 195 134 51 -15 99 -65 113 -116 6
										-22 16 -53 21 -67 7 -21 3 -38 -21 -89 -17 -34 -42 -78 -56 -96 -22 -29 -24
										-37 -14 -56 22 -44 43 -58 112 -79 85 -25 113 -42 135 -83 12 -23 17 -27 20
										-14 9 44 -52 91 -159 121 -53 16 -89 41 -89 64 0 6 15 35 33 65 60 101 71 134
										59 176 -6 20 -16 53 -22 73 -28 96 -147 154 -235 115z"/>
									</g>
								</svg>
							</div>
							<div class="content">
								<a class="package-title">Cobertura</a>
								<p>Nuestro equipo responde a todas las necesidades operativas de los proyectos.</p>
							</div>
						</div>
					</div>
					<div class="third">
						<div class="package">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 75 65">
									<g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
										<path d="M224 626 c-64 -20 -131 -72 -169 -129 -108 -164 -48 -380 130 -468
										41 -20 65 -24 135 -24 70 0 94 4 135 24 63 32 124 93 156 156 35 72 35 198 0
										270 -32 63 -93 125 -155 155 -60 28 -171 36 -232 16z m158 -17 c156 -33 260
										-192 227 -346 -33 -160 -189 -265 -346 -233 -206 43 -304 277 -189 453 37 57
										113 111 176 125 62 14 71 14 132 1z"/>
										<path d="M320 550 c0 -16 5 -30 10 -30 6 0 10 14 10 30 0 17 -4 30 -10 30 -5
										0 -10 -13 -10 -30z"/>
										<path d="M465 480 c-10 -11 -15 -23 -12 -27 8 -7 47 25 47 39 0 14 -16 9 -35
										-12z"/>
										<path d="M130 482 c0 -14 39 -46 47 -39 3 4 -2 16 -12 27 -19 21 -35 26 -35
										12z"/>
										<path d="M380 395 c-15 -16 -34 -25 -55 -25 -38 0 -55 -16 -55 -50 0 -33 17
										-50 50 -50 34 0 50 17 50 55 0 21 9 40 25 55 25 24 32 40 17 40 -5 0 -19 -11
										-32 -25z m-40 -75 c0 -13 -7 -20 -20 -20 -13 0 -20 7 -20 20 0 13 7 20 20 20
										13 0 20 -7 20 -20z"/>
										<path d="M60 330 c0 -5 14 -10 30 -10 17 0 30 5 30 10 0 6 -13 10 -30 10 -16
										0 -30 -4 -30 -10z"/>
										<path d="M520 330 c0 -5 14 -10 30 -10 17 0 30 5 30 10 0 6 -13 10 -30 10 -16
										0 -30 -4 -30 -10z"/>
										<path d="M460 212 c0 -14 39 -46 47 -39 3 4 -2 16 -12 27 -19 21 -35 26 -35
										12z"/>
										<path d="M155 190 c-10 -11 -15 -23 -12 -27 8 -7 47 25 47 39 0 14 -16 9 -35
										-12z"/>
										<path d="M224 146 c-3 -8 -4 -25 -2 -38 3 -22 6 -23 98 -23 l95 0 0 35 0 35
										-93 3 c-74 2 -93 0 -98 -12z m176 -26 c0 -18 -7 -20 -80 -20 -60 0 -80 3 -80
										13 0 23 11 27 87 27 66 0 73 -2 73 -20z"/>
									</g>
								</svg>
							</div>
							<div class="content">
								<a class="package-title">Enfoque disruptivo</a>
								<p>Creamos propuestas innovadoras y 100% orientadas a los públicos objetivo.</p>
							</div>
						</div>
						<div class="package last">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 75 65">
									<g transform="translate(0.000000,65.000000) scale(0.100000,-0.100000)" fill="#000000" stroke="none">
										<path d="M11 626 c-15 -17 -11 -202 4 -199 6 2 11 45 13 98 l3 95 294 0 295 0
										0 -300 0 -300 -95 0 c-57 0 -95 -4 -95 -10 0 -6 40 -10 100 -10 88 0 100 2
										110 19 14 27 14 575 0 602 -10 18 -24 19 -314 19 -248 0 -306 -3 -315 -14z"/>
										<path d="M370 530 c0 -6 27 -10 67 -10 l67 0 -69 -70 -69 -70 -171 0 c-120 0
										-175 -4 -183 -12 -17 -17 -17 -339 0 -356 17 -17 349 -17 366 0 8 8 12 63 12
										183 l0 171 64 63 65 64 3 -64 c4 -94 23 -75 23 24 l0 82 -87 3 c-56 2 -88 -1
										-88 -8z m-10 -340 l0 -170 -165 0 -165 0 0 170 0 170 165 0 165 0 0 -170z"/>
									</g>
								</svg>
							</div>
							<div class="content">
								<a class="package-title">Ecuación costo beneficio</a>
								<p>Trabajamos para generar resultados medibles, sostenibles y escalables.</p>
							</div>
						</div>
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