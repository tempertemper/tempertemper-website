<?php include($_SERVER['DOCUMENT_ROOT'].'/cms/runtime.php'); ?>

<?php perch_layout('start'); ?>
<?php perch_layout('header'); ?>

<div role="main">

  <?php
    perch_content_custom('Primary content', array(
      'template'=>'testimonial.html',
      'paginate'=>'true',
      'count'=>6
    ));
  ?>

</div>

<?php perch_layout('footer'); ?>
<?php perch_layout('end'); ?>