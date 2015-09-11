<?php 
/* 
        Flow Player Helper (free video player) 
        Requed helpers HTML, Javascript 
*/ 
Class VideoHelper extends AppHelper { 

var $helpers = array('Html', 'Javascript'); 
     
    function loader($loadcss=false) { 
        $out=$this->Javascript->link('flowplayer-3.2.6.min'); 
        
        return $this->output($out); 
         
    }     
     
    function player ($file, $div, $autoplay=false, $width=400, $height=290 ) { 
         
        if ($autoplay=True) {$autoplay="true";} else $autoplay="false"; 
        $out=' 
        <script> 
    window.onload = function() {   
         flashembed("'.$div.'",              
            { 
                src:"'.$this->webroot.'files/flowplayer-3.2.7.swf", 
                width: '.$width.',  
                height: '.$height.' 
            }, 
             
            {config: {    
                autoPlay:'.$autoplay.', 
                controlBarBackgroundColor:"0x2e8860", 
                initialScale: "scale", 
                clip: "'.$file.'" 
            }}  
        ); 
    } 
    </script>     
        '; 
        return $this->output($out); 
    } 
} 

?>