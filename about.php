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
    <div class="hjinner mx-0">
        <div class="national mb-5 pb-5">
            <p class="mb-sm-5 pb-sm-5">위치안내</p>
        </div>
        <div class="mapmap"> 
            <div class="adressbox row align-items-center">
                <div class="adMaker col-12 col-lg-6 position-relative">
                    <a href="https://map.kakao.com/link/to/내셔널스포츠,37.8078663,127.079215" class="">
                        <img src="/joy/theme/basic/custom/img/maker.png" alt="">
                        <p class="navi px-3 position-absolute">kakao Navi</p>
                    </a>
                </div>
                <div class="adress col-12 col-lg-6 mt-3 mt-lg-0">
                    <div class="row justify-content-around my-3">
                        <p class="adleft text-left col-3 d-none d-lg-flex">주소</p>
                        <p class="text-center text-lg-left col-9">경기도 양주시 고읍동 195번지</p>
                    </div>
                    <div class="row justify-content-around my-3">
                        <p class="adleft text-left col-3 d-none d-lg-flex">전화번호</p>
                        <p class="text-center text-lg-left col-9">010-7563-2519</p>
                    </div>
                    <!-- <div class="row justify-content-around my-3">
                        <p class="adleft text-left col-3 d-none d-lg-flex">대중교통</p>
                        <p class="text-center text-lg-left col-9">지하철 2, 4, 5호선 동대문역사문화공원역<br/>
                            2, 4호선 5번 출구, 5호선 6번 출구</p>
                    </div> -->
                </div>
            </div>
            
        </div>
    </div>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');