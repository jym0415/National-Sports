<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="hjinner m-auto">
    <div>
    <?php
    for ($i=0; $i<$list_count; $i++) {?>
        <div class="row mx-0 <?php if ($i === 1) echo 'flex-row-reverse'; ?>">
            <div class="col-lg-6  px-3 px-lg-0">
                <iframe width="100%" src="https://www.youtube.com/embed/<?php echo $list[$i]['subject']; ?>" 
                    title="YouTube video player" frameborder="0" 
                    allow="autoplay; encrypted-media;" 
                    allowfullscreen class="youtube">
                </iframe>
            </div>
            <div class="col-lg-6 text-right px-3 px-lg-0">
                <?php echo $list[$i]['wr_content'];?>
            </div>
        </div>
    <?php }  ?>
    <a href="https://www.youtube.com/channel/UCHWMRiygHQuqAsG7kin_Y4Q"><span class="sound_only"><?php echo $bo_subject ?></span>더보기</a>

    </div>
</div>

