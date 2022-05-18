<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="textWrap position-relative">
    <p class="subject"><a href="<?php echo get_pretty_url($bo_table); ?>"></a><?php echo $bo_subject ?></p>
    <p class="table position-absolute"><?php echo $bo_table ?></p>
</div>

<div class="row newsWrap d-flex mt-5 mb-5 pb-5">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <div class="box mt-5 col-6 col-md-3 text-center text-md-left position-relative">
            <div class="name mt-md-5 mt-0">
                <a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']); ?>">
                    <?php echo $list[$i]['wr_subject']?>
                </a>
            </div>
            <div class="date mt-5">
                <span class="lt_date"><?php echo $list[$i]['datetime'] ?></span>
            </div>
                
            <div class="nsbtn mt-5">
                <a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']); ?>" class="lt_more">
                    <span class="sound_only"><?php echo $bo_subject ?></span>
                    <img src="/joy/theme/basic/img/btn_gray_NS.png" alt="">
                </a>
            </div>
        </div>
    <?php }  ?>
</div>

