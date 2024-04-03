<?php get_header();


$carouselImages = new WP_Query(array(
    'posts_per_page' => -1,
    'post_type' => 'carousel_image',
    'orderby' => 'title',
    'order'   => 'ASC'
)
    
); ?>



<?php
$imageUrls = array();


while ($carouselImages->have_posts()){
    $carouselImages->the_post();
    $imageUrls[] =  array('url'=> get_field('carousel_image'), 'title' => get_the_title() );
    
    
}
wp_reset_postdata();
?>



<div aria-label="Latest Works" class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev" >&lt;</button>
        <button class="carousel-button next" data-carousel-button="next">&gt;</button>
        <ul data-slides>
            <?php 
            
                $index=0;
                while ($index < count($imageUrls)){

                    if ($index == 0){ ?>
                        <li class="slide" data-active>
                        <img src= "<?php echo $imageUrls[$index]['url'];?>" 
                        alt="<?php echo $imageUrls[$index]['title']; ?>">
                    </li>
                    <?php
                    }else{ ?>
                        <li class="slide">
                        <img src= "<?php echo $imageUrls[$index]['url'];?>" 
                        alt="<?php echo $imageUrls[$index]['title']; ?>">
                    </li>
                    <?php
                    }
                   
                    $index++;
                    
                }
                    
            ?>
                    
                    

            
            
            
        </ul>
            
        
</div>

<div class="bio">
    <?php
        $bio_info = new WP_Query(array(
            'post_per_page' => 1,
            'post_type' => 'bio_info',
            'orderby' => 'date'
        ));

        while($bio_info->have_posts()){
            $bio_info->the_post();
        
    ?>
    <div>
        <img src=<?php echo get_field('bio_image') ?> id="headshot">    
    </div>

    <div>
        <p>
            <?php the_content(); ?>                
        </p>
        <img src=<?php echo get_theme_file_uri('images/signature.png'); ?> id="signature">
    </div>
    <?php } ?>
   

</div>

    <?php  get_footer()?>