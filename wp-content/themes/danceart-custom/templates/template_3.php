<div class="col-sm-10 mx-auto content-main">
    <div class="row">
    <?php
     $iterator = 1;
     $div_open = false;
     if (get_post_gallery(35)){
        $gallery_data = get_post_gallery(35, false);
        foreach($gallery_data['src'] as $image_link){
            
            $image_element_str = "";
            
            $image_element_str .= '<a href="' . $image_link . '" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">';
            $image_element_str .= '<img src="' . $image_link . '" class="img-fluid">';
            $image_element_str .= '</a>';

            echo $image_element_str . "\n";
        }
    } 
    ?>
    </div>   
</div>
<!-- /.blog-main -->