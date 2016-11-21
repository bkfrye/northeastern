<?php
$sidebar_headline = $sb_row['sidebar_headline'];
$sidebar_content = $sb_row['sidebar_content'];
$sidebar_button_copy = $sb_row['sidebar_button_copy'];
$sidebar_button_link = $sb_row['sidebar_button_link'];
$text_color = $sb_row['text_color'];
$bg_color = $sb_row['background_color'];
$btn_color = $sb_row['button_color'];
?>
<style>
.custom_sb_btn a{
    display: inline-block;
    color: <?php echo $btn_color?>;
    border: 2px solid <?php echo $btn_color?>;
    border-radius: 22px;
    font-size: 12pt;
    text-transform: uppercase;
    height: 44px;
    min-width: 190px;
    padding: 10px 30px;
    text-decoration: none;
    text-align: center;
}
</style>
<div class="custom_sb">
    <article class="" style="width: 100%;margin-bottom: 2em;padding: 2em;background-color:<?php echo $bg_color?>">
        <h3 style="font-size: 26px;color:<?php echo $text_color?>"><?php echo $sidebar_headline ?></h3>
        <p style="color:<?php echo $text_color?>">
            <?php echo $sidebar_content ?>
        </p>
        <div class="custom_sb_btn" style="text-align: center;">
            <?php echo '<a href="' . $sidebar_button_link . '">' . $sidebar_button_copy . '</a>';?>
        </div>

    </article>
</div>
