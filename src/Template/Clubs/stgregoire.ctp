<!DOCTYPE html>
<html> 
	<head> 
		<title>Saint-Grégoire</title>
		<meta charset='utf-8'>
		<?= $this->Html->css('club.css'); ?>
	</head>
	<body> 
		 
	<div class="logo" style="margin-top: 2px">
	<img src="..\webroot\img\Saintgregoire.png" alt="logo St grégoire"/>
	</div>
	
	<div class="photos">
	<table class="matable">
	<tr>
	<td>
		<figure class="photo">
		<img src="..\webroot\img\olivierpoulet.png" alt="alt1" class="photo1"/>
		<figcaption> <?= $club->president ?>  <br/> Pr&#233;sident  </figcaption>
		</figure>
		</td>
		<td>
		
		<figure class="photo">
		<img src="..\webroot\img\photorandom2.png" alt="alt2" class="photo2"/>
		<figcaption> <?= $club->secretaire ?> <br/> Secr&#233;taire </figcaption>
		</figure>
		</td>
		<td>
	
		<figure class="photo">
		<img src="..\webroot\img\photorandom3.png" alt="alt3" class="photo3"/>
		<figcaption> <?= $club->tresorier ?> <br/> Tr&#233;sori&#232;re </figcaption>
		</figure>
		</td>
		</tr>
		
		</table>

	</div>
	
	<div class="maps">
	<p>
	Notre adresse :
	</p>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2661.527105568615!2d-1.6826586847625198!3d48.157921479225095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edde883aaf0bd%3A0xee70016e1493534e!2sLa+Ricoquais%2C+35760+Saint-Gr%C3%A9goire!5e0!3m2!1sfr!2sfr!4v1548248407879" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	
	
	
		
	
	</body>
</html>