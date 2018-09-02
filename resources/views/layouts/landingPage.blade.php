<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>siSekolah</title>
	
	{!! Html::style('css/app.css') !!}		
	{{-- {!! Html::style('css/FontAwesome/all.min.css') !!} --}}
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">	

	<style type="text/css">
		body {
			margin: 0;
			overflow-x: hidden;
		}
		.slide {			
			display: flex;					
			text-align: center;			
			color: #fff;	
		}
		.intro {
			align-items: flex-end;	
		}
		.parallax {
			background: url(img/bg/pexels-photo-710743.jpeg) 50% 0;
		}
		.parallax2{
			background: url(img/bg/Northwestern_High_School_Student_Art_Gallery.jpg) 50% 0;
		    opacity: 0.80;

		}
		.parallax3{
			background: url(img/bg/sky-wallpapers-28043-1572848.JPG);
			background-repeat: no-repeat;
			background-size: auto;
		}
		.fullheight {
			height: 90vh;
		}
		
		.slidein {
			/*background-color: #5b3030;*/
			align-items: center;
		}
		.slidein2 {
			align-items: center;
		}
		.slidein2 .container {
			justify-content: space-around;
		}		
		#slogan {
			position: relative;
			top: -100px;
		}
		.bgfly {
			background-color: rgba(0.2, 0.4, 0.6, 0.6);
		}
		.ikon {
			background-color: #eee;
			color: #2196F3;
			padding: 30px;
		}

	</style>
