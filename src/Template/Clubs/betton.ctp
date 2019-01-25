<!DOCTYPE html>
<html> 
	<head> 
		<title>Betton</title>
		<meta charset='utf-8'>
		<?= $this->Html->css('club.css'); ?>
	</head>
	<body> 
		 
	<div class="logo" style="margin-top: 2px">
	<img src="..\webroot\img\logobeton.png" alt="logo Betton"/>
	</div>
	
	<div class="photos">
	<table class="matable">
	<tr>
	<td>
		<figure class="photo">
		<img src="..\webroot\img\photorandom2.png" alt="alt1" class="photo1"/>
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
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10639.506590773753!2d-1.6521307654877337!3d48.18972811763983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edcf65acc19ab%3A0xe9da5b877ce25a66!2sLa+Touche%2C+35830+Betton!5e0!3m2!1sfr!2sfr!4v1548248002881" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	
	</div>
	
	
	
		
	
	</body>
</html>