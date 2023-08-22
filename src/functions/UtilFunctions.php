<?php

namespace Branar\Blog\functions;

class UtilFunctions {
    public static function split_letter(string $name, string $target): string {

        if ( $target == 'split') {
            $new_name = str_replace(' ', '-', $name);
        }elseif ($target == 'upper') {
            $new_name = str_replace('-', ' ', $name);
            $new_name = ucwords($new_name);
        }else{
            $new_name = str_replace('-', ' ', $name);
        }
    
        return $new_name;
    }
}