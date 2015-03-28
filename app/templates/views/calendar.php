<div id="calendars">
<?php

for ($month = 1; $month <= 12; $month++):
	$day = 1;
	$time = mktime(0, 0, 0, $month, 1, $this->year);
	$end = cal_days_in_month(CAL_GREGORIAN, $month, $this->year);

	?>

	<table>
		<tr>
			<th colspan="7"><?= date('F Y', $time); ?></th>
		</tr>
		<?php while ($day < $end): ?>
			<tr>
				<?php $row = 0; ?>
				<?php if ($day == 1): ?>
					<?php for ($space = 0; $space < date('w', $time); $space++): ?>
						<?php $row++; ?>
						<td></td>
					<?php endfor; ?>
				<?php endif; ?>

				<?php while ($row < 7 && $day <= $end): ?>
					<td><?= $day; ?></td>
					<?php $day++; $row++; ?>
				<?php endwhile; ?>

				<?php if ($day > $end && $row < 7): ?>
					<?php while ($row < 7): ?>
						<td></td>
						<?php $row++; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</tr>
		<?php endwhile; ?>
	</table>
<?php endfor; ?>
</div>
<div id="games"></div>
