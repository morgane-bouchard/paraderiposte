<!DOCTYPE html>
<html>
<head>
	<title>Ajouter un Evenement</title>
	<?= $this->Html->css('style2.css'); ?>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
</head>
<body>

	

	<div id="container">
		<form method="post" action="http://localhost/paraderiposte/Evenements/addsubmit">
		<input type="text" name="_csrfToken" value="<?= $this->request->getParam('_csrfToken') ?>" style="display: none;">
			<label>Date de début et date de fin</label>
		        <input type="text" name="datefilter" value="" autocomplete="false" />
		        <input name="start" id="start" value="" style="display: none;">
		        <input name="end" id="end" value="" style="display: none;">
			<script>
    //Initialise "l'objet" dateragepicker
    $(function() {
        $('input[name="datefilter"]').daterangepicker({
            showDropdowns: true,
            timePicker: true,
            timePicker24Hour: true,
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear',
                format: 'DD/MM/YYYY h:mm A' 
            }
        });
    });
    //Lors de l'evelement du clique sur apply, les données sont traitée ici
     $('input[name="datefilter"]').on('apply.daterangepicker', function() {
         var start = $('input[name="datefilter"]').data('daterangepicker').startDate;
         var end = $('input[name="datefilter"]').data('daterangepicker').endDate;  
         $('input[name="datefilter"]').autoUpdateInput = true;
         start = moment(start).format('YYYY-MM-DDTHH:mm:ss');
         end = moment(end).format('YYYY-MM-DDTHH:mm:ss');
         //Affectation des valeurs à l'attribut value des inputs "start" et "end"
         document.getElementById("start").setAttribute("value",start);
         document.getElementById("end").setAttribute("value",end);
        });
     $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
  });
</script>
			
			<label>Titre de l'évenement</label>
			<input type="text" name="titre" />
			<label>Description de l'évenement</label>
			<textarea name="body" rows="4" cols="54" ></textarea> <br>
			<input type="submit" name="Ajouter ce post" style="width: 130px">
		</form>
	</div>
</body>
</html>