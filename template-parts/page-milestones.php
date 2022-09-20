<section class="milestones">
      <div class="container-fluid" id="numbers">
        <div class="row row-cols-1 row-cols-lg-3 text-center">
        <?php while (have_rows("milestones")):
            the_row(); ?>
          <div class="col rp-flex align-items-start">
            <div class="features-icons">
            <?php
            $image = get_sub_field("icons");
            $image_url = $image["sizes"]["large"];
            $image_alt = $image["caption"];
            ?>
              <img src="<?php echo $image_url; ?>">
            </div>
            <div>
              <h1><?php the_sub_field("title"); ?></h1>
              <p><?php the_sub_field("content"); ?></p>
            </div>
          </div>
          <?php
        endwhile; ?>
        </div>
      </div>
 </section>