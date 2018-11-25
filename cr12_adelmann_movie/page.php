<?php
get_header();
while (have_posts()){
	the_post(); ?>
	<div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php the_title(); ?></a>
              </h4>
              <p class="card-text"><?php the_content(); ?></p>
            </div>
          </div>
        </div>
<?php } 
get_footer();

?>