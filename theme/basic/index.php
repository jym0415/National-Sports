<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>
<!--메인슬라이드-->
<h2 class="sound_only">최신글</h2>

<div id="mainSlider" class='overflow-hidden'>
    <div class="sliderBox positon-relative">
        <?php echo latest('swiper_card2','mainSlider',1,10000)?>
    </div>
</div>
<!--네서녈소식  bo_table : NEWS-->
<div id="news" class="position-relative">
    <div class="kids position-absolute">
        <img src="/joy/theme/basic/img/kids.png" alt=""
            data-aos="fade-left"
            data-aos-duration="1500">
    </div>
    <div class="hjinner m-auto">
        <?php echo latest('news','NEWS',4,500)?>
    </div>
</div>

<!--네셔널일상 bo_table : daily -->
<div id="gallery">
    <?php echo latest('gallery','gallery',4,500)?>
</div>


<!--유튜브연동 bo_table : yuoutube-->
<div id="youtube">
    <?php echo latest('youtube','yuoutube',2,500)?>
</div>

<!-- 오시는길 -->
<div id="way" class="pb-0 pb-md-5">
    <div class="hjinner m-auto pb-3 pb-md-5">
        <div class="mapWrap row mx-0">
            <div id="map" style="width:100%;height:400px;"class="mapleft col-12 col-md-6">
            </div>
            <div class="mapText ft_company col-12 col-md-6 d-flex justify-content-center align-items-center pt-3 pt-md-0">
                <?php echo latest ('company','companyInfo',1,100)?>
            </div>
        </div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=76dc363e0cd56e52668246ea9bf5bbcc"></script>
                <!-- appkey=카카오에서 받은 key값 -->
                <script>
                var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                    mapOption = { 
                        center: new kakao.maps.LatLng(37.8078663, 127.079215), // 지도의 중심좌표(위도,경도)
                        level: 3 // 지도의 확대 레벨
                    };
                var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
                var imageSrc = '/joy/theme/basic/img/maker.png', // 마커이미지의 주소입니다    
                    imageSize = new kakao.maps.Size(64, 69), // 마커이미지의 크기입니다
                    imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

                // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
                var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
                    markerPosition = new kakao.maps.LatLng(37.8078663, 127.079215); // 마커가 표시될 위치입니다(위도,경도)

                // 마커를 생성합니다
                var marker = new kakao.maps.Marker({
                    position: markerPosition, 
                    image: markerImage // 마커이미지 설정 
                });
                // 마커가 지도 위에 표시되도록 설정합니다
                marker.setMap(map);  
            </script>
    </div>
    
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');