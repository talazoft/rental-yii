<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author rizka
 */
class Utils {
    public static function rand_string($length) {
        $str="";
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	

        $size = strlen( $chars );
        for( $i = 0; $i < $length; $i++ ) {
            $str .= $chars[rand( 0, $size - 1 )];
        }

        return $str;
    }
}

?>
