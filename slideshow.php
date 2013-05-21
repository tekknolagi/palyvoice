<?php if ( $images = get_posts(array('post_parent' => $post->ID, 'post_type' => 'attachment', 'numberposts' => -1, 'post_mime_type' => 'image'))): ?>
<div id="gallery" class="content">
  <div id="controls" class="controls"></div>
  <div class="slideshow-container">
    <div id="loading" class="loader"></div>
    <div id="slideshow" class="slideshow"></div>
  </div>
  <div id="caption"></div>
</div>
<div id="thumbs">
  <ul class="thumbs noscript">
    <?php foreach( $images as $image ): ?>
    <?php 
       $id = 0;
       $attachmenturl = wp_get_attachment_url($image->ID);
    $attachmentimage = wp_get_attachment_image_src( $image->ID, "large" );
    $attachmentthumb = wp_get_attachment_image_src( $image->ID, "thumbnail" );
    $imageCaption = apply_filters( 'the_caption' , $image->post_excerpt );
    $imageCredit = get_post_meta($image->ID, "_wp_attachment_image_alt", true);
    ?>
    <li>
      <a class="thumb" name="image_<?php echo ++$id; ?>" href="<?=$attachmentimage[0]?>" title="Voice Image">
	<img src="<?=$attachmentthumb[0]?>" alt="Voice Image" />
      </a>
      <div class="caption">
	<div class="credit"><?=$imageCredit?></div>
	<div class="text"><?=$imageCaption?></div>
      </div>
    </li>
    <?php endforeach; ?>
    <div class="clear"></div>
  </ul>
</div>
<?php endif; ?>
