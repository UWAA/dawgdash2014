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
    	add_shortcode('copyArea', array($this, 'copy_func'));
    	add_shortcode('sponsorGallery', array($this, 'sponsorGallery_func'));
    	add_shortcode('touchGallery', array($this, 'touchGallery_func'));
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

	    return "<div class=\"registerButton-Container\"><a id=\"registerButton\" title=\"link to registration page\" href=\"{$a['link']}\">Register Now</a><p class=\"small\">This button will link to getmeregistered.com</p></div>";
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

};


$add_dd_shortcodes = new dd_shortCodes();







