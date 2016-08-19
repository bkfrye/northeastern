<div id="accordian">
	<?php
		$rows = get_field('nu_content');
		if($rows)
		{
			echo '<ul class="accordion-item">';
			foreach($rows as $row)
			{
				echo '<li>
						<input type="checkbox" checked>
						<div class="question">
							<p>'.$row['header'].'</p>
						</div>
						<div class="answer">
							<p>'.$row['more_content'].'</p>
							</div>
						</li>';
			}
			echo '</ul>';
		}
	?>
</div>
