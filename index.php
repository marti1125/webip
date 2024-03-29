<?php  
 $ip = getenv("REMOTE_ADDR");  
 
 $rest = substr($ip, 0, 10); 
 
 if($rest == '192.168.95'){
	$ip = '192.168.95.200';
 }else {
	$ip = '201.234.114.154';
 }
 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>SafeCity Stream 2.0: Municipalidad de San Martín de Porres</title>
	
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="stylesheets/base.css" />

	<link rel="stylesheet" type="text/css" href="stylesheets/media.queries.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/tipsy.css" />
	<link rel="stylesheet" type="text/css" href="javascripts/fancybox/jquery.fancybox-1.3.4.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do|Quicksand:400,700,300">
	
	<!-- Javascripts -->
	<script type="text/javascript" src="javascripts/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="javascripts/html5shiv.js"></script>
	<script type="text/javascript" src="javascripts/jquery.tipsy.js"></script>
	<script type="text/javascript" src="javascripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<script type="text/javascript" src="javascripts/fancybox/jquery.easing-1.3.pack.js"></script>
	<script type="text/javascript" src="javascripts/jquery.touchSwipe.js"></script>
	<script type="text/javascript" src="javascripts/jquery.mobilemenu.js"></script>
	<script type="text/javascript" src="javascripts/jquery.infieldlabel.js"></script>
	<script type="text/javascript" src="javascripts/jquery.echoslider.js"></script>
	<script type="text/javascript" src="javascripts/fluidapp.js"></script>

	<script type="text/javascript" src="mdetect.js"></script>
	
	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.png" />
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

	

