<?php
    if ( (function_exists( 'of_get_option' )) && (of_get_option('slidetitle5',true) !=1) ) {
	if ( ( of_get_option('slider_enabled') != 0 ) && ( (is_home() == true) || (is_front_page() ==true) ) )  
		{ ?>
    <div id="slider-wrapper">
    <ul class="bxslider">
    	<?php
		  		$slider_flag = false;
		  		for ($i=1;$i<6;$i++) {
					if ( of_get_option('slide'.$i, true) != "" ) {
						echo "<li><a href='".esc_url(of_get_option('slideurl'.$i, true))."'><img src='".of_get_option('slide'.$i, true)."' title='".of_get_option('slidetitle'.$i, true)."'></a></li>";    
						$slider_flag = true;
					}
				}
           ?>
     </ul>   
	</div>
    
    <?php } 
	}
?>