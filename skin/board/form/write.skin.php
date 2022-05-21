<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<section id="bo_w">
    <h2 class="sound_only"><?php echo $g5['title'] ?></h2>

    <!-- 게시물 작성/수정 시작 { -->
    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
   <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">


    <?php if ($is_category) { ?>
    <div class="bo_w_select write_div text-center py-2">

        <!-- 여분필드출력 교육과정-->
        <?php echo $board['bo_1_subj'] ?> 
	    <select name="wr_1" id="wr_1" class="mr-5">
        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
            <?php
            $item_list = explode(',', $board['bo_1']);
            for ($i=0; $i<count($item_list); $i++) {
                $option_item = trim($item_list[$i]);
            ?>
            <option value="<?php echo $option_item ?>"<?php echo ($write['wr_1'] == $option_item) ? " selected" : "";?>><?php echo $option_item ?></option>
            <?php } ?>
        </select>

        <!-- 여분필드출력 나이-->
        <?php echo $board['bo_2_subj'] ?> 
	    <select name="wr_2" id="wr_2" class="mr-5">
        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
            <?php
            $item_list = explode(',', $board['bo_2']);
            for ($i=0; $i<count($item_list); $i++) {
                $option_item = trim($item_list[$i]);
            ?>
            <option value="<?php echo $option_item ?>"<?php echo ($write['wr_2'] == $option_item) ? " selected" : "";?>><?php echo $option_item ?></option>
            <?php } ?>
        </select>        
        <!-- 여분필드출력 유입경로-->
        <?php echo $board['bo_3_subj'] ?> 
	    <select name="wr_3" id="wr_3" class="mr-5">
        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
            <?php
            $item_list = explode(',', $board['bo_3']);
            for ($i=0; $i<count($item_list); $i++) {
                $option_item = trim($item_list[$i]);
            ?>
            <option value="<?php echo $option_item ?>"<?php echo ($write['wr_3'] == $option_item) ? " selected" : "";?>><?php echo $option_item ?></option>
            <?php } ?>
        </select>    
    </div>

    <?php } ?>

    <div class="bo_w_info write_div row flex-column align-items-center">
	    <?php if ($is_name) { ?>
	        <label for="wr_name" class="sound_only">이름<strong>필수</strong></label>
	        <input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input pt-3 half_input required col-lg-4" placeholder="이름">
	    <?php } ?>
	
	    <?php if ($is_password) { ?>
	        <label for="wr_password" class="sound_only">비밀번호<strong>필수</strong></label>
	        <input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input pt-3 half_input col-lg-4 <?php echo $password_required ?>" placeholder="비밀번호">
	    <?php } ?>	

        <?php if ($is_email) { ?>
			<label for="wr_email" class="sound_only col-lg-4">이메일</label>
			<input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input half_input pt-3 email col-lg-4" placeholder="이메일">
	    <?php } ?>
	</div>
	



    <h5 class="text-center mt-5 mb-2">문의사항<sub class="text-danger">*문의사항이 있을 경우에만 작성해 주시면 됩니다.</sub></h5>
    <div class="write_div w-50 m-auto">
        <label for="wr_content" class="sound_only">내용<strong>필수</strong></label>
        <div class="wr_content <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <p id="char_count_desc">이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</p>
            <?php } ?>
            <?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
            <?php if($write_min || $write_max) { ?>
            <!-- 최소/최대 글자 수 사용 시 -->
            <div id="char_count_wrap"><span id="char_count"></span>글자</div>
            <?php } ?>
        </div>
        
    </div>





    <!-- <?php if ($is_use_captcha) { //자동등록방지  ?>
    <div class="write_div">
        <?php echo $captcha_html ?>
    </div>
    -->
    <?php } ?>

    <div class="btn_confirm write_div">
        <a href="<?php echo get_pretty_url($bo_table); ?>" class="btn_cancel btn">취소</a>
        <button type="submit" id="btn_submit" accesskey="s" class="btn_submit btn">작성완료</button>
    </div>
    </form> 

    <script>
    <?php if($write_min || $write_max) { ?>
    // 글자수 제한
    var char_min = parseInt(<?php echo $write_min; ?>); // 최소
    var char_max = parseInt(<?php echo $write_max; ?>); // 최대
    check_byte("wr_content", "char_count");

    $(function() {
        $("#wr_content").on("keyup", function() {
            check_byte("wr_content", "char_count");
        });
    });

    <?php } ?> 
    function html_auto_br(obj)
    {
        if (obj.checked) {
            result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
            if (result)
                obj.value = "html2";
            else
                obj.value = "html1";
        }
        else
            obj.value = "";
    }

    function fwrite_submit(f)
    {
        <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

        var subject = "";
        var content = "";
        $.ajax({
            url: g5_bbs_url+"/ajax.filter.php",
            type: "POST",
            data: {
                "subject": f.wr_subject.value,
                "content": f.wr_content.value
            },
            dataType: "json",
            async: false,
            cache: false,
            success: function(data, textStatus) {
                subject = data.subject;
                content = data.content;
            }
        });

        if (subject) {
            alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
            f.wr_subject.focus();
            return false;
        }

        if (content) {
            alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
            if (typeof(ed_wr_content) != "undefined")
                ed_wr_content.returnFalse();
            else
                f.wr_content.focus();
            return false;
        }

        if (document.getElementById("char_count")) {
            if (char_min > 0 || char_max > 0) {
                var cnt = parseInt(check_byte("wr_content", "char_count"));
                if (char_min > 0 && char_min > cnt) {
                    alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                    return false;
                }
                else if (char_max > 0 && char_max < cnt) {
                    alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                    return false;
                }
            }
        }

        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

        document.getElementById("btn_submit").disabled = "disabled";

        return true;
    }
    </script>
</section>
<!-- } 게시물 작성/수정 끝 -->