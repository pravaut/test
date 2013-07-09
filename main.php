<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
<?php include 'api.php'; 
$API = new LodestoneAPI();
$ID = $_POST['id'];
$API->parseProfile($ID);
$Character = $API->getCharacterByID($ID);
?>

</head>

<body style="zoom: 1;">
<div style="height:20px;"></div>
<header>
	<div class="left">
		<a href="http://www.ffxiv.shadow-guard.co.uk">
    	small logo here</a>
	</div>
    <div class="right">
   	 <div class="navarea">
   	   <nav class="nav">
        <a class="btn_portal roundleft" href="">menu</a>
        <span class="navspacer"></span>
        <a class="btn_database roundright" href="">menu</a>
        <span class="navspacer"></span>
        <a class="btn_characters roundleft" href="">menu</a>
        <span class="navspacer"></span>
        <a class="btn_linkshells" href="">menu</a>
        <span class="navspacer"></span>
        <a class="btn_signatures" href="">menu</a>
        <span class="navspacer"></span>
        <a class="btn_guides" href="">menu</a>
        <span class="navspacer"></span>        
        <a class="btn_media roundright" href="">menu</a>
        </nav>
   	 </div>
    <div class="memberarea">
    <!-- member online and has character -->
    <a href=""></a>
    <div class="memberinfo" style="width:200px;">
    	<div class="top">
        	<a href="">
            	<span class="name"> </span>
              </a>
              <img src="" class="topbutton tooltip" data-tooltip="Update Character" onclick="Update.Open('6510295');">
              <img src="images/misc/clipboard-task.png" class="topbutton tooltip" data-tooltip="Open Tracker" onclick="Tracker.Open('6510295');">
              <img src="images/misc/wrench-screwdriver.png" class="topbutton tooltip" data-tooltip="Open Character Settings" onclick="Pad.Settings.Open();">
              </div>
        <div class="bottom">
            <span class="a tooltip" onclick="Messages.Open();" data-tooltip="Click to view your messages."><img src="images/misc/speech-bubble.png" class="messagesicon"><span class="numofmessages">0</span></span>
            <span class="split"></span>
             <div class="pm_notification_out" onclick="Messages.Open();" style="display: none; opacity: 0; margin: -28px 0px 0px -100px;">
                <div class="pm_notification_textarea">
                	<div class="pm_notification_title">Hello, kupo!<img src="images/ffxiv/new_mail.png"></div>
                    <div>
                    <div class="pm_notification_number"></div>
                    <div class="pm_notification_text">unread<br>messages</div>
                    </div>
                </div>
                </div>
                 <a href="?Account">Account</a>
                 <span class="split"></span>
                 
            
            Subs 
            <span class="split"></span>
            <div class="dropdown_zone" style="margin:-13px 0 0 188px; width:38px; height:18px;">
            <div class="dropdown subchars" style="width:180px;margin-left:-65px; margin-top:17px;">
            <div style="padding:10px;opacity:0.7;" align="center">No sub characters added</div>            </div>
            </div>
            <div class="dropdown subchars" style="width:180px;margin-left:-65px; margin-top:17px;">
            <div style="padding:10px;opacity:0.7;" align="center">No sub characters added
            </div>            
            </div>
            </div>
            </div>
            </div>
            </div>
            	
 
<br style="clear:both;">
</header>









</body>
</html>