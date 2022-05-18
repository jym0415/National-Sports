<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가




?>

    </div>
   
</div>

</div>
<!-- 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">
    <div class="hjinner m-auto">
        <div class="ft_wr d-block d-md-flex justify-content-between align-items-center">
            <div class="leftWrap">
                <div id="ft_link" class="ft_cnt text-center text-md-left d-block d-md-flex pt-3 pb-5">
                    <a href="<?php echo get_pretty_url('content', 'privacy'); ?>" class="mr-md-4">개인정보취급방침</a>
                    <a href="<?php echo get_pretty_url('content', 'provision'); ?>" class="mr-md-4">서비스이용약관</a>
                    <a href="<?php echo get_pretty_url('content', 'company'); ?>" class="mr-md-4">회사소개</a>
                </div>
                <div class="ft_company pb-5">
                    <?php echo latest ('company','companyInfo',1,100)?>
                </div>
                <div class="snsWrap d-flex justify-content-center justify-content-md-start">
                    <a href="https://www.youtube.com/channel/UCHWMRiygHQuqAsG7kin_Y4Q" target="_blank" class="my-auto"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.instagram.com/joy_academy_/" target="_blank" class="my-auto"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>

            <div id="logoWrap" class="">
                <?php echo latest('logo', 'logo', 1, 100)?>
            </div>
        </div>
    </div>
        
    
    <button type="button" id="top_btn">
    	<i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
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