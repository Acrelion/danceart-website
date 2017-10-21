<div class="col-sm-10 mx-auto content-main">
    <div class="blog-post">
        <?php
     $post = get_post(35);
     if ($post){
        echo do_shortcode($post->the_content);
     }
      ?>
    </div>
    <!-- /.blog-post -->
</div>
<!-- /.blog-main -->