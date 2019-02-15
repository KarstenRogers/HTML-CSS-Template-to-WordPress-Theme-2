<?php
/**
 * File used for homepage two column content module
 * 
 * @package WordPress
 */
?>

<?php $bg_img = dwp_option('d1-img', false, 'url');

$bg_url = '';

if ($bg_img != '') {
  $bg_url = "background-image: url('" . $bg_img . "');";
}

?>

<section class="section-divider textdivider divider3" style="<?php echo $bg_url; ?>">
  <div class="container">
    <?php if (dwp_option('d1-content') != '') {
      echo dwp_option('d1-content');
    }?>
  </div>
</section>    