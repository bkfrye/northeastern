<?php

$images = get_field('gallery');

if( $images ): ?>
	<?php foreach( $images as $image ):
		$temp = "";
		$w = 1;
		$html = '';
		$limitItem = 50;
		for ($i = 0; $i < $limitItem; $i++) {
			$w = 200 + 200 * random() << 0;
			$html = $w;
		}
		?>


		<!-- <a href="<?php echo $image['url']; ?>"> -->
			<div class="cell" style="float: left;width:<?php echo $html ?>px; height: 200px; background-image: url(<?php echo $image['url']; ?>); background-image: cover;background-repeat: no-repeat;background-position: center;"></div>
		<!-- </a> -->



	<?php endforeach; ?>
<?php endif; ?>
<script type="text/javascript">
	var wall = new Freewall("#freewall");
	wall.reset({
		selector: '.cell',
		animate: true,
		cellW: 10,
		cellH: 300,
		onResize: function() {
			wall.fitWidth();
		}
	});
	wall.fitWidth();
	// for scroll bar appear;
	jQuery(window).trigger("resize");



			// var temp = "<div class='cell' style='width:{width}px; height: {height}px; background-image: url(i/photo/{index}.jpg)'></div>";
			// var w = 1, html = '', limitItem = 49;
			// for (var i = 0; i < limitItem; ++i) {
			// 	w = 200 +  200 * Math.random() << 0;
			// 	html += temp.replace(/\{height\}/g, 200).replace(/\{width\}/g, w).replace("{index}", i + 1);
			// }
			// $("#freewall").html(html);
			//
			// var wall = new Freewall("#freewall");
			// wall.reset({
			// 	selector: '.cell',
			// 	animate: true,
			// 	cellW: 20,
			// 	cellH: 200,
			// 	onResize: function() {
			// 		wall.fitWidth();
			// 	}
			// });
			// wall.fitWidth();
			// $(window).trigger("resize");

</script>

</div>
