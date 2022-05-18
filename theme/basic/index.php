<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>
<!--메인슬라이드-->
<h2 class="sound_only">최신글</h2>

<div id="mainSlider" class='overflow-hidden'>
    <div class="sliderBox ">
        <?php echo latest('swiper_card2','mainSlider',3,10000)?>
    </div>
</div>
<!--네서녈소식  bo_table : NEWS-->
<div id="news">
    <div class="hjinner m-auto">
        <?php echo latest('news','NEWS',4,500)?>
    </div>
</div>

<!--네셔널일상 bo_table : daily -->
<div id="daily">
    <?php echo latest('daily','daily',4,500)?>
</div>


<!--유튜브연동 bo_table : yuoutube-->



<?php
include_once(G5_THEME_PATH.'/tail.php');