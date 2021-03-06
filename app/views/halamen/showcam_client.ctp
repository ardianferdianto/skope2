<title>Audio+Video+TextChat+FileSharing</title>
<h1>Audio+Video+TextChat+FileSharing</h1>
<style>
video {
    object-fit: fill;
    width: 50%;
}

button, input, select {
    font-family: Myriad, Arial, Verdana;
    font-weight: normal;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 2px 4px;
    text-decoration: none;
    color: rgb(27, 26, 26);
    display: inline-block;
    box-shadow: rgb(255, 255, 255) 1px 1px 0px 0px inset;
    text-shadow: none;
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, color-stop(0.05, rgb(241, 241, 241)), to(rgb(230, 230, 230)));
    font-size: 16px;
    border: 1px solid red;
    outline:none;
}
button:active, input:active, select:active, button:focus, input:focus, select:focus, input[type=text] {
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, color-stop(5%, rgb(221, 221, 221)), to(rgb(250, 250, 250)));
    border: 1px solid rgb(142, 142, 142);
}

button[disabled], input[disabled], select[disabled] {
    background: rgb(249, 249, 249);
    border: 1px solid rgb(218, 207, 207);
    color: rgb(197, 189, 189);
}
</style>
<hr>
<button id="join-room">Join Room</button>
<button id="open-or-join-room">Auto Open Or Join Room</button>
<hr>
<div id="chat-container">
    <!-- <input type="text" id="input-text-chat" placeholder="Enter Text Chat" disabled> -->
    <div id="video_server"></div>
    <button id="share-file" disabled>Share File</button>
    <br>
    <div id="file-container"></div>
    <div class="chat-output"></div>
</div>
<?php echo $form->create('Halaman',array('action'=>'','id'=>'apa'));?>
    <input name="data['Halaman']['tes']" type="hidden" class="form-control" value="" id="isi">
<?php echo $form->end();?>
<hr>

<script>
connection.enableFileSharing = true; // by default, it is "false".


connection.sdpConstraints.mandatory = {
    OfferToReceiveAudio: true,
    OfferToReceiveVideo: true
};
// ......................................................
// .......................UI Code........................
// ......................................................
document.getElementById('join-room').onclick = function() {
    this.disabled = true;
    //connection.openOrJoin(document.getElementById('room-id').value);
    //connection.connectSocket(function(socket) {
    connection.session = {
        audio: true,
        video: true,
        data : true,
        oneway: true
    };

    connection.sdpConstraints.mandatory = {
        OfferToReceiveAudio: true,
        OfferToReceiveVideo: true
    };
    connection.connect('server_room2');
};

document.getElementById('open-or-join-room').onclick = function() {
    this.disabled = true;
    connection.openOrJoin(document.getElementById('room-id').value);
};

// ......................................................
// ................FileSharing/TextChat Code.............
// ......................................................

document.getElementById('share-file').onclick = function() {
    var fileSelector = new FileSelector();
    fileSelector.selectSingleFile(function(file) {
        connection.send(file);
    });
};

/*document.getElementById('input-text-chat').onkeyup = function(e) {
    if(e.keyCode != 13) return;
    
    // removing trailing/leading whitespace
    this.value = this.value.replace(/^\s+|\s+$/g, '');
    if (!this.value.length) return;
    
    connection.send(this.value);
    appendDIV(this.value);
    this.value =  '';
};*/

var chatContainer = document.querySelector('.chat-output');


function appendDIV(event) {
/*    var div = document.createElement('div');
    div.innerHTML = event.data || event;
    chatContainer.insertBefore(div, chatContainer.firstChild);
    div.tabIndex = 0; div.focus();
    
    document.getElementById('input-text-chat').focus();*/
    var str=event.data;
    var n=str.substr(0,4);
    if(n=="http"){
        //$("#isi").empty().append(str);
        $("#isi").val(str);
        $.ajax({
            type: "POST",
            url: "<?php echo $this->webroot; ?>halamen/process/",
            data: $("#apa").serialize(),
            success: function(data) {
                console.log(data);
                $.notify("Message from server data berhasil di push ","success");
            }

        });

         /*$.ajax({
            url: "<?php echo $this->webroot; ?>halamen/process/"+str,
            dataType: 'html',
            success: function(result){
                $.notify("Message from server data berhasil di push "+result,"success");
            }
          });*/
    }
    else{
        $.notify("Message from server "+event.data);
    }
}

// ......................................................
// ..................RTCMultiConnection Code.............
// ......................................................

//var connection = new RTCMultiConnection();



connection.onstream = function(event) {
    //document.body.appendChild(event.mediaElement);
    $('#video_server').empty().append(event.mediaElement);
};

connection.onmessage = appendDIV;
connection.filesContainer = document.getElementById('file-container');

connection.onopen = function() {
    document.getElementById('share-file').disabled      = false;
    //document.getElementById('input-text-chat').disabled = false;
    //socket.emit('custom-event', document.getElementById('room-id').value);
    //connection.connectSocket(function(socket) {
    //socket.emit('custom-event', 'his there');

    socket.on('custom-event',function(data){
          console.log('tes'+data);
        });
};
//connection.connect();
connection.onUserStatusChanged = function(event) {
	console.log(event.userid);
};
/*var socket = connection.getSocket();
//socket.emit('custom-event', 'hi there');
socket.on('custom-event', function(message) {
    console.log(message);
});*/
</script>
