<section class="features">
      <div class="container-fluid" id="hanging-icons">
      <?php $header = get_field("features_title"); ?>
        <h2 class="text-center"><?php echo $header; ?></h2>
        <div class="row g-max row-cols-1 row-cols-lg-3">
        <?php while (have_rows("page-features")):
            the_row(); ?>
          <div class="col d-flex align-items-start mb-5">
            <div class="features-icons">
            <?php
            $image = get_sub_field("icons");
            $image_url = $image["sizes"]["large"];
            $image_alt = $image["caption"];
            ?>
              <img src="<?php echo $image_url; ?>">
            </div>
            <div>
              <h3><?php the_sub_field("title"); ?></h3>
              <p><?php the_sub_field("content"); ?></p>
            </div>
   
          </div>
          <?php
        endwhile; ?>
        </div>
      </div>
    </section>