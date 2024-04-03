<?php get_header();?> 
    
    



    <div id="container">
        <?php 
            $workItems = new WP_Query(array(
                'post_per_page' => -1,
                'post_type' => 'gallery_images',
                'orderby' => 'date'
            ));  
            
            while ($workItems->have_posts()){
                $workItems->the_post();
            
         ?>
        <div class="item" 
                          onclick="showModal(this)"
                          data-img="<?php the_field('gallery_image'); ?>"
                          data-img_title="<?php echo get_the_title(); ?>"
                          data-img_type="<?php the_field('type'); ?>"
                          data-img_dimension="<?php the_field('dimension'); ?>"
                          >
            
            

            <img src="<?php echo get_field('gallery_image') ?>">
            <p><?php echo get_the_title(); ?></p>
        </div>
        <div id="modalBox" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeModal(this)">&times;</span>
                    <div class="spec">
                        <div class="title">
                            <p><?php echo get_the_title(); ?></p>
                            <hr>
                        </div>
                        <div class="spec-items-container">
                            <div class="spec-item" id="dimension">
                                <img src="<?php echo get_theme_file_uri('images/icons/dimensions.png') ?>">
                                <p><?php the_field('dimension'); ?></p>
                            </div>
                            <div class="spec-item" id="type">
                                <img src="<?php echo get_theme_file_uri('images/icons/canvas.png') ?> ">
                                <p><?php the_field('type'); ?></p>
                            </div>
                        </div>


                    </div>
                    <div style="text-align:center;">
                        <img id="main_img" style="object-fit:cover;width:50%">
                    </div>
                    <p id="spes"></p>
                </div>
            </div>

        
       
    <?php } ?>  
        
    </div>



<?php get_footer(); ?>
    