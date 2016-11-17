
<style>
	#msghystory{
		width: 50%;
		margin: 0 auto;
		overflow: hidden;
	}
	.no_scroll{
		height: calc(100vh - 350px);
		min-width: 320px;
		overflow: auto;
		margin: 15px -300px 15px 15px;
		padding-right: 300px;
	}
	.msg_wrap{
		display: block;
	}
	.msg_wrap:after{
		content: " ";
		display: table;
		clear: both;
	}
	.my_msg{
		float: right;
		width: 50%;
	}
	.msg{
		float: left;
		width: 50%;
	}
	.photo {
		box-sizing: border-box;
		display: inline-block;
		width: 15%;
	}
	.photo img{
		width: 100%;
	}
	.my_msg .photo{
		margin-left: 10px;
	}
	.msg .photo{
		margin-right: 10px;
	}
	.content {
		box-sizing: border-box;
		display: inline-block;
		width: 70%;
	}
	.my_msg>.content{
		text-align: right;		
	}
	.msg>.content{
		text-align: left;		
	}
	.my_msg>.content>.name {
		margin-left: 20px;
	}
	.msg>.content>.name {
		margin-right: 20px;
	}
	.name, .time {
		display: inline-block;
	}
	
	textarea{
		width: 100%;
		resize: none;
		outline: none;
	}
	.send_wrap{
		margin: 0 auto;
		width: 50%;
		min-width: 320px;
	}
</style>

<h1>Диалог с <?echo($data['first_name'])?></h1>
Диалог между пользователями с id <? echo $_SESSION['user']['user_id'] .' и '. $data['id'];?>
<span style="display: block;" id="status">Состояние соединения</span>
<div id="msghystory">
	<div class="no_scroll">
		
	</div>
</div>
<div class="send_wrap">
	<textarea  id="message" ></textarea>
	<div style="border: solid 1px #ccc; display:inline-block; padding: 5px 10px; cursor: pointer; margin-top: 5px;" id="send">Отправить</div>
	<div style="border: solid 1px #ccc; display:inline-block; padding: 5px 10px; cursor: pointer; margin-top: 5px;" id="disc">Выйти</div>
</div>
<script src="../../../js/libs.min.js"></script>
<script>
	var socket = new WebSocket("ws://uk.lantrix.info:8889?<? echo $_SESSION['user']['user_id'] .','. $data['id'];?>");
	var span = document.getElementById('status');
	var list = document.getElementById('msghystory');
	var message = document.getElementById('message');
	var btnSend = document.getElementById('send');
	/*
		
	*/
	socket.onopen = function(event){
		console.log(socket.readyState);
		span.innerHTML = "Соединились";
	};
	btnSend.onclick = function(){
		if(socket.readyState === 1){
			if($('#message').val() !== ""){
				socket.send(message.value);			
				$('#message').val("");				
			}
		}
	};

	$(document).keypress(function(e) {
	    if(e.which == 13) {
		    if(socket.readyState === 1){
				if($('#message').val() !== ""){
					socket.send(message.value);			
					$('#message').val("");				
				}
			}
	    }
	});
	//var div = document.createElement('div');
	socket.onmessage = function(event){
		if(typeof event.data === 'string'){
			var data = JSON.parse(event.data);
			$.each(data, function(k,v){
				if(v.user_from == <? echo $_SESSION['user']['user_id'];?>){
					$('.no_scroll').append(
						'<div class="msg_wrap">'+
						'<div class="my_msg">'+
						'<div class="content">'+
						'<div class="time">'+v.time+'</div>'+
						'<div class="name"><? echo $_SESSION["user"]["username"];?></div>'+
						'<div class="msg_content">'+v.txt+'</div>'+
						'</div>'+
						'<div class="photo">'+
						'<img src="http://weddinglady/images/2.png" />'+
						'</div>'+
						'</div>'+
						'</div>'
						);
				}else{
					$('.no_scroll').append(
						'<div class="msg_wrap">'+
						'<div class="msg">'+
						'<div class="photo">'+
						'<img src="http://weddinglady/images/1.png" />'+
						'</div>'+
						'<div class="content">'+
						'<div class="name"><? echo $data["first_name"];?></div>'+
						'<div class="time">'+v.time+'</div>'+
						'<div class="msg_content">'+v.txt+'</div>'+
						'</div>'+
						'</div>'+
						'</div>'
						);
				}
				console.log(v);
			});
			$('.no_scroll').scrollTop($(".msg_wrap:last-child").offset().top);
		}
	};

	$('#disc').click(function(){
		socket.close();
	});
	// window.onbeforeunload = function () { 
	// 	if(socket.redyState === WebSocket.CLOSE){
	// 		socket.close();
	// 	}
	// }; 
	socket.onclose = function(event){
		span.innerHTML = "Соединение закрыто";
	};
	

	

	

</script>