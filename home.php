<?php
if(!isset($_SESSION))
{
session_start();
include('connection.php');
$username = $_SESSION['user'];
}
?>
<html lang="EN">
<head>
<meta charset="utf-8">
<script src="js/sendchat.js" type="text/javascript"></script>
<script src="js/refresh.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/home.css">

<script src="js/jquery.js"></script>
</head>
<body>
<div class="holder">
<label>CHAT APPLIATION: </label><label for="name"><?php echo $username; ?></label>
<div class="style">
<div class="alpha">
<b align="center">You can view your chats here:</b>
<input name="user" type="hidden" id="texta" value="<?php echo $username ?>"/>
<div class="refresh">
</div>
<br/>
<form name="newMessage" class="newMessage" action="" onsubmit="return false">
<select name="recipient" id="recipient" style="width:270px;">
<option>--Send Chat To--</option>
<?php
$sql = "SELECT * FROM tbllogin where username!='$username' ORDER BY username";
$qry = $con->prepare($sql);
$qry->execute();
$fetch = $qry->fetchAll();
foreach ($fetch as $fe):
$name = $fe['username'];
?>
<option title="<?php echo $name; ?>"><?php echo $fe['username']; ?> </option>
<?php endforeach; ?>
</select>
<textarea name="textb" id="textb" placeholder="Enter your message here"></textarea>
<input name="submit" type="submit" value="Send" id="chat" />
</form>
</div>
</div>
</div>
</body>
</html>
