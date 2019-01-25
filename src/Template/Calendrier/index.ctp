<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<?= $this->Html->css('fullcalendar.min.css'); ?>
<?= $this->Html->script('fullcalendar.min.js'); ?>

<?php    

try {
  $db = new PDO('mysql:host=localhost;dbname=paraderiposte;charset=utf8', 'root', '');
} catch (PDOException $e) {
  die("Impossible de se connecter a la source de donnees...");
}

//Executer SELECT
$sql = "SELECT * FROM evenements";

?>




<script type="text/javascript">
	
  document.addEventListener('DOMContentLoaded', function() {
	var initialLocaleCode = 'fr';
    var calendarEl = document.getElementById('calendar');
	

		var calendar = new FullCalendar.Calendar(calendarEl, {
		  header: {
			left: 'prev,next today',
			center: 'title',
		  },
		  locale: initialLocaleCode,
		  navLinks: false, // can click day/week names to navigate views
		  editable: false,
		  eventLimit: true, // allow "more" link when too many events
		  events: [
			<?php foreach ($db->query($sql) as $lst): ?>
			{
			  title: '<?php echo $lst['titre'];?>',
			  start: '<?php echo $lst['datedebut']; ?>',
			  end: '<?php echo $lst['datefin']; ?>'	
					},
			<?php endforeach; ?>
			{}		
		  ]
		});
		calendar.render();
  });

</script>
<style>

  body {
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>

  <div id='calendar'></div>

</body>
</html>
