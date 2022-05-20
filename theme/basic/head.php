<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd" class='position-relative'>
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
                    <ul class="hd_login d-flex justify-content-end">       
                        <?php if ($is_admin) {  ?>
                            <li class="tnb_admin col"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                            <li><a href="<?php echo G5_BBS_URL ?>/logout.php">로그아웃</a></li>
                        <?php }  ?>                            
                    </ul>                    
                </div>
            </div>
    <?php }  ?>
    <div id="hd_wrapper" class='row justify-content-between align-items-start m-auto container-fluid w-100 position-absolute'>
        <div class="logoBox d-flex flex-column-reverse flex-lg-row align-items-center col-4 px-0 mx-2 mx-lg-0">                    
            <h1 id="logo" class="col-9 px-0 py-lg-4">
                <a href="/joy/">
            <?php echo latest('logo', 'logo', 1, 100)?>
                </a>
            </h1>
            <div class="snsBox d-flex col">
                <a href="https://www.youtube.com/channel/UCHWMRiygHQuqAsG7kin_Y4Q" target="_blank" class="my-lg-auto"><i class="fa-brands fa-youtube col text-white"></i></a>
                <a href="https://www.instagram.com/joy_academy_/" target="_blank" class="my-lg-auto"><i class="fa-brands fa-instagram text-white"></i></a>
            </div>
        </div>
        <nav id="gnb" class="col-lg-6 col-1 p-0 my-auto navbar navbar-expand-lg">
            <button type="button" class="navbar-toggler m-auto px-0" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-bars text-white"></i></button>                       
            <div class="gnb_wrap collapse navbar-collapse row mx-0 " id="navbarNavDropdown">
                
                <ul id="gnb_1dul" class='d-lg-flex justify-content-between col-lg-12 position-absolute'>
                    <?php
                    $menu_datas = get_menu_db(0, true);
                    // $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                    ?>

                    <li class="gnb_1dli <?php echo $add_class; ?> font2em position-relative nav-item py-lg-4" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" 
                        class="gnb_1da nav-link text-white">
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
            </div>
        </nav>       
    </div>
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