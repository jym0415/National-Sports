<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 350;
$thumb_height = 120;
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>
<!--  -->

   

        <?php
        for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

        if($thumb['src']) {
            $img = $thumb['ori'];
        } else {
            $img = $latest_skin_url.'/img/noimg.png';
            $thumb['alt'] = '등록된 이미지가 없습니다.';
        }
        //$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
        $img_content = $img;
        ?>  
        <div class="swiperBox">
                <div class="position-relative swiper-container swiper <?php echo $bo_table; ?>">
                    <div class="position-absolute bg"></div>
                    <div class="swiper-wrapper" style="cursor: pointer;">            
                        <img  src="<?php echo $list[$i][file][0][path].'/'.$list[$i][file][0][file]; ?>" class="swiper-slide img-fluid">
                        <img src="<?php echo $list[$i][file][1][path].'/'.$list[$i][file][1][file]; ?>" class="swiper-slide img-fluid">
                        <img src="<?php echo $list[$i][file][2][path].'/'.$list[$i][file][2][file]; ?>" class="swiper-slide img-fluid">
                    </div>
                    <div class="sw_text position-absolute" data-aos="fade-up"  data-aos-once="true" data-aos-easing="easeOutElastic"  data-aos-duration="1000">
                        <div class="sw_sub"><?php echo $list[$i]['wr_subject'] ;?></div>     
                        <div class="sw_con pt-lg-5"><?php echo $list[$i]['wr_content'] ;?></div>     
                    </div>
                    <!-- 페이징 -->
                    <div class="swiper-pagination main-pagination"></div>
                </div>
            </div>
        <?php }  ?>
        <div class="button">

            <?php echo $bo_1 ?>
        </div>

    

    
    <!-- 좌우버튼 활성화-->
    <!-- {
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    } -->
    

