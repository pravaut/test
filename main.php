<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css">
<?php include 'api.php'; 
$API = new LodestoneAPI();
$ID = 1181311;
$API->parseProfile($ID);
$Character = $API->getCharacterByID($ID);
?>

</head>

<body style="zoom: 1;">
<div style="height:20px;"></div>
<header>
	<div class="left">
		<a href="http://www.ffxiv.shadow-guard.co.uk">
    	<img src="images/linkshell.png"></a>
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
	<?php if ($_SESSION['loggedin']===true){ ?>
    <a href=""><?php echo '<img class="avatar" src="'. $Character->getAvatar(96) .'" />'; ?> </a>
    <div class="memberinfo" style="width:200px;">
    	<div class="top">
        	<a href="">
            	<span class="name"><?php echo $Character->getName(); ?> </span>
              </a>
              
              
              </div>
        <div class="bottom">
            <span class="a tooltip"><img src="http://xivpads.com/images/misc/speech-bubble.png" class="messagesicon"></span>
            <span class="split"></span>
             
               
                 <a href="?Account">Account</a>
                 <span class="split"></span>
                 
            
			<a href="?logout">logout</a>
            <span class="split"></span>
            
            </div>
            </div>
			<?php } else{ ?>
			<a href=""><?php echo '<img class="avatar" src="images/no_avatar.gif" />'; ?> </a>
    <div class="memberinfo" style="width:200px;">
    	<div class="top">
        	<a href="">
            	<span class="name"><?php echo "Shadow Guard"; ?> </span>
              </a>
              
              
              </div>
        <div class="bottom">
            
             
               
                 <a href="?registar">Registar</a>
                 <span class="split"></span>
                 
            
			<a href="?Login">Login</a>
            <span class="split"></span>
            
            </div>
            </div><?php } ?>
            </div>
            </div>
            	
 
<br style="clear:both;">
</header>









</body>
</html>