<?php get_header(); 
while(have_posts()){
    the_post();

?>
<div id="container">

<?php 
    $about_info = new WP_Query(array(
        'post_per_page' => 1,
        'post_type' => 'about_info',
        'orderby' => 'date'
    ));

    while ($about_info->have_posts()){
        $about_info->the_post();
 ?>
<img src="<?php echo get_field('about_image'); ?>">
        
        <div id="desc">
            
        
                <?php  
                     echo '<p>' . get_the_content() . '</p>'; }                  
                  
                ?>
           
            
            
            <div id="contact">
                <img src=<?php echo get_theme_file_uri('images/icons/email.png'); ?>>
                <p>
                    contact@HeatherSchmittAbstract.com
                </p>
            </div>
            <div id="social">
                <a>
                    <img src=<?php echo get_theme_file_uri('images/icons/instagram.png'); ?>>
                </a>
                
            </div>
        </div>
</div>


<?php }
get_footer(); ?>