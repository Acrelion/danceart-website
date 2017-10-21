<div class="col-sm-10 mx-auto content-main">
    <div class="blog-post">
        <?php
     $post = get_post(1);
     if ($post){
        echo $post->post_content;
     }
      ?>
    </div>
    <!-- /.blog-post -->
</div>
<!-- /.blog-main -->