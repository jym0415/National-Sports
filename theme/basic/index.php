<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div id="mainSlider" class='overflow-hidden'>
    <div class="sliderBox row">
        <div class="col-6">
            <?php echo latest('swiper_card2','mainSlider',2,100)?>
        </div>
        <div class="col-6">
            <?php echo latest('mainContent','mainContent',1,10000)?>
        </div>
    </div>
</div>

<div id="news">
    <div class="hjinner m-auto mt-5 pt-5">
        <?php echo latest('news','NEWS',4,500)?>
    </div>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');