<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<div class="mt-5 py-5">
    <div class="textWrap position-relative my-5 py-5">
        <a href="<?php echo get_pretty_url($bo_table); ?>"><p class="subject"><?php echo $bo_subject ?></p></a>
        <p class="table position-absolute my-5 py-5"><?php echo $bo_table ?></p>
    </div>

    <div class="row newsWrap mb-5 py-5 mx-0">
        <?php for ($i=0; $i<$list_count; $i++) {  ?>
            <div class="box mt-5 col-md-6 col-lg-3 text-left text-md-center text-lg-left position-relative d-flex d-md-block align-items-center justify-content-between px-4 px-md-5">
                <div class="d-flex flex-column">
                    <div class="name mt-5">
                        <a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']); ?>">
                            <?php echo $list[$i]['wr_subject']?>
                        </a>
                    </div>
                    <div class="date mt-5 d-flex flex-column align-items-start align-items-md-center align-items-lg-start">
                        <p class="content text-truncate mb-5"><?php echo $list[$i]['wr_content']?></p>
                    </div>
                </div>
                <div class="buttonWrap d-flex justify-content-between align-items-center mb-5">
                    <div class="rightDate d-none d-md-flex">
                        <span class="lt_date"><?php echo $list[$i]['datetime'] ?></span>
                    </div>
                    <div class="nsbtn">
                        <span class="sound_only"><?php echo $bo_subject ?></span>
                        <a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']); ?>">
                            <!-- <img src="/joy/theme/basic/img/btn_link.png" alt=""> -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 81.3 83.3" style="enable-background:new 0 0 81.3 83.3;" xml:space="preserve">
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
                        </svg>
                        </a>
                    </div>
                </div>
                
            </div>
        <?php }  ?>
    </div>
</div>


