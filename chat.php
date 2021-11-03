<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/resets.css" rel="stylesheet" type="text/css">
    <link href="assets/css/styles.css" rel="stylesheet" type="text/css">
    <title>CHAT</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>
	<?php
            session_start();
                if(!isset($_SESSION['us_name']))    
        ?>
          <?php 
                if(isset($_GET['us_name'])){
                $_GET['us_name'];
                }
   			?>
	function submitchat(){
		if(form1.msg.value == ''){ //thoát nếu một trong các trường trống
			alert('Enter your message !');
			return;
		}
		var msg = form1.msg.value;
		var xmlhttp = new XMLHttpRequest(); //hphiên bản yêu cầu http
		
		xmlhttp.onreadystatechange = function(){ //hiển thị nội dung của insert.php sau khi tải thành công
			if(xmlhttp.readyState==4&&xmlhttp.status==200){
				document.getElementById('chatlogs').innerHTML = xmlhttp.responseText; //các nhật ký trò chuyện từ db sẽ được hiển thị bên trong phần div
			}
		}
		xmlhttp.open('GET', 'insert.php?msg='+msg, true); //mở và gửi yêu cầu http
		xmlhttp.send();
	}
	$(document).ready(function(e) {
			$.ajaxSetup({cache:false});
			setInterval(function() {$('#chatlogs').load('logs.php');}, 2000);
		});
		
	</script>
</head>

<body>
</head>
<body>
<div class="main">
	
 

	<div id="chatlogs">
    	LOADING CHATLOGS, PLEASE WAIT...
    </div>
<form name="form1">
	</br> <textarea name="msg" placeholder="Your message here..." style="width:1400px; height:30px;"></textarea>
	<a href="#" onClick="submitchat()" class="button">Send</a></br></br>
</form>
    </div>
</div>
</body>
</body>
</html>