<?php
/**
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$url = "https://www.juicer.io/api/feeds/alumni-website";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($ch);
curl_close($ch);

$contents = json_decode($data, true);
// echo '<pre>';
// print_r($contents);
// echo '</pre>';

echo '<div class="juicer_list">';
foreach ($contents['posts']['items'] as $feed) {
	echo '<div class="card '.$feed['source']['source'].'">';

		echo '<a href="'.$feed['full_url'] .'" target="_blank"><img src="'.$feed['image'].'"></a>';

		?>
		<div class="juicer_message">
			<?php echo $feed['message'];?>
		</div>

	<?php echo '<a href="'.$feed['full_url'] .'" target="_blank"><img src="'.$feed['image'].'"><footer class="juicer_footer">';

		echo '<img class="profile" src="'.$feed['poster_image'].'">';
		echo '<div class="profile_wrap">';
			echo '<p class="poster_pretty_name">'.$feed['poster_name'].'</p>';
			echo '<p class="poster_handle">@'.$feed['source']['term'].'</p>';
		echo '</div>';
		echo '<div class="icon-'.$feed['source']['source'].'"></div>';
	echo '</footer></a>';

	echo '</div>';
}
echo '</div>';
?>
