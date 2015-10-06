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
<button id="open-room">Start Server</button>
<hr>
<div id="chat-container">
    <br>
    <div id="video_server"></div>
    <div id="file-container"></div>
    <div class="chat-output"></div>
</div>
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
document.getElementById('open-room').onclick = function() {
    this.disabled = true;
/*    connection.extra = {
        'session-name': document.getElementById('room-id').value,
        'fullName': 'something special'
    };*/

	//socket.emit('custom-event', { test: 'data' });
    //socket.emit('test', 'ada');
    connection.connectSocket(function(socket) {
	    connection.session = {
		    audio: true,
		    video: true,
		    data : true,
		    oneway: true
		};

		connection.open('server_room2');
	    //connection.open(document.getElementById('room-id').value);
	});
};

// ......................................................
// ................FileSharing/TextChat Code.............
// ......................................................



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
    var div = document.createElement('div');
    div.innerHTML = event.data || event;
    chatContainer.insertBefore(div, chatContainer.firstChild);
    div.tabIndex = 0; div.focus();
    
    document.getElementById('input-text-chat').focus();
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


//connection.connect();
connection.onUserStatusChanged = function(event) {
	console.log(event.userid);
};
</script>
