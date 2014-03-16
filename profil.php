<?php
/*
Template Name: Profile
*/
?>
<?php get_header(); ?>

<div id="wrapper">
    <div id="shadow_left" class="shadow"></div>
	<div id="shadow_right" class="shadow"></div>
    
    <div id="your_photo" class="circle our_photo">
        <div class="circle">
			<img src="<?php bloginfo("template_url"); ?>/img/ja.png" alt="Twoje zdjecie">
		</div>
    </div>
    <div id="mate_photo" class="circle our_photo">
        <div class="circle">
			<img src="<?php bloginfo("template_url"); ?>/img/mate.png" alt="Twoje zdjecie">
		</div>
    </div>
	<div id="enemy_2_photo" class="circle enemy_photo">
        <div class="circle">
			<img src="<?php bloginfo("template_url"); ?>/img/enemy_2.png" alt="Twoje zdjecie">
		</div>
    </div>
    <div id="enemy_1_photo" class="circle  enemy_photo">
        <div class="circle">
			<img src="<?php bloginfo("template_url"); ?>/img/enemy_1.png" alt="Twoje zdjecie">
		</div>
    </div>
    
    <div id="counter_box">
        <div class="number_box">
            <div class="top_number_box"> 
            </div>
            <div class="bot_number_box">
            </div>            
        </div>
        <div class="number_box">
            <div class="top_number_box"> 
            </div>
            <div class="bot_number_box">
            </div>            
        </div>
        <div class="number_box">
            <div class="top_number_box"> 
            </div>
            <div class="bot_number_box">
            </div>            
        </div>
        <div class="number_box">
            <div class="top_number_box"> 
            </div>
            <div class="bot_number_box">
            </div>            
        </div>
        <div class="number_box">
            <div class="top_number_box"> 
            </div>
            <div class="bot_number_box">
            </div>            
        </div>
        <div class="number_box">
            <div class="top_number_box"> 
            </div>
            <div class="bot_number_box">
            </div>            
        </div>
    </div>
</div>

<?php get_footer(); ?>