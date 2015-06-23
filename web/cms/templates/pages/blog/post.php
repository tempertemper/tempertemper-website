<?php
  perch_blog_check_preview();
  perch_layout('blog/head');
  perch_layout('blog/post_header');
?>

<main role="main" class="entry-content">

  <?php perch_blog_post(perch_get('s')); ?>

</main>

<div role="complementary">

  <?php perch_layout('blog/post_details'); ?>
  <section>
    <?php perch_content('Subscribe'); ?>
  </section>

</div>

<?php
  perch_layout('footer');
  perch_layout('end');
?>