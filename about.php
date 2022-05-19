<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<!--센터소개 페이지 / 테이블명 id랑 같음-->

<!--센터소개-->
<div id="about" class=''>   
        <?php echo latest('','about',1,10000)?>   
</div>
<!--강사소개-->
<div id="people">
    <div class="">
        <?php echo latest('','people',1,10000)?>
    </div>
</div>

<!--오시는길-->
<div id="way">
    <?php echo latest('','way',1,10000)?>     
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');