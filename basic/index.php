<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>
<link rel="stylesheet" href="<?php echo G5_URL;?>/theme/basic/css/customised_bootstrap.css">

<h2 class="sound_only">최신글</h2>

<!-- Top Advertisements -->
<a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company">
    <div class="jumbotron text-center"
    style="background-image: url(<?php echo G5_URL;?>/theme/basic/adv/index_1_long.png); background-size: cover;">
    </div>
</a>
<!-- End - Top Advertisements -->

<div class="latest_top_wr">
    <div style="float:left;" class="lt_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('basic', 'job', 4, 23);
    ?>
    </div>

    <div style="float:left;" class="lt_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('basic', 'community', 4, 23);
    ?>
    </div>

    <div style="float:left;" class="lt_wr">
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('basic', 'secondhand', 4, 23);
    ?>
    </div>
</div>

<div class="latest_wr">
    <!-- Middle Advertisements -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company">
                    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_mid1.png" class="img-responsive">
                </a>
            </div>
            <div class="col-md-4">
                <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company">
                    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_mid2.png" class="img-responsive">
                </a>
            </div>
            <div class="col-md-4">
                <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company">
                    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_mid3.png" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
    <!-- End - Middle Advertisements -->
</div>

<div class="latest_wr">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block', 'rent', 4, 23);		// 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr">
    <!-- 사진 최신글2 { -->
    <?php
    // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
    // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
    // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
    echo latest('pic_block', 'lifeinfo', 4, 23);        // 최소설치시 자동생성되는 갤러리게시판
    ?>
    <!-- } 사진 최신글2 끝 -->
</div>

<div class="latest_wr">
    <!-- Bottom Advertisements -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company">
                    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_btm1.png" class="img-responsive">
                </a>
            </div>
            <div class="col-md-4">
                <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company">
                    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_btm2.png" class="img-responsive">
                </a>
            </div>
            <div class="col-md-4">
                <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company">
                    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_btm3.png" class="img-responsive">
                </a>
            </div>
        </div>
    </div>
    <!-- End - Bottom Advertisements -->    
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');