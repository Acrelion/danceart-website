<?php get_header(); ?>
<section class="row">
    <?php
        if (have_posts()) : 
            get_template_part( 'templates/template_1', 'page' );
        endif;        
    ?>
</section>
<!-- /.row -->
<section class="row section-colorer-1">
    <?php
        if (have_posts()) : 
            get_template_part( 'templates/template_2', 'page' );
        endif;        
    ?>
</section>
<!-- /.row -->
<section class="row">
    <?php
        if (have_posts()) : 
            get_template_part( 'templates/template_3', 'page' );
        endif;        
    ?>
</section>
<!-- /.row -->
<?php get_footer(); ?>