<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="hjinner m-auto">
    <a href="<?php echo $list[$i]['wr_link1']; ?>">
        <div id="map" style="width:500px;height:350px;"></div>
    </a>

    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=76dc363e0cd56e52668246ea9bf5bbcc"></script>
    <script>
    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
        mapOption = { 
            center: new kakao.maps.LatLng(<?php echo $list[$i]['wr_subject']?>), // 지도의 중심좌표
            level: 3 // 지도의 확대 레벨
        };
    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
    var imageSrc = 'https://t1.daumcdn.net/localimg/localimages/07/mapapidoc/marker_red.png', // 마커이미지의 주소입니다    
        imageSize = new kakao.maps.Size(64, 69), // 마커이미지의 크기입니다
        imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

    // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
        markerPosition = new kakao.maps.LatLng(<?php echo $list[$i]['wr_subject']?>); // 마커가 표시될 위치입니다

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition, 
        image: markerImage // 마커이미지 설정 
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);  
    </script>
</div>
