<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<!--센터소개 페이지 / 테이블명 id랑 같음-->

<!--센터소개-->

<div id="about" class='mb-5'>  
    <div class="hjinner d-lg-flex justify-content-between align-items-end">
        <?php echo latest('about','about',1,10000)?>
    </div>   
</div>
<!--강사소개-->
<div id="people">
    <div class="hjinner mx-0">
        <div class="row">
            <div class="jo col-12 col-md-6 row align-items-center my-5 py-5">
                <div class="imgWrap col-6 position-relative d-flex justify-content-center align-items-center">
                    <?php echo latest('people','people',1,10000)?>
                </div>
                <ul class="timlineWrap col-6 d-block timeline">
                    <?php echo latest('timeline_jo','timeline_jo',4,500)?>
                </ul>
            </div>

            <div class="choi col-12 col-md-6 row align-items-center my-5 py-5">
                <div class="imgWrap col-6 position-relative d-flex justify-content-center align-items-center">
                    <?php echo latest('people2','people2',1,10000)?>
                </div>
                <ul class="timlineWrap col-6 timeline">
                    <?php echo latest('timeline_choi','timeline_choi',4,500)?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--오시는길-->
<div id="way">
    <div class="d-flex">
        <div class="mapWrap">
            <!-- <img src="/joy/theme/basic/custom/img/aboutMap.JPG" alt=""> -->
        </div>
        <a href="https://map.kakao.com/link/to/내셔널스포츠,37.8078663,127.079215">T맵 바로가기</a>
    </div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');