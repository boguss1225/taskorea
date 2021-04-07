<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
?>
<!-- Top Advertisements -->
<a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company" class="lt owl-carousel-wrap">
    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_1_long.png" class="img-responsive"  style="max-width: 100%; max-height: 100%;">
</a>
<!-- End - Top Advertisements -->
<!-- 메인화면 최신글 시작 -->
<?php	echo latest('theme/basic', 'community', 12, 25);?>

<!-- <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company" class="lt owl-carousel-wrap">
    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_mid1.png" class="img-responsive"  style="max-width: 100%; max-height: 50%;">
</a> -->

<?php	echo latest('theme/basic', 'rent', 12, 25);?>

<a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company" class="lt owl-carousel-wrap">
    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_mid2.png" class="img-responsive"  style="max-width: 100%; max-height: 50%;">
</a>

<?php	echo latest('theme/basic', 'job', 12, 25);?>

<!-- <a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company" class="lt owl-carousel-wrap">
    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_mid3.png" class="img-responsive"  style="max-width: 100%; max-height: 50%;">
</a> -->

<?php	echo latest('theme/basic', 'secondhand', 12, 25);?>

<a href= "<?php echo G5_URL;?>/bbs/content.php?co_id=company" class="lt owl-carousel-wrap">
    <img src="<?php echo G5_URL;?>/theme/basic/adv/index_mid3.png" class="img-responsive"  style="max-width: 100%; max-height: 50%;">
</a>

<?php	echo latest('theme/basic', 'lifeinfo', 12, 25);?>
<!-- 메인화면 최신글 끝 -->

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');

