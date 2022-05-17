<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 350;
$thumb_height = 120;
?>




<div class="swiper-container swiper_<?php echo $bo_table; ?>">
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
        //$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
        $img_content = $img;
        ?>
<style>
</style>

        <div class="swiper-slide" onclick="location.href='<?php echo $list[$i]['href'] ?>';" style="cursor: pointer;">
            <div class="sw_img" style="background-image: url('<?php echo $img_content; ?>');">
            </div>
            <div class="sw_tit">
                <?php echo $list[$i]['subject'] ?>
            </div>
            <div class="sw_date">
                <?php echo $list[$i]['name'] ?>　
                
                <?php if($list[$i]['ca_name']) { ?>
                    <?php echo $list[$i]['ca_name'] ?>
                <?php } ?>
                
                <?php echo $list[$i]['datetime'] ?>
                
                <?php if($list[$i]['wr_comment']) { ?>
                    <?php echo $list[$i]['wr_comment'] ?>
                <?php } ?>
                
                <?php if ($list[$i]['icon_new']) echo "<span style=\"color:#FF6666\">NEW<span class=\"sound_only\">새글</span></span>"; ?>
            </div>                                
        </div>

        <?php }  ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
        <div class="swiper-slide">
            <div class="sw_sub">
                등록된 게시물이 없습니다.
            </div>
        </div>
        <?php }  ?>


    </div>
    <!-- 페이징 -->
    <div class="swiper-pagination swiper-pagination1"></div>
    
    <!-- 좌우버튼 활성화시 주석해제 {
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    } -->
    
</div>
