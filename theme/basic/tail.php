<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가




?>

    </div>
   
</div>

</div>
<!-- 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft" class="position-relative">
    <div class="adult position-absolute d-none d-md-flex">
        <img src="/joy/theme/basic/custom/img/adult.png" alt="">
    </div>
    <div class="hjinner m-auto pt-5">
        <div class="ft_wr d-md-flex justify-content-between align-items-center pt-5">
            <div class="leftWrap">
                <div class="tel d-md-none text-center pt-5">
                    <a href="tel:01075632519">010-7563-2519</a>
                </div>
                <div id="ft_link" class="ft_cnt text-center text-md-left d-block d-md-flex pt-5 pb-5">
                    <a href="<?php echo get_pretty_url('content', 'privacy'); ?>" class="px-2 d-block">개인정보취급방침</a>
                    <a href="<?php echo get_pretty_url('content', 'provision'); ?>" class="px-2">서비스이용약관</a>
                    <a href="<?php echo get_pretty_url('content', 'company'); ?>" class="px-2">회사소개</a>
                </div>
            </div>
            <div id="logoWrap" class="pt-5 pt-md-0 ">
                <?php echo latest('logo', 'logo', 1, 100)?>
            </div>
        </div>
    </div>
        
    <div class="fix position-fixed">
        <div class="hover position-relative">
            <ul id ="btnWrap" class="position-absolute">
                <li class="apply mt-2">
                    <a href="https://jmu0760.cafe24.com/joy/bbs/write.php?bo_table=form" class="sm_btn">
                        <img src="/joy/theme/basic/custom/img/form.png" alt=""><span class="sound_only">수강신청</span>
                    </a>
                </li>
                <li class="kakao mt-2">
                    <a href="#none" class="sm_btn">
                        <img src="/joy/theme/basic/custom/img/talk.png" alt=""><span class="sound_only">카카오톡</span>
                    </a>
                </li>
                <li class="insta mt-2">
                    <a href="https://www.instagram.com/joy_academy_/" class="sm_btn">
                        <img src="/joy/theme/basic/custom/img/insta.png" alt=""><span class="sound_only">인스타그램</span>
                    </a>
                </li>
            </ul>
            <a href="#none" id="more_btn" class="d-block position-relative mt-2">
                <img src="/joy/theme/basic/custom/img/more.png" alt=""><span class="sound_only">더보기</span>
            </a>
        </div>
        
        <button type="button" id="top_btn">
            <img src="/joy/theme/basic/custom/img/arrow.png" alt=""><span class="sound_only">상단으로</span>
        </button>
    </div>
    



    
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->
<script src="<?php echo G5_THEME_URL?>/custom/js/customSwiper8.1.4.js?ver=<?php echo time(); ?>"></script>


<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");