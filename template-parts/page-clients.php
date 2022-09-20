<div class="container-fluid">
       <section class="customer-logos slider">
       <?php while( have_rows('logo-carousel') ): the_row(); ?>
          <div class="slide <?php if (get_row_index() == 1) echo 'active';?>">
          <?php 
				    $image = get_sub_field('logo');
					 $image_url = $image['sizes']['large'];
					 $image_alt = $image['caption'];
				?>
            <img src="<?php echo $image_url; ?>">
         </div> 
         <?php endwhile; ?>
       </section>
    </div>