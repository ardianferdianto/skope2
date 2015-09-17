var socket = io();
function submitfunction(){
  var from = $('#user').val();
  var message = $('#m').val();
  if(message != '') {
  socket.emit('chatMessage', from, message);
}
$('#m').val('').focus();
  return false;
}
$.notify.addStyle('happyblue', {
  html: "<div><span data-notify-text/></div>",
  classes: {
    base: {
      "white-space": "nowrap",
      "background-color": "lightblue",
      "padding": "5px"
    },
    superblue: {
      "color": "white",
      "background-color": "blue",
      "width":"500px"
    }
  }
});
function notifyTyping() {
  var user = $('#user').val();
  socket.emit('notifyUser', user);
}
 
socket.on('chatMessage', function(from, msg){
  var me = $('#user').val();
  var color = (from == me) ? 'green' : '#009afd';
  var from = (from == me) ? 'Me' : from;
  $('#messages').append('<li><b style="color:' + color + '">' + from + '</b>: ' + msg + '</li>');
});
 
socket.on('notifyUser', function(user){
  var me = $('#user').val();
  if(user != me) {
    $('#notifyUser').text(user + ' is typing ...');
  }
  setTimeout(function(){ $('#notifyUser').text(''); }, 10000);;
});
 
$(document).ready(function(){
  var name = makeid();
  $('#user').val(name);
  socket.emit(duar('hello iam '+name));
  
});
function duar(s){
  $.notify(s,{style: 'happyblue',
  className: 'superblue'});
}
function makeid() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
 
  for( var i=0; i < 5; i++ ) {
    text += possible.charAt(Math.floor(Math.random() * possible.length));
  }
  return text;
}