<?php get_header();?>

<?php while(have_posts()){
    the_post();

    

?> 
<div class="container">
        
            <?php the_content();} ?>
        
        <p id="req_fields">Fields containing (*) are mandatory.</p>
        <div class="social">
            <a><img src="<?php echo get_theme_file_uri('images/icons/instagram.png') ?>"></a>
            
        </div>
    </div>


<?php get_footer(); ?>