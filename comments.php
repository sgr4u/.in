<?php
if($_POST{
$name=$_POST['name'];
$content=$_POST[commentContent];
$handle=fopen("comments.html","a");
fwrite($handle,"<b/>". $name ."</b>:<br/>" . $content ."<br/>";
fclose($handle);

}
?>


<html>
<Body bgcolor="sky blue">
  <form action= "" method = "POST">
    Comments: <textarea rows="10" cols="30" name="commentContent"></textarea><br/>
    Name:<input type="text" name="name"></br>
<input type="submit" value="post!"><br/>

 </form>
<?php include "comments.php";?>
</body>
</html>
