@extends('layouts.home')
@section('metadata')
	@parent
@stop
@section('title')
	@parent
@stop
@section('css')
	@parent
	<link rel="stylesheet" href="{{ asset('assets/css/style-news.css') }}"/>
@stop

@section('content')
	<body class="home docs language-php">
	<!--NAV-->
	@include('partials.nav')
	<!--NAV-->

		<main class="site-main">
			<div class="container wrapper">
				<div class="card post mt2">
					<div class="post__image">
						<img src="/publicaciones/{{$new->big_pic}}" alt="{{$new->title}}">
					</div>
					<div class="post__content clearfix">
						<div class="col lg-col-9">
							<header class="post__header">
								<span class="label">
								<a>{{$new->category}}</a>
								<span class="text--gray"> / </span>
								<span class="text--gray">Día {{$new->created_at->format('d/m/Y')}}</span>
								</span>
								<h1 class="post__title">{{$new->title}}</h1>
							</header>
							<p>{{$new->bajada}}</p>
						</div>
						<div class="col lg-col-1 lg-offset-2 ml2 lg-ml0 post__social social social--lg">
							<div class="parallel-label">Compartir</div>
							<a id="share-facebook" href="" target="_blank" class="social__icon icon--facebook ml1 mb1" data-open-share-analytics="social,event" data-open-share="facebook" data-open-share-link="http://www.coffeetalk.com.ar/noticia/" data-open-share-picture="" data-open-share-caption="" data-open-share-description="Copete">
								<svg id="icon-facebook" fill="currentColor" viewBox="0 0 32 32" width="100%" height="100%">
									<path d="M30.7 0H1.3C.6 0 0 .6 0 1.3v29.3c0 .8.6 1.4 1.3 1.4H17V20h-4v-5h4v-4c0-4.1 2.6-6.2 6.3-6.2 1.8 0 3.3.2 3.7.2v4.3h-2.6c-2 0-2.5 1-2.5 2.4V15h5l-1 5h-4l.1 12h8.6c.7 0 1.3-.6 1.3-1.3V1.3C32 .6 31.4 0 30.7 0z">
									</path>
								</svg>							
							</a>
							<a id="share-twitter" href="" target="_blank" class="social__icon icon--twitter ml1 mb1" data-open-share-analytics="social,event" data-open-share="twitter" data-open-share-text="Título" data-open-share-url="http://www.coffeetalk.com.ar/noticia/" data-open-share-via="paulredmond" data-open-share-hashtags="">
								<svg id="icon-twitter" fill="currentColor" viewBox="-0.1 3 32.1 26" width="100%" height="100%">
									<path d="M32 6.1c-1.2.5-2.4.9-3.8 1 1.4-.8 2.4-2.1 2.9-3.6-1.3.8-2.7 1.3-4.2 1.6C25.7 3.8 24 3 22.2 3c-3.6 0-6.6 2.9-6.6 6.6 0 .5.1 1 .2 1.5-5.5-.3-10.3-2.9-13.6-6.9-.6 1-.9 2.1-.9 3.3 0 2.3 1.2 4.3 2.9 5.5-1.1 0-2.1-.3-3-.8v.1c0 3.2 2.3 5.8 5.3 6.4-.6.1-1.1.2-1.7.2-.4 0-.8 0-1.2-.1.8 2.6 3.3 4.5 6.1 4.6-2.2 1.8-5.1 2.8-8.2 2.8-.5 0-1.1 0-1.6-.1 3 1.8 6.5 2.9 10.2 2.9 12.1 0 18.7-10 18.7-18.7v-.8c1.2-1 2.3-2.1 3.2-3.4z">
									</path>
								</svg>							
							</a>
							<a id="share-linkedin" href="" target="_blank" class="social__icon icon--linkedin ml1 mb1" data-open-share-analytics="social,event" data-open-share="linkedin" data-open-share-url="http://www.coffeetalk.com.ar/noticia/" data-open-share-title="Título">
								<svg id="icon-linkedin" fill="currentColor" viewBox="0 0 36.89 33.54" width="100%" height="100%">
									<path d="M.93 10.75h7.19v22.78H.93zM27.77 10.54c-4.12 0-6.7 2.23-7.18 3.79v-3.58h-8.08c.1 1.9 0 22.78 0 22.78h8.08V21.21a5.2 5.2 0 0 1 .17-1.86 4.12 4.12 0 0 1 3.89-2.79c2.8 0 4.08 2.11 4.08 5.19v11.79h8.15V20.87c0-7.06-4-10.33-9.12-10.33M4.39 0C1.74 0 0 1.71 0 4a4 4 0 0 0 4.29 3.91h.05c2.7 0 4.39-1.75 4.39-4A4 4 0 0 0 4.39 0">
									</path>
								</svg>							
							</a>
						</div>
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
												<img src="/assets/img/social/icon-facebook.svg"/>
											</a>
										</span>
									</li>
									<li>
										<span class="github">
											<a href="https://twitter.com/@paulredmond" rel="nofollow">
												<img src="/assets/img/social/icon-twitter.svg"/>
											</a>
										</span>
									</li>
									<li>
										<span class="github">
											<a href="https://twitter.com/@paulredmond" rel="nofollow">
												<img src="/assets/img/social/icon-linkedin.svg"/>
											</a>
										</span>
									</li>
								</ul>
							</div>
						</div>
						<ul class="tags"></ul>
					</div>
				</div>
				<div class="gutter sm-grid--2-col lg-grid--3-col my1">
					<div class="col card card--red my1">
						<div class="card__header">
							<h2>Newsletter</h2>
							<img class="header__icon" src="/assets/img/icons/ico-newsletter.png">
						</div>
						<div class="card__content">
							<p>Suscribite a nuestras comunicaciones y enterate antes que nadie de las iniciativas claves para potenciar tu negocio.</p>
							<form action="/mail/news" method="post" class="newsletter-form" data-area="home">
								{{csrf_field()}}
								<div class="input__group">
									<input class="input__sm" type="email" placeholder="Email" name="email" required>
									<button class="btn btn--dark-red btn--thin btn--sm newsletter-subscribe">Suscribite</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col card card--gray my1">
						<header class="card__header">
							<h2>Eventos</h2>
							<img class="header__icon" src="/assets/img/icons/ico-chair.png">
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
			@if($new2)
			<div class="wrapper post__pagination">
				<div class="container">
					<a href="/{{$new2->id}}/noticia" class="pagination__right">
						<svg>
							<use xlink:href="#icon-arrow-thin-right">
						</svg>
						<div class="pagination__content">
							<h4>{{$new2->title}}</h4>
							<p>{{$new2->copete}}</p>
						</div>
					</a>
				</div>
			</div>
			@endif
		</main>

		<!--FOOTER-->
		@include('partials.footer')

		@stop
		<!--FOOTER-->
@section('scripts')

@stop