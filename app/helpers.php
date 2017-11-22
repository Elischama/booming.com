<?php
/**
 * Created by PhpStorm.
 * User: kassy
 * Date: 21/11/17
 * Time: 16:12
 */

if(!function_exists('page_title')){
    function page_title($title){
        $titre_de_base = 'Booming Cote d\'Ivoire';
        if($title === ''){
            return $titre_de_base;
        } else{
            return $title . ' | ' .  $titre_de_base;
        }
    }
}