<?php
function random() {
  return (float)rand()/(float)getrandmax();
}
$images = get_field('gallery');

if( $images ):
	foreach( $images as $image ):
		$temp = "";
		$w = 1;
		$html = '';
		$limitItem = 12;
		for ($i = 0; $i < $limitItem; $i++) {
			$w = 150 + 350 * random() << 0;
			$html = $w;
		}
		?>


		<!-- <a href="<?php echo $image['url']; ?>"> -->
			<div class="cell" style="float: left;width:<?php echo $html ?>px; height: 200px; background-image: url(<?php echo $image['sizes']['large']; ?>); background-image: contain;background-repeat: no-repeat;background-position: center;"></div>
		<!-- </a> -->



	<?php endforeach; endif; ?>
