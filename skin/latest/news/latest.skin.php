<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="mt-5 pt-5">
    <div class="textWrap position-relative">
        <a href="<?php echo get_pretty_url($bo_table); ?>"><p class="subject"><?php echo $bo_subject ?></p></a>
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
                    <span class="sound_only"><?php echo $bo_subject ?></span>
                    <a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']); ?>">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 83.3 83.3" style="enable-background:new 0 0 83.3 83.3;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:#9E9E9E;}
                        </style>
                        <g>
                            <g>
                                <g>
                                    <polygon class="st0" points="54.6,50.2 54.2,33.1 65.9,41.3 			"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <rect x="2.5" y="39.2" class="st0" width="57.5" height="5"/>
                                </g>
                            </g>
                            <g>
                                <path class="st0" d="M58.9,83.3H24.4L0,58.9V24.4L24.4,0h34.5l24.4,24.4v34.5L58.9,83.3z M26.5,78.3h30.4l21.5-21.5V26.5L56.8,5
                                    H26.5L5,26.5v30.4L26.5,78.3z"/>
                            </g>
                        </g>
                        </svg>
                    </a>
                </div>
            </div>
        <?php }  ?>
    </div>
</div>