</head>
<body>
	<main>
		<div id="parallax" class="parallax slide intro fullheight">
			<div class="container-fluid">
				<div id="slogan" class="p-4">
					<h1 style="font-size: 8em;"><strong>SMK Bisa! <i class="far fa-thumbs-up"></i></strong></h1>
				</div>
				<div class="row mb-4">
					<div id="box-logo" class="col-md-5 px-3 py-2" style="background-color: rgba(0.2, 0.4, 0.6, 0.6); border-right: 10px solid #fff">
						<div class="media text-justify mt-3">
							<img src="img/logo/SMKN 1 Katapang.png" alt="" class="mr-3" style="width: 94px; height: 94px;">
							<div class="media-body">
								<h2><strong>SMKN 1 Katapang</strong></h2>
								<p class="lead"><small>Pusat penyiapan generasi yang unggul, berkarakter kebangsaan, kompetitif dan adaptable.</small></p>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>

		<div id="" class="slidein slide" style="color: #333;">
			<div class="container-fluid">
				<div class="row">
					<!--div class="col" style="background-color: #2196F3; height: 80vh; color: #fff;">
						<div class="ket my-4 p-4">
							<i class="fas fa-code display-3 my-4 rounded-circle ikon"></i>				
							<h3>Test</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias molestiae consectetur cum iste hic voluptas reiciendis natus, iure perspiciatis obcaecati.</p>
							<button class="btn btn-success">Selengkapnya</button>
						</div>
					</div-->
					<div class="col" style="background-color: #2196F3; color: #fff;">
						<div class="ket my-4 p-4">
							<i class="fas fa-code display-3 my-4 rounded-circle ikon"></i>				
							<h3>VISI</h3>
							<p>Menjadi pusat penyiapan generasi yang unggul, berkarakter kebangsaan, kompetitif dan adaptable.</p>
							<!--button class="btn btn-success">Selengkapnya</button-->
						</div>
					</div>
					<div class="col">
						<div class="ket my-4 p-4">
							<i class="fas fa-code display-3 my-4 rounded-circle ikon"></i>				
							<h3>MISI</h3>
							<ol style="text-align: justify;">
								<li>Menerapkan manajemen pelayanan yang responsif dan akuntabel.</li>
								<li>Melaksanakan Pembelajaran inovatif dan profesional yang didukung oleh teknologi berdasarkan pada kearifan kebangsaan.</li>
								<li>Meningkatkan sumber daya manusia (SDM) yang sesuai dengan perkembangan zaman berdasarkan kearifan kebangsaan.</li>
								<li>Menghasilkan lulusan yang berkarakter unggul, kompetitif sebagai pemimpin di masa depan.</li>
								<li>Menyiapkan Lulusan yang peduli terhadap sesama manusia dan lingkungannya</li>
							</ol>
							<!-- button class="btn btn-success">Selengkapnya</button -->
						</div>
					</div>
					<div class="col" style="background-color: #2196F3; color: #fff;">
						<div class="ket my-4 p-4">
							<i class="fas fa-code display-3 my-4 rounded-circle ikon"></i>				
							<h3>Tujuan</h3>
							<p>Terwujudnya tata kelola pelayanan yang responsif dan akuntabel. Terlaksananya Kegiatan Belajar Mengajar yang Inovatif dan Profesional Terlaksananya peningkatan Sumber Daya Manusia sesuai dengan perkembangan zaman secara arif dan bijaksana. Terbentuknya siswa yang berkarakter unggul, kompetitif dan adaptable terhadap perkembangan teknologi Terbentuknya siswa yang peduli terhadap sesama manusia dan lingkungannya</p>
							<!--button class="btn btn-success">Selengkapnya</button -->
						</div>
					</div>	
				</div>
			</div>
		</div>

		<div id="parallax2" class="parallax2 slidein2 slide fullheight" style="height: 70vh;">
			<div class="container">
				<!--div id="left">
					<h1 style="text-shadow:2px 2px black;">Gallery</h1>
				</div-->
				<div id="opacity">
					<h1 style="text-shadow: 3px 5px black;letter-spacing: 10px; font-size: 8em;opacity: 1">
						<strong>Gallery<i class="fa fa-camera"></i></strong>
					</h1>
				</div>
				<!--div id="bottom">
					<h1 style="text-shadow:2px 2px black;">From Bottom</h1>
				</div-->
			</div>
		</div>
		
		<div id="" class="slide" style="color: black;background-color: white;padding: 12px 16px;">
			<div class="container">
				<h2><strong>Kegiatan Sekolah</strong></h2>
				<p><i>Click on the images to make them bigger</i></p>
				<h2 style="text-align: left;">Pictures</h2>
				<div class="row">
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
				</div>
				<h2 style="text-align: left;">Videos</h2>
				<div class="row">
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
					<div class="col">
						<img src="img/logo/SMKN 1 Katapang.png">
						<h3>Judul</h3>
					</div>
				</div>
			</div>
		</div>

		<div id="parallax3" class="parallax3 slidein slide fullheight img-fluid" style="height: 60vh;">
			<div class="container">
				<h1 id="bottom" style="text-shadow: 3px 5px black;letter-spacing: 10px; font-size: 5em;opacity: 1">
					Contact Us<i class="fa fa-phone"></i>
				</h1>	
			</div>
		</div>
		<div class="slide" style="color: black;background-color: white;padding: 12px 16px;">
			<div class="container-fluid">
				<h2>WHERE I WORK</h2>
				<p><i>I'd Love Your Feedback!</i></p>
				<div class="row" style="background-color: #7EAFDA; color: #fff">
					<div class="col">
						<div class="ket my-4 p-4">
					     	Map
					   	</div>
					</div>
					<div class="col">
					   	<div class="ket my-4 p-4">
					   		<div style="text-align: justify;">
					   		<p><i class="fa fa-map-marker"></i> Katapang, Kabupaten Bandung</p>
					   		<p><i class="fa fa-phone"></i> (022) 5893737</p>
					   		<p><i class="fa fa-envelope"></i> smkn1katapang@bdg.centrin.net.id</p>
					   		</div>
					      	<form>
					      		<div class="row">
					      			<div class="col">
					      				<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
					      			</div>
					      			<div class="col">
					      				<input type="text" name="email" class="form-control" placeholder="Email">
					      			</div>
					      		</div>
					      		<br>
					      		<div class="row">
					      			<div class="col">
					      				<textarea name="pesan" class="form-control"></textarea>
					      			</div>
					      		</div>
					      		<br>
					      		<div class="row" style="float: right;">
					      			<div class="col">
					      				<button class="btn btn-flat btn-primary mb-2">
					      					<i class="fa fa-location-arrow"></i> Kirim Pesan!
					      				</button>
					      			</div>
					      		</div>
					      	</form>
					   	</div>
					</div>
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
			triggerElement: "#parallax2",
			triggerHook: "onEnter",
		})
		.duration("200%")
		.setTween("#parallax2", {
			backgroundPosition: "50% 100%",
			ease: Linear.easeNone
		})
		.addTo(controller);

		new ScrollMagic.Scene({
			triggerElement: "#parallax3",
			triggerHook: "onEnter",
		})
		.duration("200%")
		.setTween("#parallax3", {
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

		new ScrollMagic.Scene({
			triggerElement: "#slidein3",
			triggerHook: "onLeave"
		})
		.setPin("#slidein3")
		.addTo(controller);

		//other animation
		

		//SMK
		var fromRightTimeline = new TimelineMax();
		var fromRightFrom = TweenMax.from("#box-logo", 1, {
			x: 0
		});
		var fromRightTo = TweenMax.to("#box-logo", 1, {
			x: -500
		});
		fromRightTimeline
			.add(fromRightFrom)
			.add(fromRightTo);
		new ScrollMagic.Scene({
			triggerElement: "#parallax",
			offset: 200
		})
		.setTween(fromRightTimeline)
		.duration(1000)
		.addTo(controller);


		//Slogan
		var fadeInSlo = new TimelineMax();
		var fadeInSloFrom = TweenMax.from("#slogan", 1, {
			autoAlpha: 1
		});
		var fadeInSloTo = TweenMax.to("#slogan", 1, {
			autoAlpha: 0
		});
		fadeInSlo
			.add(fadeInSloFrom)
			.add(fadeInSloTo);

		new ScrollMagic.Scene({
			triggerElement: "#parallax",
			offset: 200
		})
		.setTween(fadeInSlo)
		.duration(400)
		.addTo(controller);

		//section3
		var fromLeftTimeline = new TimelineMax();
		var fromLeftFrom = TweenMax.from("#left", 1, {
			x: -600
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
			triggerElement: "#parallax2",
			offset: 200
		})
		.setTween(fadeInTimeline)
		.duration(400)
		.addTo(controller);

		//Fly In
		var fromBottomTimeline = new TimelineMax();
		var fromBottomFrom = TweenMax.from("#bottom", 1, {
			y: 100
		});
		var fromBottomTo = TweenMax.to("#bottom", 1, {
			y: 0
		});
		fromBottomTimeline
			.add(fromBottomFrom)
			.add(fromBottomTo);

		new ScrollMagic.Scene({
			triggerElement: "#parallax3",
			offset: 200
		})
		.setTween(fromBottomTimeline)
		.duration(400)
		.addTo(controller);
	</script>
</body>
</html>