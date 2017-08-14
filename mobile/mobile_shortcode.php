<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mobile_shotcode
 *
 * @author Studio365
 */
class mobile_shortcode {
    //put your code here
    public function __construct() {

        $this->shortcode_actions();

    }

    public function shortcode_actions(){
        // short code actions here
        // add_shortcode( 'baztag', array('MyPlugin', 'baztag_func') );

        // navar bar
        add_shortcode('mk_navbar', array('mobile_shortcode','navbar'));


        // dialog
        add_shortcode('mk_dialog', array('mobile_shortcode','dialog'));


        //button
        add_shortcode('mk_button', array('mobile_shortcode','button'));


        //grid
        add_shortcode('mk_grid', array('mobile_shortcode','grid'));

        //collaspe
        add_shortcode('mk_collaspe', array('mobile_shortcode','collaspe'));


       }

    public function navbar($atts, $content=null) {
        $theme = ($atts['theme']) ? $atts['class_name'] : uiOption::theme();
        $bar = '<div data-role="navbar" data-theme="'.$theme.'"  >'.$content.'</div>';
        return $bar;
        
    }

    public function dialog($atts,$content){       

        $url = $atts['url'];
        $transition = $atts['transition'];
        $theme = ($atts['theme']) ? $atts['class_name'] : uiOption::theme();
        $data = '<a href="'.$url.'" data-rel="dialog" data-transition="'.$transition.'" data="'.$theme.'">Open dialog</a>';
    }

    public function grid($atts,$content){
        
        $class = ($atts['class_name']) ? $atts['class_name'] : 'a';
        $theme = ($atts['theme']) ? $atts['class_name'] : uiOption::theme();
        $data = '<div class="ui-grid-'.$class.'" data-theme="'.$theme.'">'.$content.'</div>';
        return $data;
    }

    public function button($atts,$content){

        $url = $atts['url'];
        $theme = ($atts['theme']) ? $atts['class_name'] : uiOption::theme();
        if (in_array('inline', $atts) AND $atts['inline'] == false)
            $inline = 'false';
        else
            $inline = 'data-inline="true"';
        $data = '<a href="' . $url . '" data-role="button" data-theme="' . $theme . '" ' . $inline . ' >' . $content . '</a>';
        return $data;
    }
    
    public function collaspe($atts,$content){
        
        $theme = ($atts['theme']) ? $atts['class_name'] : uiOption::theme();
        $collasped = ($atts['collaspe']) ? $atts['collaspe'] : 'true';
        $data = '<div data-role="collapsible" data-collapsed="' . $collapsed . '" data-theme="' . $theme . '>' . $content . '</div>';
        
    }


}
