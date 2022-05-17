<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>

<div id="mainSlider" class='mainSlider overflow-hidden'>
    <?php echo latest('swiper_card2','mainSlider',2,100)?>
</div>
<div id="news"></div>



<?php
include_once(G5_THEME_PATH.'/tail.php');