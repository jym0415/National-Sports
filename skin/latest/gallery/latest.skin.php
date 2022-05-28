<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);

$thumb_width = 450;
$thumb_height = 250;
?>
<!-- 갤러리 스와이퍼 #gallery -->
<div class="hjinner m-auto py-5">
    <div class="py-5 my-md-5 mb-5">
        <div class="dailySub my-md-5 mb-5 position-relative">
            <p class="text-left py-5"><?php echo $bo_subject?></p>
            <p class="gallery position-absolute my-5">GALLERY</p>
        </div>
    
        <div class="dailyBWrap d-flex align-items-center my-md-5 py-5">
            <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 81.3 83.3" style="enable-background:new 0 0 81.3 83.3;" xml:space="preserve" class="minjiBT-prev">
                <style type="text/css">
                    .st0{fill:#F1F1F1;}
                    .st1{fill:#CCCCCC;}
                </style>
                <g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M0,62.9l0-42.5L19.4,0l42.5,0l19.4,20.4v42.5L61.9,83.3H19.4L0,62.9z M76.3,60.9V22.5L59.8,5H21.5
                                        L4.9,22.5v38.3l16.5,17.5h38.4L76.3,60.9z"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <rect x="32.1" y="40.3" class="st1" width="49.2" height="5"/>
                    </g>
                    <g>
                        
                            <rect x="24.3" y="31.3" transform="matrix(0.6629 -0.7487 0.7487 0.6629 -12.7716 39.2625)" class="st1" width="25.8" height="5"/>
                    </g>
                    <g>
                        
                            <rect x="34.7" y="36.6" transform="matrix(0.7487 -0.6629 0.6629 0.7487 -23.4527 37.1082)" class="st1" width="5" height="25.8"/>
                    </g>
                </g>
            </svg> -->

            <div class="swiper-container swiper <?php echo $bo_table; ?>">
                <div class="swiper-wrapper">
                    <?php
                    for ($i=0; $i<count($list); $i++) {
                    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
                    if($thumb['src']) {
                        $img = $thumb['src'];
                    } else {
                        $img = $latest_skin_url.'/img/noimg.png';
                        $thumb['alt'] = '등록된 이미지가 없습니다.';
                    }
                    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="img-fluid">';
                    ?>

                    <div class="swiper-slide minjislide">            
                        <?php echo $img_content; ?>        
                    </div>

                    <?php }  ?>
                </div>
            </div>
            <!-- <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 81.3 83.3" style="enable-background:new 0 0 81.3 83.3;" xml:space="preserve" class="minjiBT-next">
                <style type="text/css">
                    .st0{fill:#F1F1F1;}
                    .st1{fill:#CCCCCC;}
                </style>
                <g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <path class="st0" d="M61.9,83.3H19.4L0,62.9V20.4L19.4,0h42.5l19.4,20.4v42.5L61.9,83.3z M21.5,78.3h38.4l16.5-17.5V22.5
                                        L59.8,5H21.5L5,22.5v38.4L21.5,78.3z"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <rect y="40.3" class="st1" width="49.2" height="5"/>
                    </g>
                    <g>
                        
                        <rect x="41.6" y="20.9" transform="matrix(0.7487 -0.6629 0.6629 0.7487 -11.3374 37.7206)" class="st1" width="5" height="25.8"/>
                    </g>
                    <g>
                        <rect x="31.2" y="47" transform="matrix(0.6629 -0.7487 0.7487 0.6629 -22.1896 49.6852)" class="st1" width="25.8" height="5"/>
                    </g>
                </g>
            </svg> -->
        </div>
    </div>
</div>
        