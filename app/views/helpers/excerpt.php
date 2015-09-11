<?php 
/* 
*/ 
Class ExcerptHelper extends AppHelper { 

    var $helpers = array('Html', 'Javascript'); 
     
    function makeExcerpt ($str,$length = 10,$trailing = ''){
        //$length = mb_strlen($trailing);
        if(mb_strlen($str)>$length){
            return mb_substr($str, 0,$length).$trailing;
        }else{
            $res = $str;
        }

        return $res;
    }
} 

?>