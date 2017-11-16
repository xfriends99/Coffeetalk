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

		<main class="site-main docs">
			<div class="container wrapper">
				<div class="callout my1">
					<p>Noticias y eventos: <a>Las mejores prácticas para tu estrategia de marketing y comunicación</a></p>
				</div>
				<div class="gutter">
					<div class="md-col md-col-7 lg-col-8">
						@foreach($news as $new)
						<div class="card card--post mt0 mb3">
							<div class="post__image">
								<a href="{{$new->id}}/noticia">
									<img src="/publicaciones/{{$new->small_pic}}" alt="{{$new->title}}">
								</a>
							</div>
							<div class="post__content truncate">
								<span class="label">
									{{$new->category}}
									<span class="text--gray"> / </span>
									<span class="text--gray">{{$new->created_at->format('d/m/Y')}}</span>
								</span>
								<h2><a>{{$new->title}}</a></h2>
								<p>{{$new->copete}}</p>
								<a class="truncate__link" href="{{$new->id}}/noticia">Leer más&hellip;</a>
							</div>
							<div class="post__footer">
								<div class="post__author">
									<img class="author__image" src="/logos/{{$new->created_by->logo}}">
									<div class="author__content">
										<h4 class="author__name">por <a>{{ $new->created_by->name . ' ' . $new->created_by->surname }}</a></h4>
										<ul class="author__links">
											<li>
												<span class="twitter">
													<a href="https://twitter.com/@paulredmond" rel="nofollow">
														<img src="assets/img/social/icon-facebook.svg"/>
													</a>
												</span>
											</li>
											<li>
												<span class="github">
													<a href="https://twitter.com/@paulredmond" rel="nofollow">
														<img src="assets/img/social/icon-twitter.svg"/>
													</a>
												</span>
											</li>
											<li>
												<span class="github">
													<a href="https://twitter.com/@paulredmond" rel="nofollow">
														<img src="assets/img/social/icon-linkedin.svg"/>
													</a>
												</span>
											</li>
										</ul>
									</div>
								</div>
								<ul class="tags"></ul>
							</div>
						</div>
						@endforeach
						<div class="callout callout--gray my3">
							<p>Aliados que participan: <a href="http://www.redplataforma.com.ar" target="_blank" rel="nofollow">Red Plataforma</a></p>
						</div>
						<nav class="pagination">
							<a href="" class="pagination__arrow arrow--left btn--disabled">
								<svg id="icon-arrow-left" fill="currentColor" viewBox="0 0 60.109 47.484" width="100%" height="100%"><path d="M31.777 34.648v-.008c-.012.004-.016.004 0 .008z"></path><path d="M1.254 26.773L20.71 46.23c1.676 1.672 4.39 1.672 6.063 0 1.676-1.672 1.676-4.387 0-6.062l-12.14-12.14h41.19c2.368 0 4.286-1.92 4.286-4.286 0-2.367-1.92-4.285-4.286-4.285H14.632l12.14-12.14c1.677-1.673 1.677-4.388 0-6.063C25.938.418 24.84 0 23.743 0c-1.098 0-2.195.418-3.03 1.254L1.253 20.71c-1.672 1.673-1.672 4.387 0 6.063z"></path></svg>						Nuevas 
							</a>
							<a href="" class="pagination__arrow arrow--right ">
								Anteriores 
								<svg id="icon-arrow-right" fill="currentColor" viewBox="0 0 60.109 47.484" width="100%" height="100%"><path d="M28.332 12.836v.008c.012-.004.016-.004 0-.008z"></path><path d="M58.855 20.71L39.398 1.255c-1.675-1.672-4.39-1.672-6.062 0-1.676 1.672-1.676 4.387 0 6.062l12.14 12.14H4.287C1.917 19.457 0 21.377 0 23.743c0 2.367 1.918 4.285 4.285 4.285h41.192l-12.14 12.14c-1.677 1.673-1.677 4.388 0 6.063.835.836 1.932 1.254 3.03 1.254 1.098 0 2.194-.418 3.03-1.254l19.457-19.457c1.673-1.672 1.673-4.386 0-6.062z"></path></svg>		
							</a>
						</nav>
					</div>

					<div class="md-col md-col-5 lg-col-4 sidebar-news p0">
						<div class="card card--red mb3">
							<div class="card__header">
								<h2>Newsletter</h2>
								<img class="header__icon" src="assets/img/icons/ico-newsletter.png">
							</div>
							<div class="card__content">
								<p>Suscribite a nuestras comunicaciones y enterate antes que nadie de las iniciativas claves para potenciar tu negocio.</p>
								<form action="/mail/news" method="post" class="newsletter-form" data-area="home">
									{{csrf_field()}}
									<input type="hidden" id="fieldhrcf" name="cm-fd-hrcf-mn" value="11">
									<input type="hidden" id="fieldhrcfdy" name="cm-fd-hrcf-dy" value="8">
									<input type="hidden" id="fieldhrcfyr" name="cm-fd-hrcf-yr" value="2017">
									<div class="input__group">
										<input class="input__sm" type="email" placeholder="Email" name="email" required>
										<button class="btn btn--dark-red btn--thin btn--sm newsletter-subscribe">Suscribite</button>
									</div>
								</form>
							</div>
						</div>
						<div class="card card--gray mb3">
							<header class="card__header">
								<h2>Eventos</h2>
								<img class="header__icon" src="assets/img/icons/ico-chair.png">
							</header>
							<div class="card__content">
								<dl class="list-unstyled">
									<!--EVENTO INICIO-->
									@foreach($eventos as $event)
									<dt>
										<a href="#" class="link--white" rel="nofollow">{{$event->title}}</a>
									</dt>
									<dd>
										{{$event->date}}
										<br>
										{{$event->place}}
									</dd>
									@endforeach
									<!--EVENTO FIN-->
								</dl>
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