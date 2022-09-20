
	<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<?php while (have_rows("page_slider")):
        the_row(); ?>
				
				<div class="carousel-item <?php if (get_row_index() == 1) {
        echo "active";
    } ?>"> 
				<?php
    $image = get_sub_field("image");
    $image_url = $image["sizes"]["large"];
    $image_alt = $image["caption"];
    ?>
				<img src="<?php echo $image_url; ?>" class="demo-carousel" alt="<?php echo $image_alt; ?>">
					<div class="container">
						<div class="carousel-caption">
							<h1><?php the_sub_field("title"); ?></h1>
							<p><?php the_sub_field("text"); ?></p>
							<p><a class="btn btn-lg btn-primary" href="<?php the_sub_field(
           "link"
       ); ?>">Get In Touch</a></p>
						</div>
					</div>
				</div>
				<?php
    endwhile; ?>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="visually-hidden">Previous</span> </button>
			<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="visually-hidden">Next</span> </button>
	</div>
	
