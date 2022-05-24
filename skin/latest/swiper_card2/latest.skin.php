<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 350;
$thumb_height = 120;
$list_count = (is_array($list) && $list) ? count($list) : 0;

?>
<!--  -->

   
<?php
        for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

        if($thumb['src']) {
            $img = $thumb['ori'];
        } else {
            $img = $latest_skin_url.'/img/noimg.png';
            $thumb['alt'] = '등록된 이미지가 없습니다.';
        }
        //$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
        $img_content = $img;
        ?>  
        
        <div class="swiperBox">
                <div class="position-relative swiper-container swiper <?php echo $bo_table; ?>">
                    <div class="position-absolute bg"></div>
                    <div class="swiper-wrapper" >
                        
                   
           <div class="swiper-slide" style='background-image:url(<?php echo $list[$i][file][0][path].'/'.$list[$i][file][0][file]; ?>)'></div>
           <div class="swiper-slide" style='background-image:url(<?php echo $list[$i][file][1][path].'/'.$list[$i][file][1][file]; ?>)'></div>
           <div class="swiper-slide" style='background-image:url(<?php echo $list[$i][file][2][path].'/'.$list[$i][file][2][file]; ?>)'></div>
                       
                    </div>
                    <div class="sw_text position-absolute d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="sw_sub"  data-aos="fade-up"  data-aos-once="true" data-aos-easing="easeOutElastic"  data-aos-duration="1000"><?php echo $list[$i]['wr_subject'] ;?></div>     
                        <div class="sw_con pt-lg-5"  data-aos="fade-up"  data-aos-once="true" data-aos-easing="easeOutElastic"  data-aos-duration="1500"><?php echo $list[$i]['wr_content'] ;?></div>
                        <div class="mainBtn flex-row-reverse d-md-flex pt-5" data-aos="fade-up"  data-aos-once="true" data-aos-easing="easeOutElastic"  data-aos-duration="2000">
                            <div class="pb-2 pb-md-0">
                                <a href="<?php echo $bo_1 ?>" class="py-1 py-lg-3"><?php echo $bo_1_subj ?></a>
                            </div>          
                            <div class="">
                                <a href="<?php echo $bo_2 ?>"class="py-1 py-lg-3"><?php echo $bo_2_subj ?></a>
                            </div>
                        </div>     
                    </div>
                    <!-- 페이징 -->
                    <div class="swiper-pagination main-pagination"></div>
                </div>
            </div>
  <?php } ?>    
  
  
     <style>
         .swiperBox .swiper-slide{             
             background-repeat: no-repeat;
             background-position:center bottom;
             background-size:100% auto;
             height:0; 
             padding-top:75%;
             opacity: 0;
         }
         .swiperBox .swiper-slide.swiper-slide-visible{
             opacity: 1;
         }
         @media( min-width:992px){
            .swiperBox .swiper-slide{
                height:100vh  ;
                max-height:1000px;
                padding:0;
                background-size:100% auto;
               
            }
            
         }
     </style>  

    

    
    <!-- 좌우버튼 활성화-->
    <!-- {
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    } -->
    

