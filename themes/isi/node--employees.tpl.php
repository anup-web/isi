<div class="content clearfix"<?php print $content_attributes; ?>>
	<?php
	// We hide the comments and links now so that we can render them later.
	hide($content['comments']);
	hide($content['links']);
	//print render($content); comment to hide all content
	//echo "HELLO " . $content['title']['#items'][0]['value']; //will only show field_demotext1 value
	
	echo "HELLO " . $content['title'];
	
    ?>
</div>
