<div class="col-sm-10 mx-auto content-main">
    <div class="blog-post row">
        <?php
            $post = get_post(11);
            if ($post){
                echo $post->post_content;
            }
      ?>
    </div>
    <!-- /.blog-post -->
</div>
<!-- /.blog-main -->