<?php
  perch_layout('head');
  perch_layout('testimonials/header');
?>

<main role="main">

  <?php
    perch_collection('Testimonials', array(
      'template' => 'testimonial.html',
      'filter'   => 'slug',
      'match'    => 'eq',
      'value'    => perch_get('s'),
      'count'    => 1,
    ));
  ?>

  <?php perch_layout('call_to_action'); ?>

</main>

<?php
  perch_layout('footer');
  perch_layout('end');
?>