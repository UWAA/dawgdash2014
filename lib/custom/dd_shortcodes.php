<?php

//
//DawgDash 2014 Custom Shortcodes
//v1.0
///////////////////////

class dd_shortCodes {


	public function __construct()
    {	
    	add_shortcode('faq-title', array($this, 'faq_title_func'));
    	add_shortcode('faq-content', array($this, 'faq_content_func'));
    	add_shortcode('accordion', array($this, 'accordion_func'));
    	add_shortcode('video', array($this, 'videoWrapper_func'));
    	add_shortcode('registerButton', array($this, 'registerButton_func'));
    	add_shortcode('facebookButton', array($this, 'facebookButton_func'));
    	add_shortcode('copyArea', array($this, 'copy_func'));
    	add_shortcode('sponsorGallery', array($this, 'sponsorGallery_func'));
    	add_shortcode('touchGallery', array($this, 'touchGallery_func'));
    	add_shortcode('readMore', array($this, 'readMore_func'));
    	add_shortcode('homeSlider', array($this, 'homeSlider_func'));
	}



	// [faq-title target="#target element for collapse"]
	public function faq_title_func( $atts, $content="" ) {
	    $a = shortcode_atts( array(
	        'target' => 'the ID of the element to collapese',
	        'open' => 'true/false'
	    ), $atts );

	    if ($a['open'] == 'true') {
	    return "<div class=\"panel\"><div data-toggle=\"collapse\" class=\"faq-heading\" data-parent=\"#accordion\" href=\"#{$a['target']}\"><span class=\"oi oi-minus\"></span><h2>$content</h2></div>";
		} else {
			return "<div class=\"panel\"><div data-toggle=\"collapse\" class=\"faq-heading\" data-parent=\"#accordion\" href=\"#{$a['target']}\"><span class=\"oi oi-plus\"></span><h2>$content</h2></div>";
		}

	}

	// [faq-title target="#target element for collapse"]
	public function faq_content_func( $atts, $content="" ) {
	    $a = shortcode_atts( array(
	        'target' => 'the ID of the element to collapese',
	        'open' => 'true/false'
	    ), $atts );

	    if ($a['open'] == 'true') {
	    	return "<div class=\"collapse in\" id=\"{$a['target']}\"><p>".do_shortcode($content)."</p></div><hr></div>";	
	    } else {
	    	return "<div class=\"collapse\" id=\"{$a['target']}\"><p>".do_shortcode($content)."</p></div><hr></div>";
	    }
	    
	    
	}

	// [accordion-start]
	public function accordion_func($atts, $content="" ) {
    return   '<div id="accordion">'.do_shortcode($content).'</div>';
	}

	public function videoWrapper_func ($atts, $content="") {
		$a = shortcode_atts( array(
	        
	    ), $atts );
		
		return "<div class=\"videoWrapper pull-right\">$content</div>";

		
	}

	public function registerButton_func($atts)	{
		$a = shortcode_atts( array(
	        'link' => 'Link to Registration Page'
	    ), $atts );

	    return "<div class=\"registerButton-Container\"><a id=\"registerButton\" title=\"link to registration page\" href=\"{$a['link']}\" target=\"_blank\">Register Now</a><p class=\"small\">This button will link to getmeregistered.com</p></div>";
	}


	public function facebookButton_func($atts) {
		$a = shortcode_atts( array(
	        
	    ), $atts );

		return '<div class="fb-link"><a href="http://www.facebook.com/dawgdash" target="_blank"><img src="'.get_template_directory_uri().'/assets/img/logo-fb-30.png" alt="facebook icon" width="30" height="30" /></a><a href="http://www.facebook.com/dawgdash" target="_blank">Visit the Dawg Dash Facebook Page!</a></div>';
	}

		public function copy_func($atts, $content="")	{
		$a = shortcode_atts( array(
	        
	    ), $atts );

	    return '<div class="copy-container"><div class="copy-row"><div class="copy-columns"><p>'. do_shortcode($content). '</p></div></div></div>';
	}

	// [sponsor gallery-start]
	public function sponsorGallery_func($atts, $content="" ) {
		$a = shortcode_atts( array(
	        'class' => '',
	    ), $atts );
    return   '<div class="sponsor-gallery ' . $a['class'] . '">'.do_shortcode($content).'<hr></div>';
	}

// [sponsor gallery-start]
	public function touchGallery_func($atts, $content="" ) {
		$a = shortcode_atts( array(
	        'class' => '',
	    ), $atts );
    return   '<div class="gallery-row' . $a['class'] . '"><div class="holder">'.do_shortcode($content).'</div><span class="oi oi-chevron-left control-left" data-glyph="chevron-left"></span><span class="oi oi-chevron-right control-right" data-glyph="chevron-right"></span></div>';
	}

	public function readMore_func($atts, $content="")
	{
		$a = shortcode_atts( array(
	        'toggleText' => 'Text for toggle',
	        'target' => 'the ID of the element to collapese',
	       	), $atts );
	    return '<span class="read-more" data-toggle="collapse" href="#'.$a['target'].'">read more +</span><p class="collapse content-collapse" id="'.$a['target'].'">'.do_shortcode($content).'</p>'; 
	}

	public function homeSlider_func($atts)
	//could use some SERIOUS refactoring.
	{
		$a = shortcode_atts( array(
	  
	       	), $atts );

		$output = '<ul class="rslides">';
		$output.= '<li><img src="http://depts.washington.edu/alumni/blogs/dawgdash/files/2014/08/dd_sshow_01.jpg" alt="Three Dawg Dash participants and a dog" width="475" height="375" /></li>'; 
		$output.= '<li><img src="http://depts.washington.edu/alumni/blogs/dawgdash/files/2014/08/dd_sshow_02.jpg" alt="Child holding a purple ribbon after completing the Kid\'s Dash" width="475" height="375" /></li>'; 
		$output.= '<li><img src="http://depts.washington.edu/alumni/blogs/dawgdash/files/2014/08/dd_sshow_03.jpg" alt="Dawg Dash participants mingling during the event" width="475" height="375" /></li>'; 
		$output.= '<li><img src="http://depts.washington.edu/alumni/blogs/dawgdash/files/2014/08/dd_sshow_04.jpg" alt="Three Dawg Dash participants talk before the event" width="475" height="375" /></li>'; 
		$output.= '<li><img src="http://depts.washington.edu/alumni/blogs/dawgdash/files/2014/08/dd_sshow_05.jpg" alt="Five Dawg Dash participants showing off their purple t-shirts" width="475" height="375" /></li>'; 
		$output.= '<li><img src="http://depts.washington.edu/alumni/blogs/dawgdash/files/2014/08/dd_sshow_06.jpg" alt="A Husky Marching Band trumpeter plays at the Dawg Dash" width="475" height="375" /></li>'; 
		$output.= '<li><img src="http://depts.washington.edu/alumni/blogs/dawgdash/files/2014/08/dd_sshow_07.jpg" alt="Three Dawg Dash New York City participants in front of the Brooklyn Bridge" width="475" height="375" /></li>'; 
		$output.= '</ul>';
	    return $output;
	}



};


$add_dd_shortcodes = new dd_shortCodes();







