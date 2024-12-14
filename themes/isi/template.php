<?php
function isi_preprocess_html(&$variables) {
	drupal_add_css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', array('type' => 'external'));
	
	drupal_add_js('//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js', 'external');
}

// remove a tag from the head for Drupal 7
function isi_html_head_alter(&$head_elements) {
  unset($head_elements['system_meta_generator']);
}

// customise navbar with bootstrap CSS
function isi_menu_tree__main_menu($variables) {
  return '<ul class="nav navbar-nav">' . $variables['tree'] . '</ul>';
}

// customise dropdown menu with bootstrap CSS
function isi_menu_link(array $variables) {
	$element = $variables['element'];
	$sub_menu = '';
	//print_r($element);
	if ($element['#below']) {
		if ((!empty($element['#original_link']['depth'])) && ($element['#original_link']['depth'] == 1)) {
			unset($element['#below']['#theme_wrappers']);
			$sub_menu = '<ul class="dropdown-menu">' . drupal_render($element['#below']) . '</ul>';
			$element['#attributes']['class'][] = 'dropdown';
	      	$element['#localized_options']['html'] = TRUE;
	      	$element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
	      	$element['#localized_options']['attributes']['class'][] = 'dropdown-toggle';
	    }  	
	}
	
	if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']))) {
	    $element['#attributes']['class'][] = 'active';
	}
	
	$output = l($element['#title'], $element['#href'], $element['#localized_options']);
	return '<li' . drupal_attributes(str_replace("leaf", "", $element['#attributes'])) . '>' . $output . $sub_menu . "</li>\n";
}

