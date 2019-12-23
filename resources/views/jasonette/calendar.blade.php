{
	"$jason": {
		"head": {
			"title": "Calvary Greeting Daily Devotion",
			"description": "Your daily devotion, Calvary Greetings, delivered by Bishop Chikumbi of Makeni Assembly Of God (MAOG) Church",
			"icon": "{{ asset('img/maog_logo.png') }}",
			"offline": "true",
			"styles": {
				"label_class": {
					"background": "#f5f5f5",
					"color": "#000000"
				},
				"profile_picture_class": {
					"width": "80",
					"height": "80",
					"corner_radius": "40"
				}
			},
			"actions": {
				"$pull": {
					"type": "$flush",
					"success": {
						"type": "$reload"
					}
				}
			},
			"data": {
				"about": [
					{
						"text":"<!DOCTYPE html> <html lang='{{ app()->getLocale() }}'> <head> <meta charset='utf-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'> <meta name='viewport' content='width=device-width, initial-scale=1'> <meta name='theme-color' content='#0096ff'> <meta name='description' content='Your daily devotion, Calvary Greetings, delivered by Bishop Chikumbi of Makeni Assembly Of God (MAOG) Church.'> <!-- CSRF Token --> <meta name='csrf-token' content='{{ csrf_token() }}'> <!-- title --> <title>{{ config('app.name') }} | Makeni Assembly of God | PAOG<\/title> <!-- Icons --> <link rel='apple-touch-icon' sizes='180x180' href='\/apple-touch-icon.png'> <link rel='icon' type='image\/png' sizes='32x32' href='{{ asset('favicon-32x32.png') }}'> <link rel='icon' type='image\/png' sizes='16x16' href='{{ asset('favicon-16x16.png') }}'> <link rel='manifest' href='{{ asset('manifest.webmanifest') }}'> <!-- Styles --> <link href='{{ asset('css\/app.css') }}' rel='stylesheet'> <link rel='stylesheet' href='https:\/\/maxcdn.bootstrapcdn.com\/font-awesome\/4.7.0\/css\/font-awesome.min.css'> <link rel='stylesheet' href='{{ asset('css\/OverlayScrollbars.min.css') }}'> <link href='https:\/\/fonts.googleapis.com\/css?family=Open+Sans' rel='stylesheet'> <!-- Bulma Version 0.8.x--> <link rel='stylesheet' href='{{ asset('css\/bulma.min.css') }}' \/> <link rel='stylesheet' type='text\/css' href='{{ asset('css\/custom.css') }}'> <!-- Fonts --> <link rel='dns-prefetch' href='\/\/fonts.gstatic.com'> <link href='https:\/\/fonts.googleapis.com\/css?family=Nunito' rel='stylesheet'> <!-- Calendar Stuff --> <link href='fullcalendar\/core\/main.css' rel='stylesheet' \/> <link href='fullcalendar\/daygrid\/main.css' rel='stylesheet' \/> <link href='fullcalendar\/list\/main.css' rel='stylesheet' \/> <link href='https:\/\/use.fontawesome.com\/releases\/v5.0.6\/css\/all.css' rel='stylesheet'> <style> .fc-day-grid-event .fc-content { \/* un-force events to be one-line tall *\/ white-space: normal; } <\/style> <script src='fullcalendar\/core\/main.js'><\/script> <script src='fullcalendar\/daygrid\/main.js'><\/script> <script src='fullcalendar\/list\/main.js'><\/script> <script src='fullcalendar\/interaction\/main.js'><\/script> <script src='fullcalendar\/bootstrap\/main.js'><\/script> <script> document.addEventListener('DOMContentLoaded', function() { var calendarEl = document.getElementById('calendar'); var calendar = new FullCalendar.Calendar(calendarEl, { plugins: [ 'dayGrid', 'list', 'bootstrap', 'interaction' ], defaultView: 'dayGridMonth', timeZone: 'Africa\/Lusaka', themeSystem: 'bootstrap', header: { left: 'prev,next today', center: 'title', right: 'dayGridMonth,listMonth' }, weekNumbers: true, events: [ <?php $count = count($devotions); $devotions = []; ?> @foreach($devotions as $devotion) { id: '{{ $devotion->id }}', title: '{{ $devotion->title }}', start: '{{ $devotion->devotion_date }}', url: '{{ route('devotion_view', $devotion->title_slug) }}' } @if($count > 1) , @endif <?php $count -= 1 ?> @endforeach ] }); calendar.render(); }); <\/script> <\/head> <body> <div id='app'> <section class='hero is-info is-medium is-bold'> <div class='hero-body'> <div class='container title-container has-text-centered'> <h1 class='title'>Calvary Greetings Daily Devotion<br>Delivered By Bishop C. Chikumbi<br>of Makeni Assembly of God Church (MAOG)<br>a Pentecostal Assemblies of God (PAOG) Church<\/h1> <\/div> <\/div> <\/section> <div class='container'> <!-- START ARTICLE FEED --> <section class='articles'> <div class='column is-8 is-offset-2'> <!-- START ARTICLE --> <div class='card article'> <div class='card-content'> <div class='container'> <div id='calendar'><\/div> <\/div> <\/div> <\/div> <!-- END ARTICLE --> <\/div> <\/section> <!-- END ARTICLE FEED --> <\/div> <\/div> <!-- Footer --> <footer class='footer'> <div class='container'> <div class='content has-text-centered'> <p> <strong><a href='\/' title='Calvary Greetings Daily Devotion'>Calvary Greetings Daily Devotion<\/a><\/strong> by <i>Bishop C. Chikumbi<\/i> of <a href='https:\/\/facebook.com\/makenipaogz\/' title='Makeni Assembly of God Church' target='_blank'>Makeni Assembly of God Church<\/a> <\/p> <\/div> <\/div> <\/footer> <!-- Scripts --> <script async type='text\/javascript' src='{{ asset('js\/burger.js') }}'><\/script> <script src='https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/overlayscrollbars\/1.9.1\/js\/OverlayScrollbars.min.js'><\/script> <script> document.addEventListener('DOMContentLoaded', function() { \/\/The first argument are the elements to which the plugin shall be initialized \/\/The second argument has to be at least a empty object or a object with your desired options OverlayScrollbars(document.querySelectorAll('body'), { }); }); <\/script> <script src='{{ asset('js\/app.js') }}'><\/script> <\/body> <\/html>"
					}
				]
			},
			"templates": {
				"body": {
					"header": {
						"style": {
							"background": "#56b000 "
						},
						"title": {
							"type": "image",
							"style": {
							},
							"url": "{{ asset('img/maog_logo.png') }}"
						}
					},
					"sections": [{
						"items": {
							"@{{#each about}}": {
								"type": "vertical",
								"style": {
									"spacing": "5"
								},
								"components": [{
									"type": "vertical",
									"style": {
										"padding": "5",
										"background": "#f5f5f5",
										"spacing": "5"
									},
									"components": [{
											"type": "html",
											"class": "label_class",
											"text": "@{{text}}",
											"action": {
												"type": "$default"
											}
										}
									]
								}]
							}
						}
					}],
					"footer": {
						"tabs": {
							"style": {
								"background": "rgba(51,51,51,0.8)",
								"color:disabled": "#adadad",
								"color": "#56b000"
							},
							"items": [
								{
									"text": "Home",
									"url": "{{ route('jasonette_calendar') }}",
									"image": "https://png.icons8.com/material/96/56b000/dog-house.png",
									"style": {
										"height": "20"
									}
								},
								{
									"text": "About",
									"url": "{{ route('jasonette_about') }}",
									"image": "https://png.icons8.com/material/96/56b000/info-squared.png",
									"style": {
										"height": "20"
									}
								}
							]
						}
					}
				}
			}
		}
	}
}