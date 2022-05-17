<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd" class='border-bottom position-relative py-3'>
    <h1 id="hd_h1">

    </h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>
     <?php if ($is_member) {  ?>
            <div id="tnb" class="position-absolute text-right">
                <div class="inner">
                    <ul class="hd_login">       
                        <?php if ($is_admin) {  ?>
                            <li class="tnb_admin"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                        <?php }  ?>                            
                    </ul>                    
                </div>
            </div>
    <?php }  ?>
    <div id="hd_wrapper" class='row justify-content-between align-items-center m-auto py-2 hjinner '>
        <div class="logoBox d-flex align-items-center col-3">                    
            <h1 id="logo" class="col-9">
            <?php echo latest('logo', 'logo', 1, 100)?>
            </h1>
            <div class="snsBox d-flex col-offset-3">
                <a href="https://www.youtube.com/channel/UCHWMRiygHQuqAsG7kin_Y4Q" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.instagram.com/joy_academy_/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <nav id="gnb" class="col-9">
            <div class="gnb_wrap">
                <ul id="gnb_1dul" class='d-lg-flex align-items-center justify-content-around'>
                
                    <?php
                    $menu_datas = get_menu_db(0, true);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                    ?>

                    <li class="gnb_1dli <?php echo $add_class; ?> font2em position-relative" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" 
                        class="gnb_1da ">
                        <?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){

                            if( empty($row2) ) continue; 

                            if($k == 0)
                                echo '<ul class="gnb_2dul_box position-absolute">'.PHP_EOL;
                        ?>
                            <li class="gnb_2dli">
                                <a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da">
                                <?php echo $row2['me_name'] ?></a>
                            </li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <!-- <div id="gnb_all">
                    <h2>전체메뉴</h2>
                    <ul class="gnb_al_ul">
                        <?php
                        
                        $i = 0;
                        foreach( $menu_datas as $row ){
                        ?>
                        <li class="gnb_al_li">
                            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                            <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){
                                if($k == 0)
                                    echo '<ul>'.PHP_EOL;
                            ?>
                                <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                            <?php
                            $k++;
                            }   //end foreach $row2

                            if($k > 0)
                                echo '</ul>'.PHP_EOL;
                            ?>
                        </li>
                        <?php
                        $i++;
                        }   //end foreach $row

                        if ($i == 0) {  ?>
                            <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                        <?php } ?>
                    </ul>
                    <button type="button" class="gnb_close_btn"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <div id="gnb_all_bg"></div> -->
            </div>
        </nav>       
    </div>
    

    <script>
    
    $(function(){
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").show();
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
        });
    });

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
    <?php
        if(defined('_INDEX_')) {
    ?>
        <div id="wrapper" >
    <?php } else { ?>
        <div id="wrapper" class="hjinner m-auto">
    <?php } ?>
    <div id="container_wr">
   
    <div id="container">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }