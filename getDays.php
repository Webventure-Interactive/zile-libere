<?php
	include('calcul_zile.php');

	$year = date("Y");
	if ( is_numeric(substr($_SERVER['REQUEST_URI'], -4)) ) {
		$year = substr($_SERVER['REQUEST_URI'], -4);
	}

	setlocale(LC_ALL, 'ro_RO.utf8', 'ro');
?>


<?php $days = returnLegalDays( isset($_POST['year']) ? $_POST['year'] : $year ); ?>


<?php $total_free_days = 0; ?>
<?php $total_free_week_days = 0; ?>

<?php foreach ($days as $day) { ?>
	
	<div class="table_row">
		<div class="col-6 col_name"> <?php echo $day['name'] ?> </div>
		<div class="col-6 col_date">
			<?php foreach ($day['date'] as $k => $date) { ?>
				<span class="<?php echo ( $date['weekday'] == "Sat" || $date['weekday'] == "Sun" ) ? 'weekendDay' : '' ?>"> 
					<?php echo count($day['date']) > 1 ? 
						( !$k ? strftime('%d', strtotime($date['date'])) . ", " : strftime('%d %B', strtotime($date['date'])) ) 
						: strftime('%d %B', strtotime($date['date']));
					?> 
				</span>
				<?php $total_free_days++; ?>
				<?php
					if ( $date['weekday'] == "Sat" || $date['weekday'] == "Sun" ) {
						$total_free_week_days++;
					}
				?>
			<?php }	?>

			<span class="weekDays">(
				<?php foreach ($day['date'] as $k => $date) { ?>
					<?php echo strftime("%A", strtotime($date['weekday'])); ?>
					<span>,</span>
				<?php }	?>
			)</span>
		</div>
		<div class="clearfix"></div>
	</div>

<?php } ?>

<div class="legend"> *zilele marcate cu rosu sunt zile libere in weekend </div>

<div class="total_zile_libere">
	<div>
		Zile libere <span class="the_year"><?php echo date("Y"); ?></span>: <span class="nr_zile"><?php echo $total_free_days; ?></span>
	</div>
	<div>
		Zile libere in timpul saptamanii lucratoare: <span class="nr_zile"> <?php echo $total_free_days - $total_free_week_days ?> </span>
	</div>
</div>