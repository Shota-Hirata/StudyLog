<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <!-- Navigation -->
    <?php get_template_part('includes/nav') ?>

  <?php while (have_posts()): the_post(); ?>
  <!-- Page Header -->
  <?php
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id);
  ?>
  <header class="masthead" style="background-image: url('<?php echo $img[0]; ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php the_title(); ?></h1>
            <span class="meta">Posted by
              <?php the_author(); ?>
              on <?php the_time("Y年n月j日"); ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <? endwhile; ?>
  <!-- Footer -->
    <?php get_template_part('includes/footer') ?>
    <?php get_footer(); ?>
</body>

</html>
