<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨

$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li class="text-left mb-5 event">
            <p class="time mb-3">
                <?php echo $list[$i]['wr_subject']?>
            </p>
            <p class="timeC">
                <?php echo $list[$i]['wr_content']?>
            </p>
        </li>
        
    <?php }  ?>
