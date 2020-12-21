<!-- カスタムページテンプレートの名前 -->
<?php
// Template Name:ランディングページ
 ?>

 <?php get_header(); ?>
     <main class="bg-light">
       <div class="container">
         <div class="row py-3">
           <!-- メインコンテンツ -->
           <div class="col-12 mx-auto">
             <?php
               if (have_posts()): while (have_posts()):
                 the_post();
             ?>
               <div class="bg-white pb-5 mb-5 text-center">
               	<!-- サムネイル -->
               	<div class="py-3">
               	  <?php if (has_post_thumbnail()) : ?>
               	    <?php the_post_thumbnail('',array('class' => 'img-fluid')); ?>
               	  <?php else: ?>
               	    <img class="img-fluid" src="https://picsum.photos/800/400">
               	  <?php endif; ?>
               	</div>
                 <!-- 記事タイトル  -->
                 <h1 class="h2 px-3 pb-3 font-weight-bolder"><?php the_title(); ?></h1>
                 <!-- 本文 -->
                 <div class="text-left">
                   <?php the_content(); ?>
                 </div>
                 <!-- ボタン -->
               </div>
           <?php endwhile; else: ?>
             <p>記事がありません</p>
           <?php endif; ?>
           </div>
         </div>
       </div>
       <?php get_footer(); ?>