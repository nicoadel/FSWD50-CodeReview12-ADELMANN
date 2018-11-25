<?php
get_header();
?>

<div class="wrapper clearfix">  
<div  class="main_column">
  
<?php

while (have_posts()){ 
  the_post();?>
  <div class="col-lg-4 col-md-6 col-sm-6 portfolio-item">
          <div class="card h-100 card_travel">
            <a  href="<?php the_permalink(); ?>"><img class="card-img-top imgcard" src=<?php the_post_thumbnail(); ?>  </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h4>
              <p class="card-text"><?php the_content(); ?></p>
            </div>
          </div>
        </div>
<?php } ?>
</div>
  



  <div  class="secondary_column">
          <?php  dynamic_sidebar('sidebar1') ?>
    </div>  
</div>
	<?php
get_footer();

?>
