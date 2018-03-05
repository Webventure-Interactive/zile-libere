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

<?php foreach ($days as &$day) {
    $daysGrouped = [];
    $daysWordsGrouped = [];
    if (count($day['date']) > 0) {
        foreach ($day['date'] as $d) {
            if ($d['weekday'] === 'Sat' || $d['weekday'] == 'Sun') {
                $span = sprintf("<span class='weekendDay'>%s</span>", strftime('%d', strtotime($d['date'])));
            } else {
                $total_free_week_days++;
                $span = sprintf("<span>%s</span>", strftime('%d', strtotime($d['date'])));
            }
            $total_free_days++;
            $daysGrouped[date('n', strtotime($d['date']))][] = $span;
            $daysWordsGrouped[] = strftime("%A", strtotime($d['date']));
        }
        $groups = [];
        foreach ($daysGrouped as $month => $group) {
            $groups[] = implode(", ", $group) . strftime(' %B', mktime(null, null, null, $month, 1));
        }
        $daysNumber = implode(", ", $groups);
        $daysWords = sprintf("(%s)", implode(", ", $daysWordsGrouped));
    }
?>
	<div class="table_row">
		<div class="col-6 col_name"> <?php echo $day['name'] ?> </div>
		<div class="col-6 col_date"><?php echo $daysNumber ?>
			<span class="weekDays"><?php echo $daysWords ?></span>
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
		Zile libere in timpul saptamanii lucratoare: <span class="nr_zile"> <?php echo $total_free_week_days ?> </span>
	</div>
</div>