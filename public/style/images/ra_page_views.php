<?
include("header.inc.php");
?>
<script language="javascript">


		function openurl(providerurl)
		{
			window.open(providerurl+document.location);
		}

//-->

		</script>
     <script language="javascript">
        function display_data3(url) {
    var xmlhttp;
    try {
        xmlhttp=new XMLHttpRequest();
    }
    catch (e) {
        try {
            xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
          catch (e) {
            try {
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e) {
                alert("Your browser does not support AJAX!");
                return false;
            }
        }
    }
   // var url='/sendsoundajax.php?sound_id='+id;
    xmlhttp.onreadystatechange=function() {
      if (xmlhttp.readyState!=4) {
            document.getElementById('display_area3').innerHTML=" <img src=\"/images/preload.gif\" width=\"16\" height=\"16\"  />";
        }
        if (xmlhttp.readyState==4 || xmlhttp.readyState=="complete") {
            document.getElementById('display_area3').innerHTML=xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET",url,true);
    xmlhttp.send(null);
}
</script>
<!-- text sizer -->

حجم الخط
<a href="javascript:ts('body',1)">+ </a> | <a href="javascript:ts('body',-1)" >-</a>
<!-- text sizer -->
<?php
//include("layouts/tbl_content_header.php");
$rq_id=$_REQUEST[id];
$rq_class=$_REQUEST[page];
$main_page=$_REQUEST[main];
$imagewidth=200;
?>


<script language="javascript">
<!--
function filledate(form) {
if(form.r_name.value=="") {
alert("فضلا أكتب أسمك");
return false;
}
else if(form.r_email.value=="") {
alert(" فضلا أكتب بريدك الالكتروني");
return false;
}
else if(form.r_answer.value=="") {
alert("فضلا أكتب التعليق");
return false;
}
} //-->
</script>



<?
$query7  = "SELECT * FROM ra_pages where publish=1 and pages_id='$main_page'";
    $result7 = mysql_query($query7) or die('Error : ' . mysql_error());

    // create the article list

    while($row7 = mysql_fetch_array($result7))
    {
  $pagename=$row7[pages];
}

    $query8  = "SELECT * FROM ra_class where publish=1 and class_id='$rq_class'";
    $result8 = mysql_query($query8) or die('Error : ' . mysql_error());

    // create the article list

    while($row8 = mysql_fetch_array($result8))
    {
$classname=$row8[class_n];

}
  

       $query1  = "SELECT * FROM ra_content where content_id='$rq_id'";
       $result1 = mysql_query($query1) or die('Error : ' . mysql_error());
$numrows=mysql_num_rows($result1);
if ($numrows<1)
{
echo"هذه الصفحة غير موجودة ربما تم حذفها من الموقع";
include("layouts/tbl_content_footer.php");
include 'footer.inc.php';
exit();
}
       while($row1 = mysql_fetch_array($result1))
       {
?>

<table width="100%"  dir="rtl"  >
<tr>
<td id="top_nav">

<img border="0" src="/images/nav.gif" width="15" height="15"> <a href="/index.html">الرئيسية</a>
>
<a href="/<? echo $row1[pages_id]; ?>.html"><? echo $pagename; ?></a>
>
<?
echo"<a href=\"/$row1[class_id]/$rq_class.html\">  $classname</a>";
?>
<br>
<img border="0" src="/images/navbit.gif" width="30" height="15">

<strong><? echo strip_tags($row1[title]); ?></strong>


</td>
</tr>







	<tr>
		<td  align="center">
		<font size="4"><? echo $page; ?></font> </td>
	</tr>

	<tr>
		<td>



<?
if($row1[picture] != "")
{

//require_once('resisepic.php');
@$mypicture = getimagesize("pic/$row1[picture]");//دالة مبيتة  تعطي عرض و طول الصورة

@$imagesize=imageResize($mypicture[0], $mypicture[1], $imagewidth);//استدعاء دالة التصغير

?>
<img hspace="6"  align="right" border="0" src="/pic/<? echo $row1[picture]; ?>"
 <?
 echo"$imagesize";
 ?>
>


<? 
}
else
{

?>



<?
}

if($session->userid != $userid or $session->user_level <= 2){
  echo $session->userid. "!=" .$row1[userid] ."<=". $session->user_level   ;
  }else{
  ?>

     <input style="background-color: #EEEEEE; border: #CCCCCC 1px solid;" type="button" name="changePic" id="changePic" value="تغير -اضافة صورة للمقال "   onclick="javascript:display_data3('/content_view_pic_change_ajax.php?id=<?php echo $row1[content_id]; ?>' +  '&myurl=' + '<?php echo $myurl; ?>' + '&uncache=' + new Date().getTime());" />
      <table border="0">
<tr><td colspan="10"><span id="display_area3"></span> </td></tr>
</table>
      <?php
}

//echo date($row1[created]);
echo"<br />";
$content= stripslashes($row1[content]);
$content = str_replace('src="', 'src="/', $content);
echo $content;
 ?></td>
</tr>
<tr>
<td>

</td>
</tr>
</table>
<font color="#AAAAAA"> ..................................................................................</font>
   <table    dir="rtl" >
<tr>
<td  width="50%"><font color="#CCCCCC">الكاتب:</font>
<font color="#AAAAAA">
 <?

$sql="SELECT * FROM ra_users where id='$row1[userid]' limit 1";

$result=mysql_query($sql);
@$n=mysql_num_rows($result);

if($n<1){
echo"الادارة";

}

else
{
while($row=mysql_fetch_array($result)){
echo"$row[first_name] " ;
echo"&nbsp;";
echo"$row[last_name] " ;

}
}
?>
</font>
 </td>

<td><font color="#CCCCCC">التاريخ:</font><font color="#AAAAAA">&nbsp;<? echo $row1['created']; ?></font> </td>
</tr>
</table>


<?
 $userid=$row1['userid'];


       }

  //update script
if($session->userid == $userid or $session->user_level > 2){

echo "<a href=\"/update_subject.html?id=$rq_id&page=$pagename&class=$classname\"><img src=\"/images/update_subject.png\" title=\"تعديل المقال\" width=\"80\" height=\"25\" border=\"0\" alt=\"تعديل المقال\" /></a> ";
}
echo "

<a href=\"/print/$rq_id/$myurl.html\">
<img border=\"0\" src=\"/images/print.png\" width=\"80\" height=\"25\" alt=\"طباعة المقال\"></a>&nbsp;&nbsp;
<a href=\"/send/$myurl.html\">
<img border=\"0\" src=\"/images/send.png\" width=\"80\" height=\"25\" alt=\"ارسل المقال لصديق\"></a></p>";

//include("layouts/tbl_content_footer.php");



?>

<BR>

<?php


$tbl_name2="ra_reply"; // Switch to table "forum_answer"

$sql2="SELECT * FROM ra_reply WHERE content_id='$rq_id' AND publish='1' order by r_id desc";
$result2=mysql_query($sql2);
@$n=mysql_num_rows($result2);
if($n > 0){
  //include("layouts/tbl_content_header.php");
  echo "تعليقات الزوار <br /> ";
while($rows=mysql_fetch_array($result2)){
?>

<table    dir="rtl" width="100%">
<tr>
<td  width="50%"><font color="#777777">الكاتب:</font><? echo $rows['r_name']; ?> </td>
<font color="#AAAAAA"> ..................................................................................</font>
<td><font color="#777777">التاريخ:</font><? echo $rows['r_datetime']; ?> </td>
</tr>

<tr>

<td colspan="2" ><? echo $rows['r_answer']; ?></td>
</tr>


</table>
<br>
<?
}
//include("layouts/tbl_content_footer.php");
}
$sql3="SELECT view FROM ra_content WHERE content_id='$rq_id'";
$result3=mysql_query($sql3);

$rows=mysql_fetch_array($result3);
$view=$rows['view'];

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql4="INSERT INTO ra_content(view) VALUES('$view') WHERE content_id='$rq_id'";
$result4=mysql_query($sql4);
}

// count more value
$addview=$view+1;
$sql5="update ra_content set view='$addview' content_id='$rq_id'";
$result5=mysql_query($sql5);



$myurl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//echo "<p><a href=ra_sendpage.php?myurl=" .$myurl. ">ارسل المقال لصديق</a></p>";



$sql13="SELECT view FROM ra_content WHERE content_id='$rq_id'";
$result13=mysql_query($sql13);

$rows13=mysql_fetch_array($result13);
$view=$rows13['view'];

// if have no counter value set counter = 1
if(empty($view)){
$view=1;
$sql14="INSERT INTO ra_content (view) VALUES('$view') content_id='$rq_id'";
$result14=mysql_query($sql14);
}

// count more value
$addview=$view+1;
$sql15="update ra_content set view='$addview' WHERE content_id='$rq_id'";
$result15=mysql_query($sql15);

?>

<BR>
<p align="right">أضف تعليق:</p>
<table  dir="rtl" width="100%" border="0" align="center" cellpadding="0" cellspacing="1" class="table1" >
<tr>
<form name="form1" method="post" action="/add_answer.html" onSubmit="return filledate(this)">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" >
<tr>
<td width="18%">الاسم</td>
<td width="3%">:</td>
<td width="79%"><input name="r_name" type="text" id="r_name" size="50" class="INPUT"></td>
</tr>
<tr>
<td>البريد</td>
<td>:</td>
<td><input name="r_email" type="text" id="r_email" size="50" class="INPUT"></td>
</tr>
<tr>
<td valign="top">التعليق</td>
<td valign="top">:</td>
<td><textarea class="INPUT" name="r_answer" cols="55"  rows="10" id="r_answer" ></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="content_id" type="hidden" value="<? echo $rq_id; ?>"></td>
<!---->
<tr>
<td valign="top">اكتب ما بالصورة اعلاه</td>
<td valign="top">:</td>
<td>
<img src="/CaptchaSecurityImages.php?width=100&height=30&characters=3" alt="captcha" />
<br />
<input id="security_code" name="security_code" type="text" class="INPUT" />
</td>
</tr>
<!---->
<td><input type="submit" name="Submit" value="ارسل"> <input type="reset" name="Submit2" value="مسح"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<?php
include 'footer.inc.php';
?>