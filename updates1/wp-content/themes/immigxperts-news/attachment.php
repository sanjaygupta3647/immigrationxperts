<?php wp_redirect(get_permalink($post->post_parent)); ?>
<?php if ( wp_attachment_is_image( $post->id ) ) : 
$att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
<img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" />
<?php endif; ?>
	                        