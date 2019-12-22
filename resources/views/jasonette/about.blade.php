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
						"text":"<center><strong>ABOUT</strong></center>"
					},
					{
						"text":"<p>Makeni Assembly was born on 17th April, 1994. The vision was simply to take Christ to the community and the community to Christ.</p>"
					},
					{
						"text":"<center><h3>MAOG Church Location</h3><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3845.124202775005!2d28.24585761485105!3d-15.477749989248675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1940f25eb459e44f%3A0xebf5a30f2acbbfa4!2sMakeni%20Assembly%20of%20God%20Church!5e0!3m2!1sen!2szm!4v1576983091607!5m2!1sen!2szm" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></center>"
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