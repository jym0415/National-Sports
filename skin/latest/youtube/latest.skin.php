<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="youWrap hjinner m-auto mt-5 pt-5 position-relative">
    <div class="pt-5 mt-5">
    <?php
    for ($i=0; $i<$list_count; $i++) {?>
        <div class="row mx-0 mb-5 pb-5 <?php if ($i === 1) echo 'flex-row-reverse'; ?> justify-content-center align-items-center">
            <div class="noline col-lg-6  px-3 px-lg-0">
                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/<?php echo $list[$i]['subject']; ?>" 
                    title="YouTube video player" frameborder="0" 
                    allow="autoplay; encrypted-media;" 
                    allowfullscreen class="youtube">
                </iframe>
            </div>
            <div class="youT col-lg-6 px-3 px-lg-0 text-center d-block d-flex flex-column justify-content-center align-items-center"
            <?php if ($i === 1) echo 'data-aos="fade-left"'; ?>
            data-aos="fade-right"
            data-aos-duration="1500"
            >
                <p class="ycontent pt-5 mt-5 pt-md-0"><?php echo $list[$i]['wr_content'];?></p>
                <div class="linkBtn d-block d-md-flex">
                    <div class="btnWrap mt-4 mb-4 mb-md-0 mx-2">
                        <a href="https://jmu0760.cafe24.com/joy/bbs/board.php?bo_table=schedule" class="youBtn px-5">
                        <span class="sound_only"><?php echo $bo_subject ?></span>
                        시간표 보러가기
                        </a>
                    </div>
                    <div class="btnWrap mt-4 mb-4 mb-md-0 mx-2">
                        <a href="<?php echo $list[$i]['wr_link1']?>" class="youBtn px-5">
                        <span class="sound_only"><?php echo $bo_subject ?></span>
                        유튜브 보러가기
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>
    

    </div>
</div>
