<?php
session_start();
?>
<html>
<body background="82.jpg">
<br><br>
<img src="22.png" height=30 width=35>
<?php
echo "<font size='6' face='gabriola' color=silver>"."<b>"."Thankyou for Submitting your Queries,"." ". $_GET['fname']." ".$_GET['lname'].". "."</b>"."We will get back to you as soon as possible."."</font>"."<br><br><br><br>";
if (isset($_SESSION['visits']))
{
$_SESSION['visits']=$_SESSION['visits']+1;
}
else
{
$_SESSION['visits']=1;
}
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"."<font size='6' face='Giddyup Std' color=silver>You are visitor number: ".$_SESSION['visits'];
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<marquee behavior="scroll" direction="left" scrollamount="6" style="width: 1260px; height: 187px; background-color: black; overflow: auto;">
<img src="1.jpg" height=187 width=250>
<img src="2.jpg" height=187 width=250>
<img src="3.jpg" height=187 width=250>
<img src="4.jpg" height=187 width=250>
<img src="5.jpg" height=187 width=250>
<img src="6.jpg" height=187 width=250>
<img src="7.jpg" height=187 width=250>
</marquee>
</body>
</html>