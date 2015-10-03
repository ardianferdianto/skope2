		
<div id="showcam">

	<img src="<?php echo $this->webroot;?>js/ScriptCam-master/webcamlogo.png" style="vertical-align:text-top"/>
	<select id="cameraNames" size="1" onChange="changeCamera()" style="width:100%;font-size:10px;height:25px;">
	</select>
</div>


		<script language="JavaScript" src="<?php echo $this->webroot;?>js/jquery.swfobject2.2.js"></script>
		<script language="JavaScript" src="<?php echo $this->webroot;?>js/ScriptCam-master/scriptcam.js"></script>
		<script language="JavaScript"> 
			$(document).ready(function() {
				$("#showcam").scriptcam({
					showMicrophoneErrors:false,
					onError:onError,
					cornerRadius:20,
					cornerColor:'e3e5e2',
					onWebcamReady:onWebcamReady,
					width: 640,
       				height: 480,

					onPictureAsBase64:base64_tofield_and_image
				});
			});
			function base64_tofield() {
				$('#formfield').val($.scriptcam.getFrameAsBase64());
			};
			function base64_toimage() {
				$('#image').attr("src","data:image/png;base64,"+$.scriptcam.getFrameAsBase64());
			};
			function base64_tofield_and_image(b64) {
				$('#formfield').val(b64);
				$('#image').attr("src","data:image/png;base64,"+b64);
			};
			function changeCamera() {
				$.scriptcam.changeCamera($('#cameraNames').val());
			}
			function onError(errorId,errorMsg) {
				$( "#btn1" ).attr( "disabled", true );
				$( "#btn2" ).attr( "disabled", true );
				alert(errorMsg);
			}			
			function onWebcamReady(cameraNames,camera,microphoneNames,microphone,volume) {
				$.each(cameraNames, function(index, text) {
					$('#cameraNames').append( $('<option></option>').val(index).html(text) )
				}); 
				$('#cameraNames').val(camera);
			}
		</script> 