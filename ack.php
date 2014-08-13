<!DOCTYPE HTML>
<html>
<head>
	<title>Thank you</title>
	<script src="js/skel.min.js"></script>
	<link rel= "icon" media="all" type="file content-type" href="images/favicon.ico" />
	<link rel= "icon" media="all" type="image/vnd.microsoft.icon" href="images/favicon.ico" />
	<style type="text/css" media="all">
	body{
	 	
background-image: url('images/overlay.png');
}

.box h3{
	text-align:center;
	position:relative;
	top:40px;
	font-style:lighter;
	font-family:"Times New Roman",Georgia,Serif;
}
.box {
	width:70%;
	height:200px;
	background:#FFF;
	margin:40px auto;
	top:10px;
}

.effect
{
  position: relative;
}
.effect
{
  position: relative;
}
.effect:before, .effect:after
{
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 25px;
  left: 10px;
  width: 50%;
  top: 80%;
  max-width:300px;
  background: #777;
  -webkit-box-shadow: 0 35px 20px #777;
  -moz-box-shadow: 0 35px 20px #777;
  box-shadow: 0 35px 20px #777;
  -webkit-transform: rotate(-8deg);
  -moz-transform: rotate(-8deg);
  -o-transform: rotate(-8deg);
  -ms-transform: rotate(-8deg);
  transform: rotate(-8deg);
}
.effect:after
{
  -webkit-transform: rotate(8deg);
  -moz-transform: rotate(8deg);
  -o-transform: rotate(8deg);
  -ms-transform: rotate(8deg);
  transform: rotate(8deg);
  right: 10px;
  left: auto;
}
.button{
background-color: #98c593;
      border: 0;
      color: #fff;
      cursor: pointer;
      display: inline-block;
      height: 3.5em;
      line-height: 3.5em;
      outline: 0;
      padding: 0 3em 0 3em;
      position: relative;
      text-align: center;
      text-decoration: none;
      margin-top: 2em;
      left: 50em;
    }
	</style> 
</head>
<body>
	<div class="box effect">
		<h3>Your message has been send successfully. we will contact you back within 24 hours. Thank You</h3>
	</div>
  <a href="index.php"><input type="submit" class="button" value="Back" name="back" /></a>
</body>
</html>