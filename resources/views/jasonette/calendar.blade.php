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
						"text":"<center><strong>CALENDAR</strong></center>"
					},
					{
						"text":"<p>Some calendar here</p>"
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