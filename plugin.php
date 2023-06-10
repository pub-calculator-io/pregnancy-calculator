<?php
/*
Plugin Name: Pregnancy Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/pregnancy-calculator/
Description: Using the due date, last period date, ultrasound date, conception date, or IVF transfer date, this calculator generates an expected pregnancy timeline.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_pregnancy_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_pregnancy_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/pregnancy-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Pregnancy Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_pregnancy_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_pregnancy_calculator', 'display_ci_pregnancy_calculator' );