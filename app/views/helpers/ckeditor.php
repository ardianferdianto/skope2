<?php
class CkeditorHelper extends AppHelper {

    var $helpers = Array('Html', 'Javascript'); 

    function load($id) {
        $did = '';
        foreach (explode('.', $id) as $v) {
        if(substr_count($v, '_') != 0) {
        $wd = '';
        foreach (explode('_', $v) as $l) {
            $wd .= ucfirst($l);
            }
            $did .= ucfirst($wd);
        } else {
        $did .= ucfirst($v);
        }
        }

    $path = $this->webroot . 'js/ckfinder';
        $code = "CKEDITOR.replace( '".$did."',
        {
        } );";
        return $this->Javascript->codeBlock($code);
    }
}
?>