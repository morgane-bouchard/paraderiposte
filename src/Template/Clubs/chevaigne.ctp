<!DOCTYPE html>
<html> 
	<head> 
		<title>Chevaign&eacute;</title>
		<meta charset='utf-8'>
		<?= $this->Html->css('club.css'); ?>
	</head>
	<body> 
		 
	<div class="logo" style="margin-top: 2px">
	<img src="..\webroot\img\logochevaigne.png" alt="logo chevaigne"/>
	</div>
	
	<div class="photos">
	<table class="matable">
	<tr>
	<td>
		<figure class="photo">
		<img src="..\webroot\img\marclegrand.png" alt="alt1" class="photo1"/>
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
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.5745057016757!2d-1.6348527847600633!3d48.21481107922962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480edcb97ac26d6b%3A0x2f8eae5f17427c5a!2sSalle+polyvalente%2C+35250+Chevaign%C3%A9!5e0!3m2!1sfr!2sfr!4v1547638634059" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>	
	</div>
	
	
	
		
	
	</body>
</html>