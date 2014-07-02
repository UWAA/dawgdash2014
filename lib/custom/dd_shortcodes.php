<?php

//
//DawgDash 2014 Custom Shortcodes
//v1.0
///////////////////////

class dd_shortCodes {


	public function __construct()
    {
    	add_shortcode('faq-title', array($this, 'faq_title_func') );
    	add_shortcode('faq-content', array($this, 'faq_content_func') );
    	add_shortcode('bartag', array($this, 'bartag_func') );
    	add_shortcode('accordion-start', array($this, 'accordion_start_func'));
    	add_shortcode('accordion-stop', array($this, 'accordion_stop_func'));
	}



	// [faq-title target="#target element for collapse"]
	public function faq_title_func( $atts, $content="" ) {
	    $a = shortcode_atts( array(
	        'target' => 'the ID of the element to collapes',
	    ), $atts );

	    return "<div data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#{$a['target']}\">$content</div>";
	}

	// [faq-title target="#target element for collapse"]
	public function faq_content_func( $atts, $content="" ) {
	    $a = shortcode_atts( array(
	        'target' => 'the ID of the element to collapes',
	    ), $atts );

	    return "<div class=\"collapse\" id=\"{$a['target']}\">$content</div>";
	}

	// [accordion-start]
	public function accordion_start_func( ) {
    return   '<div id="accordion">';
	}

	// [accordion-stop]
	public function accordion_stop_func( ) {
    return   '</div>';
	}



};


$add_dd_shortcodes = new dd_shortCodes();







