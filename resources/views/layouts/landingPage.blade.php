<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>siSekolah</title>
	
	{!! Html::style('css/app.css') !!}		
	{!! Html::style('css/FontAwesome/all.min.css') !!}
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	

	<style type="text/css">
		body {
			margin: 0;
			overflow-x: hidden;
		}
		.slide .container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			color: #fff;
			text-align: center;			
		}
		.intro {
			background-color: #305a5b;			
		}
		.parallax {
			background: url(img/bg/pexels-photo-710743.jpeg) 50% 0;
		}
		.slidein {
			background-color: #5b3030;
		}
		.slidein2 {
			background-color: #304b5b;
		}
		.slidein2 .container {
			justify-content: space-around;
		}
	</style>
</head>
<body>
	<main>
		<div id="parallax" class="parallax slide">
			<div class="container">
				<div  style="background-color: rgba(0.3, 0.5, 0.2, 0.3); padding: 50px;">
					<img src="img/logo/SMKN 1 Katapang.png" alt="">
					<h1>Parallax Background</h1>
					<button href="" class="btn btn-success">Selengkapnya</button>
				</div>				
			</div>
		</div>

		<div id="slidein" class="slidein slide">
			<div class="container">
				<h1>Slide and Pin</h1>
			</div>
		</div>

		<div id="slidein2" class="slidein2 slide">
			<div class="container">
				<div id="left">
					<h1>From Left</h1>
				</div>
				<div id="opacity">
					<h1>Fade In</h1>
				</div>
				<div id="bottom">
					<h1>From Bottom</h1>
				</div>
			</div>
		</div>
	</main>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	{!! Html::script('js/gs/jquery.gsap.min.js') !!}
	{!! Html::script('js/gs/TweenMax.min.js') !!}
	{!! Html::script('js/scrollmagic/ScrollMagic.min.js') !!}
	{!! Html::script('js/scrollmagic/plugins/animation.gsap.min.js') !!}
	{!! Html::script('js/scrollmagic/plugins/debug.addIndicators.min.js') !!}
	{!! Html::script('js/app.js') !!}
	
	<script type="text/javascript">
		var controller = new ScrollMagic.Controller();

		new ScrollMagic.Scene({
			triggerElement: "#parallax",
			triggerHook: "onEnter",			
		})
		.duration("200%")
		.setTween("#parallax", {
			backgroundPosition: "50% 100%",
			ease: Linear.easeNone
		})
		.addTo(controller);

		new ScrollMagic.Scene({
			triggerElement: "#slidein",
			triggerHook: "onLeave"
		})
		.setPin("#slidein")
		.addTo(controller);

		new ScrollMagic.Scene({
			triggerElement: "#slidein2",
			triggerHook: "onLeave"
		})
		.setPin("#slidein2")
		.addTo(controller);


		//other animation
		var fromLeftTimeline = new TimelineMax();
		var fromLeftFrom = TweenMax.from("#left", 1, {
			x: -500
		});
		var fromLeftTo = TweenMax.to("#left", 1, {
			x: 0
		});
		fromLeftTimeline
			.add(fromLeftFrom)
			.add(fromLeftTo);

		new ScrollMagic.Scene({
			triggerElement: "#slidein2",
			offset: 200
		})
		.setTween(fromLeftTimeline)
		.duration(400)
		.addTo(controller);

		//Fade In
		var fadeInTimeline = new TimelineMax();
		var fadeInFrom = TweenMax.from("#opacity", 1, {
			autoAlpha: 0
		});
		var fadeInTo = TweenMax.to("#opacity", 1, {
			autoAlpha: 1
		});
		fadeInTimeline
			.add(fadeInFrom)
			.add(fadeInTo);

		new ScrollMagic.Scene({
			triggerElement: "#slidein2",
			offset: 200
		})
		.setTween(fadeInTimeline)
		.duration(400)
		.addTo(controller);

		//Fly In
		var fromBottomTimeline = new TimelineMax();
		var fromBottomFrom = TweenMax.from("#bottom", 1, {
			y: 300
		});
		var fromBottomTo = TweenMax.to("#bottom", 1, {
			y: 0
		});
		fromBottomTimeline
			.add(fromBottomFrom)
			.add(fromBottomTo);

		new ScrollMagic.Scene({
			triggerElement: "#slidein2",
			offset: 200
		})
		.setTween(fromBottomTimeline)
		.duration(400)
		.addTo(controller);
	</script>
</body>
</html>