</head>
<body onload="load()">
	<!-- Start Wrapper -->
	<div id="page_wrapper">
		
	<!-- Start Header -->
	<header>
		<div class="container">
			<!-- Start Social Icons -->
			<aside>	
		
				<ul class="social">
					<li><h1 class="tit">Municipalidad de San Martín de Porres</h1></li>
				</ul>
			</aside>
			<!-- End Social Icons -->
			
			<!-- Start Navigation -->
			<nav> 
				<ul>
					<li><a href="#home">Mapa</a></li>
					<li><a href="#mapa">Comentario</a></li>
					<li><a id="cambialink" href="#repcuidadano">Reporte Ciudadano</a></li>
					<li><a href="#manual">Información</a></li>
					<li><a href="#team">&nbsp;</a></li>
					<li><a href="#team">&nbsp;</a></li>
					<li><a href="#team">&nbsp;</a></li>
					<li><a href="#team">&nbsp;</a></li>
					<li><a href="#team">&nbsp;</a></li>
				</ul>
				<span class="arrow"></span>
			</nav>
			<!-- End Navigation -->
		</div>
	</header>
	<!-- End Header -->
	
	<section class="container">
		
		<!-- Start App Info -->
		<div id="app_info">
			
			<!-- Start Logo -->
			<div id="videocenter">
				
				<br/><video id='ivideo' width='' height='' src='' controls='controls'>Cargando...</video>
				<div id='mediaspace'>Cargando....</div>
				<br/>
				<span id="vtitulo"><b></b></span>&nbsp;&nbsp;<span id="vdescripcion"></span>
			</div> 
			<!--a href="#home" class="logo">
				<img src="images/light-logo.png" alt="Fluid App" />
			</a>
			< End Logo -->
			
			
			
			
			<!--span class="tagline">The greatest mobile app site ever.</span>
			<p>
				FluidApp is a fully-responsive, mobile app website theme for iPhone, iPad, Android and more. Coded using the latest HTML5 and CSS3 standards, FluidApp also features a custom jQuery slider and 7 unique page layouts with fading in-place page transitions. Choose from a light or dark version to perfectly compliment your mobile masterpiece.
			</p>
			<p>
				Plantilla de SafeCity Stream con caracteristicas fully-responsive, multiplataforma para iPhone, iPad, Android and more. Coded usando HTML5 y CSS3.
			</p>
			<span class="tagline">Un gran sitio para conocer...</span>
			<div class="buttons">
				<a href="#" class="large_button" id="apple">
					<span class="icon"></span>
					<em>Download now for</em> iPhone
				</a>
				<a href="#" class="large_button" id="android">
					<span class="icon"></span>
					<em>Download now for</em> Android
				</a>
			</div>
			
			<div class="price centered"> < Alignments options: right_align, left_align, centered -->
				<!--p>Just $2.99 for a limited time!</p>
			</div-->
		</div>
		<!-- End App Info -->		
		
		<!-- Start Pages -->
		<div id="pages">
			<div class="top_shadow"></div>

			<!-- Start Team -->
			<div id="home" class="page">
				
				<h1>Mapa</h1>
				
				<div id="map_canvas"></div>
				<div id="map_canvas2"></div>
				<div id="map_canvas3"></div>
			</div>
			<!-- End Team -->
			
			<!-- Start Home -->
			<div id="mapa" class="page">
				
				<h1>Comentario</h1>				
				
				
				<div id="contact_form">
					
					<div class="validation">
						<p>Oops! Por favor, corrija los campos resaltados ...</p>
					</div>

					<div class="success">
						<p>¡Gracias! Me pondré en contacto con usted en breve.</p>
					</div>

					<form action="javascript:;" method="post">						

						<div class="row">
							<p class="left">
								<label for="asunto">Asunto*</label>
								<input type="text" name="asunto" id="asunto" value=""  />
							</p>							
							<p class="right">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="#"><img src="images/uploadphoto.png" width="100px" height="100px"/></a>
							</p>
							<p>&nbsp;</p>
							<p class="left">
								<label for="na">Nombres y Apellidos*</label>
								<input type="text" name="na" id="na" value=""  />	
							</p>								
						</div>		

						<p>
							<label for="comentarioss" class="textarea">Mensaje</label>
							<textarea class="text" name="comentarioss" id="comentarioss"  ></textarea>
						</p>
							<input type="submit" id="env" class="button white" value="Enviar &#x2192;" />
						
						

					</form>
				
				</div>
			
			</div>

			<div id="repcuidadano" class="page">
				
				<h1>Reporte Cuidadano</h1>

				<div id="contact_form2">

					<div class="comu_validation">
						<p>Oops! Por favor, corrija los campos resaltados ...</p>
					</div>

					<div class="comu_success">
						<p>¡Gracias! Me pondré en contacto con usted en breve.</p>
					</div>
					


					<form action="javascript:;" method="post">
						<div class="row">
							<p class="left">
								<label for="idcui">Id de ciudadano*</label>
								<input type="text" name="idcui" id="idcui" value="" />
							</p>
							<p class="right">
								<label for="clave">Clave*</label>
								<input type="password" name="clave" id="clave" value="" />
							</p>																					
						</div>
						<div class="row">
							<p class="left">
								<label for="asunto2">Asunto*</label>
								<input type="text" name="asunto2" id="asunto2" value="" />
							</p>							
						</div>
						<p>
							<label for="mensajet" class="textarea">Mensaje</label>
							<textarea class="text" name="mensajet" id="mensajet"></textarea>
						</p>
					
						<input type="submit" id="env2" class="button white" value="Enviar &#x2192;" />
					</form>
				
				</div>

			</div>


			<!-- End Home -->

			<div id="manual" class="page">
				
				<h1>Información</h1>	

				<iframe src="flash/manual/index.html" width="410" height="380" frameborder="0"></iframe> 

			</div>
			
			

		</div>
		<!-- End Pages -->
		
		<div class="clear"></div>
	</section>
	
	<!-- Start Footer -->
	<footer class="container">
		<p>Demostración de integración del  <b>API SAFECITY STREAM SERVER 2.0</b></p>
	</footer>
	<!-- End Footer -->
	
	</div>
	<!-- End Wrapper -->

	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="javascripts/gmaps.js"></script>
	
	<script type="text/javascript" src="video/jwplayer.js"></script>
	<script type='text/javascript' src='video/jwplayer.js'></script>

	<script type="text/javascript"> 
	
	$("#ivideo").hide();
	
	var v1;

	var file = 'CAM01';

	var titulo = '';

	var descripcion = '';

	camaras(file,titulo,descripcion);

	function camaras(file, titulo, descripcion){
		
		var ip = "<?php echo $ip; ?>" ;

		$('#vtitulo').html(titulo);

		$('#vdescripcion').html(descripcion);	

		jwplayer('mediaspace').setup({
		    'flashplayer': 'video/player.swf',
		    'file': file,
			'autostart': 'true',
		    'streamer': 'rtmp://' + ip + '/live/',
		    'controlbar': 'bottom',
		    'width': '430px',
		    'height': '380px'
  		});
	}

	function load(){

		if(DetectIphone()){
			$(".tit").css("font-size","15px");
			$("#map_canvas").hide();
			$("#map_canvas2").hide();
			$("#mediaspace").hide();
			$("#ivideo").show();
			$('#ivideo').attr('src','http://201.234.114.154/hls/hls_cam01/playlist.m3u8');
			$('#ivideo').attr('width','260px');
			$('#ivideo').attr('height','220px');
			$('#map_canvas3').attr('width','290px');
			$('#map_canvas3').attr('height','100px');

			map3 = new GMaps({
		        div: '#map_canvas3',
		        lat: -12.007274876953339,
		        lng: -77.08059310913086,
		        zoomControl: true,
		        zoom: 13,
		        zoomControlOpt: {
		            style: 'SMALL',
		            position: 'TOP_LEFT'
		        },
		        panControl: false,
		        streetViewControl: false,
		        mapTypeControl: false,
		        overviewMapControl: false
	    	});	


			$.getJSON('videos2.json', function(data) {			

			  $.each(data, function(key, val) {
			    $.each(val, function(key2, val2) {

			    	var a = val2.descripcion;
					var myvar = a.toString();	
					
			        map3.addMarker({
		        		lat: val2.latitud,
		        		lng: val2.longitud,
		        		infoWindow: {
		            		content: val2.descripcion
		        		},
		        		click: function (e) {
		            		$('#ivideo').attr('src',val2.url);
		            		$('#vtitulo').html(val2.titulo);
							$('#vdescripcion').html(val2.descripcion);
		        		}
	    			});		    

			  	});			   

			  });

			});
		}

		if(DetectIpad()){
			//$('#video').attr('src','video.html');
			$("#map_canvas").hide();
			$("#mediaspace").hide();
			$("#ivideo").show();			
			$('#ivideo').attr('width','430px');
			$('#ivideo').attr('height','360px');			
			$('#ivideo').attr('src','http://201.234.114.154/hls/hls_cam01/playlist.m3u8');

			map2 = new GMaps({
		        div: '#map_canvas2',
		        lat: -12.007274876953339,
		        lng: -77.08059310913086,
		        zoomControl: true,
		        zoom: 13,
		        zoomControlOpt: {
		            style: 'SMALL',
		            position: 'TOP_LEFT'
		        },
		        panControl: false,
		        streetViewControl: false,
		        mapTypeControl: false,
		        overviewMapControl: false
	    	});	


			$.getJSON('videos2.json', function(data) {			

			  $.each(data, function(key, val) {
			    $.each(val, function(key2, val2) {

			    	var a = val2.descripcion;
					var myvar = a.toString();	
					
			        map2.addMarker({
		        		lat: val2.latitud,
		        		lng: val2.longitud,
		        		infoWindow: {
		            		content: val2.descripcion
		        		},
		        		click: function (e) {
		            		$('#ivideo').attr('src',val2.url);
		            		$('#vtitulo').html(val2.titulo);
							$('#vdescripcion').html(val2.descripcion);
		        		}
	    			});		    

			  	});			   

			  });

			});
			
		}    


		$(document).ready(function () {
	    	map = new GMaps({
		        div: '#map_canvas',
		        lat: -12.007274876953339,
		        lng: -77.08059310913086,
		        zoomControl: true,
		        zoom: 12,
		        zoomControlOpt: {
		            style: 'SMALL',
		            position: 'TOP_LEFT'
		        },
		        panControl: false,
		        streetViewControl: false,
		        mapTypeControl: false,
		        overviewMapControl: false
	    	});	
 

			$.getJSON('videos.json', function(data) {			

			  $.each(data, function(key, val) {
			    $.each(val, function(key2, val2) {
				
					var a = val2.descripcion;
					var myvar = a.toString();
				 
			        map.addMarker({
		        		lat: val2.latitud,
		        		lng: val2.longitud,
		        		infoWindow: {
		            		content: val2.descripcion
		        		},
		        		click: function (e) {
		            		camaras(val2.camara,val2.titulo,myvar);

		        		}
	    			});		    

			  	});			   

			  });

			});   			   

		});
    	
	}

	</script>

	<script type="text/javascript">

	$("#env").click(function() {
		if($("#asunto").val().length < 1 || $("#comentarioss").val().length < 1 || $("#na").val().length < 1){
				$("#mapa").height("450px");
  				$(".success").hide();
  				$(".validation").show();
				FluidNav.resizePage('', true);
  				
		} else {
		
		var asunto = $('#asunto').val();
    	var na = $('#na').val();
    	var comentario = $('#comentarioss').val();
  		var querystring = "asunto="+asunto+"&na="+na+"&comentario="+comentario;
  		$.ajax({
  		type: 'POST',
  		data: querystring,
  		url: 'enviar.php',
  		success: function() {			
					$("#mapa").height("450px");
  					$(".validation").hide();
					$(".success").show();
					FluidNav.resizePage('', true);
  			}
  		});
  		return false;

  		}
	
	});


	</script>

	<script type="text/javascript">



	$("#env2").click(function() {

		var id = "demo", clave = "demo";
		var txtid = $('#idcui').val();
		var txtclave = $('#clave').val();

		if($("#asunto2").val().length < 1 || $("#mensajet").val().length < 1 && txtid != id || txtclave != clave){
				$("#mapa").height("400px");
  				$(".comu_success").hide();
  				$(".comu_validation").show();
				FluidNav.resizePage('', true);
  				
		} else if(txtid == id && txtclave == clave) {

		var asunto = $('#asunto2').val();
    	var comentario = $('#mensajet').val();
  		var querystring = "asunto="+asunto+"&comentario="+comentario;
  		$.ajax({
  		type: 'POST',
  		data: querystring,
  		url: 'enviar2.php',
  		success: function() {			
					$("#repcuidadano").height("400px");
  					$(".comu_validation").hide();
					$(".comu_success").show();
					FluidNav.resizePage('', true);
  			}
  		});
  		return false;

  		}
	
	});


	</script>


</body>
</html>