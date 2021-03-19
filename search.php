<?php
    class Search {        
        function hasItem($array,$key) {
            if(array_key_exists($key,$array))
                return true;
            else 
                return false;
        }
        function only($array,$key) {
            if(!is_array($key)){
                unset($array[$key]);
            }
            else{
                $array = [];
            }            
            return $array;
        }
    }
?>