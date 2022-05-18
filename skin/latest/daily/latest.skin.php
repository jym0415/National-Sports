<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_width = 350;
$thumb_height = 120;
?>
<!--  -->
<div class="hjinner m-auto">
    <div class="pt-5 pb-5">
        <div class="dailySub pt-5">
            <p><?php echo $bo_subject?></p>
        </div>
        <div class="dailyBWrap">
            <div class="swiper-container swiper <?php echo $bo_table; ?>">
                <div class="swiper-wrapper">

                    <?php
                    for ($i=0; $i<count($list); $i++) {
                    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

                    if($thumb['src']) {
                        $img = $thumb['ori'];
                    } else {
                        $img = $latest_skin_url.'/img/noimg.png';
                        $thumb['alt'] = '등록된 이미지가 없습니다.';
                    }
                    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="w-100">';
                    
                    ?>

                    <div class="swiper-slide">            
                        <?php echo $img_content; ?>        
                    </div>

                    <?php }  ?>

                </div>
                <!-- 좌우버튼 활성화-->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>
        </div>
    </div>
</div>

