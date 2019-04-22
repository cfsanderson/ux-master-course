<div id="social_icons">
		    <?php if ( of_get_option('facebook', true) != "") { ?>
			 <a target="_blank" href="<?php echo of_get_option('facebook', true); ?>" title="Facebook" ><img src="<?php echo get_template_directory_uri()."/images/facebook.png"; ?>"></a>
             <?php } ?>
            <?php if ( of_get_option('twitter', true) != "") { ?>
			 <a target="_blank" href="http://twitter.com/<?php echo of_get_option('twitter', true); ?>" title="Twitter" ><img src="<?php echo get_template_directory_uri()."/images/twitter.png"; ?>"></a>
             <?php } ?>
             <?php if ( of_get_option('google', true) != "") { ?>
			 <a target="_blank" href="<?php echo of_get_option('google', true); ?>" title="Google Plus" ><img src="<?php echo get_template_directory_uri()."/images/google.png"; ?>"></a>
             <?php } ?>
             <?php if ( of_get_option('pinterest', true) != "") { ?>
			 <a target="_blank" href="<?php echo of_get_option('pinterest', true); ?>" title="Pinterest" ><img src="<?php echo get_template_directory_uri()."/images/pinterest.png"; ?>"></a>
             <?php } ?>
             <?php if ( of_get_option('linkedin', true) != "") { ?>
			 <a target="_blank" href="<?php echo of_get_option('linkedin', true); ?>" title="Linked In" ><img src="<?php echo get_template_directory_uri()."/images/linkedin.png"; ?>"></a>
             <?php } ?>
             <?php if ( of_get_option('instagram', true) != "") { ?>
			 <a target="_blank" href="<?php echo of_get_option('instagram', true); ?>" title="Instagram" ><img src="<?php echo get_template_directory_uri()."/images/instagram.png"; ?>"></a>
             <?php } ?>
             <?php if ( of_get_option('youtube', true) != "") { ?>
			 <a target="_blank" href="<?php echo of_get_option('youtube', true); ?>" title="YouTube" ><img src="<?php echo get_template_directory_uri()."/images/youtube.png"; ?>"></a>
             <?php } ?>
             <?php if ( of_get_option('feedburner', true) != "") { ?>
			 <a target="_blank" href="<?php echo of_get_option('feedburner', true); ?>" title="RSS Feed" ><img src="<?php echo get_template_directory_uri()."/images/rss.png"; ?>"></a>
             <?php } ?>
          </div>	