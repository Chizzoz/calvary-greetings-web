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
						"text":"<!DOCTYPE html> <html lang='{{ app()->getLocale() }}'> <head> <meta charset='utf-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'> <meta name='viewport' content='width=device-width, initial-scale=1'> <meta name='theme-color' content='#0096ff'> <meta name='description' content='Your daily devotion, Calvary Greetings, delivered by Bishop Chikumbi of Makeni Assembly Of God (MAOG) Church.'> <!-- CSRF Token --> <meta name='csrf-token' content='{{ csrf_token() }}'> <!-- title --> <title>{{ config('app.name') }} | Makeni Assembly of God | PAOG<\/title> <!-- Icons --> <link rel='apple-touch-icon' sizes='180x180' href='\/apple-touch-icon.png'> <link rel='icon' type='image\/png' sizes='32x32' href='{{ asset('favicon-32x32.png') }}'> <link rel='icon' type='image\/png' sizes='16x16' href='{{ asset('favicon-16x16.png') }}'> <link rel='manifest' href='{{ asset('manifest.webmanifest') }}'> <!-- Styles --> <link href='{{ asset('css\/app.css') }}' rel='stylesheet'> <link rel='stylesheet' href='https:\/\/maxcdn.bootstrapcdn.com\/font-awesome\/4.7.0\/css\/font-awesome.min.css'> <link rel='stylesheet' href='{{ asset('css\/OverlayScrollbars.min.css') }}'> <link href='https:\/\/fonts.googleapis.com\/css?family=Open+Sans' rel='stylesheet'> <!-- Bulma Version 0.8.x--> <link rel='stylesheet' href='{{ asset('css\/bulma.min.css') }}' \/> <link rel='stylesheet' type='text\/css' href='{{ asset('css\/custom.css') }}'> <!-- Fonts --> <link rel='dns-prefetch' href='\/\/fonts.gstatic.com'> <link href='https:\/\/fonts.googleapis.com\/css?family=Nunito' rel='stylesheet'> <\/head> <body> <div id='app'> <section class='hero is-info is-medium is-bold'> <div class='hero-body'> <div class='container title-container has-text-centered'> <h1 class='title'>Calvary Greetings Daily Devotion<br>Delivered By Bishop C. Chikumbi<br>of Makeni Assembly of God Church (MAOG)<br>a Pentecostal Assemblies of God (PAOG) Church<\/h1> <\/div> <\/div> <\/section> <div class='container'> <!-- START ARTICLE FEED --> <section class='articles'> <div class='column is-8 is-offset-2'> <!-- START ARTICLE --> <div class='card article'> <div class='card-content'> <div class='container'> <main class='py-4'> <p>Makeni Assembly was born on 17th April, 1994. The vision was simply to take Christ to the community and the community to Christ.<\/p> <\/main> <center> <h3>MAOG Church Location<\/h3> <iframe src='https:\/\/www.google.com\/maps\/embed?pb=!1m18!1m12!1m3!1d3845.124202775005!2d28.24585761485105!3d-15.477749989248675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f25eb459e44f%3A0xebf5a30f2acbbfa4!2sMakeni%20Assembly%20of%20God%20Church!5e0!3m2!1sen!2szm!4v1576983091607!5m2!1sen!2szm' width='600' height='450' frameborder='0' style='border:0;' allowfullscreen=''><\/iframe> <\/center> <\/div> <\/div> <\/div> <!-- END ARTICLE --> <\/div> <\/section> <!-- END ARTICLE FEED --> <\/div> <\/div> <!-- Footer --> <footer class='footer'> <div class='container'> <div class='content has-text-centered'> <p> <strong><a href='\/' title='Calvary Greetings Daily Devotion'>Calvary Greetings Daily Devotion<\/a><\/strong> by <i>Bishop C. Chikumbi<\/i> of <a href='https:\/\/facebook.com\/makenipaogz\/' title='Makeni Assembly of God Church' target='_blank'>Makeni Assembly of God Church<\/a> <\/p> <\/div> <\/div> <\/footer> <!-- Scripts --> <script async type='text\/javascript' src='{{ asset('js\/burger.js') }}'><\/script> <script src='https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/overlayscrollbars\/1.9.1\/js\/OverlayScrollbars.min.js'><\/script> <script> document.addEventListener('DOMContentLoaded', function() { \/\/The first argument are the elements to which the plugin shall be initialized \/\/The second argument has to be at least a empty object or a object with your desired options OverlayScrollbars(document.querySelectorAll('body'), { }); }); <\/script> <script src='{{ asset('js\/app.js') }}'><\/script> <\/body> <\/html>"
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
							"{{#each about}}": {
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
											"text": "{{text}}",
											"action": {
												"type": "$default"
											}
										}
									]
								}]
							}
						}
					}]
				}
			}
		}
	}
}