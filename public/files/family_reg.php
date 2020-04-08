<?php require_once 'header.inc.php';   ?>
<script type="text/javascript">
    var abc = 0;      // Declaring and defining global increment variable.
$(document).ready(function() {
//  To add new input file field dynamically, on click of "Add More Files" button below function will be executed.
$('#add_more').click(function() {
$(this).before($("<div/>", {
id: 'filediv'
}).fadeIn('slow').append($("<input/>", {
name: 'file[]',
type: 'file',
id: 'file'
}), $("<br/><br/>")));
});
// Following function will executes on change event of file input to select different file.
$('body').on('change', '#file', function() {
if (this.files && this.files[0]) {
abc += 1; // Incrementing global variable by 1.
var z = abc - 1;
var x = $(this).parent().find('#previewimg' + z).remove();
$(this).before("<div id='abcd" + abc + "' class='abcd'><img id='previewimg" + abc + "' src=''/></div>");
var reader = new FileReader();
reader.onload = imageIsLoaded;
reader.readAsDataURL(this.files[0]);
$(this).hide();
$("#abcd" + abc).append($("<img/>", {
id: 'img',
src: 'x.png',
alt: 'delete'
}).click(function() {
$(this).parent().parent().remove();
}));
}
});
// To Preview Image
function imageIsLoaded(e) {
$('#previewimg' + abc).attr('src', e.target.result);
};
$('#upload').click(function(e) {
var name = $(":file").val();
if (!name) {
alert("First Image Must Be Selected");
e.preventDefault();
}
});
});
</script>
<style>
@import "http://fonts.googleapis.com/css?family=Droid+Sans";
form{
background-color:#fff
}
#maindiv{
width:960px;
margin:10px auto;
padding:10px;
font-family:'Droid Sans',sans-serif
}
#formdiv{
width:500px;
float:left;
text-align:center
}
form{
padding:40px 20px;
box-shadow:0 0 10px;
border-radius:2px
}
h2{
margin-left:30px
}
.upload{
background-color:red;
border:1px solid red;
color:#fff;
border-radius:5px;
padding:10px;
text-shadow:1px 1px 0 green;
box-shadow:2px 2px 15px rgba(0,0,0,.75)
}
.upload:hover{
cursor:pointer;
background:#c20b0b;
border:1px solid #c20b0b;
box-shadow:0 0 5px rgba(0,0,0,.75)
}
#file{
color:green;
padding:5px;
border:1px dashed #123456;
background-color:#f9ffe5
}
#upload{
margin-left:45px
}
#noerror{
color:green;
text-align:left
}
#error{
color:red;
text-align:left
}
#img{
width:17px;
border:none;
height:17px;
margin-left:-20px;
margin-bottom:91px
}
.abcd{
text-align:center
}
.abcd img{
height:100px;
width:100px;
padding:5px;
border:1px solid #e8debd
}
b{
color:red
}
</style>
<?php include("includes/umalquraCal.class.php"); ?>
<?php
$myurl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];  
$gmt=time();// for meladi date
$ye = date('Y', $gmt);
$mont = date('m', $gmt);
$da = date('d', $gmt);
$ye=abs($ye);
$ye=trim($ye);
$mont=abs($mont);
$mont=trim($mont);
$da=abs($da);
$da=trim($da);
$begin_date=time();//for higri
$dateC=new uCal();
$date=$dateC->g2u($da, $mont, $ye) ;
?>


<!-- text sizer -->

<!-- text sizer -->
<?php
//include("layouts/tbl_content_header.php");
$rq_id=$_REQUEST[id];
$rq_class=$_REQUEST[page];
$main_page=$_REQUEST[main];
$imagewidth=200;
?>


<?php if(isset($_POST['SubmitAdd'])){

//include("layouts/tbl_content_header.php");
$first_name=$database->escape_value($_POST['first_name']);
$third_name = $database->escape_value($_POST['third_name']);
$family = $database->escape_value($_POST['family']);
$id_num=$database->escape_value($_POST['id_num']);
$second_name=$database->escape_value($_POST['second_name']);

$area=$database->escape_value($_POST['area']);
$job=$database->escape_value($_POST['job']);
$sharing = $database->escape_value($_POST['sharing']);
$reg_day=$database->escape_value($_POST['reg_day']);
$reg_month = $database->escape_value($_POST['reg_month']);
$mobile = $database->escape_value($_POST['mobile']);
$reg_year = $database->escape_value($_POST['reg_year']);

//validationForm::isNotNumeic("$date", "عفوا حدد نوع الاعلان");
//validationForm::isNotNumeic("$second_name", "عفوا اختر المدينة");
//validationForm::isNotNumeic("$third_name", "عفوا اختر النوع");
//validationForm::isNotNumeic("$family", "عفوا اختر الماركة");
//validationForm::isNotNumeic("$id_num", "عفوا اختر الموديل");


//validationForm::isNotEmpty("$structurecolor", "عفوا اكتب لون السيارة");

//validationForm::getErrorsRedierct("$pagename");


$j = 0;     // Variable for indexing uploaded image.
$target_path = "files/";     // Declaring Path for uploaded images.

// Loop to get individual element from the array
$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['userfile']['name'][0]));   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];  
// Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (($_FILES["file"]["size"][0] < 100000)     // Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['userfile']['tmp_name'][0], $target_path)) {
// If file moved to uploads folder.
$ext1 = explode('/', $target_path);  
 $id_pic=$ext1[1];
echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
} else {     //  If File Was Not Moved.
echo $j. ').<span id="error">please try again!.</span><br/><br/>';
$id_pic='';
        $profile_pc='';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
$id_pic='';
 $profile_pc='';
}


//--------------------------------
$target_path1 = "files/"; 

$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
$ext = explode('.', basename($_FILES['userfile']['name'][1]));   // Explode file name from dot(.)
$file_extension = end($ext); // Store extensions in the variable.
$target_path1 = $target_path1 . md5(uniqid()) . "." . $ext[count($ext) - 1];  
// Set the target path with a new name of image.
$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
if (($_FILES["file"]["size"][1] < 100000)     // Approx. 100kb files can be uploaded.
&& in_array($file_extension, $validextensions)) {
if (move_uploaded_file($_FILES['userfile']['tmp_name'][1], $target_path1)) {
// If file moved to uploads folder.
$ext11 = explode('/', $target_path1);  
 $profile_pc=$ext11[1];
echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
} else {     //  If File Was Not Moved.
echo $j. ').<span id="error">please try again!.</span><br/><br/>';
$profile_pc='';
        $profile_pc='';
}
} else {     //   If File Size And File Type Was Incorrect.
echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
$profile_pc='';
 $profile_pc='';
}




echo '-------';
// Enter info into the Database.
$acitive_user=USER_ACTIVATE;

$date=time();

$sql=mysql_query("INSERT INTO `family` (
`id` ,
`date` ,
`first_name` ,
`second_name` ,
`third_name` ,
`family` ,
`id_num` ,
`mobile` ,
`reg_day` ,
`reg_month`,
`reg_year`,
`area` ,
`job` ,
`sharing` ,
`id_pic` ,
`profile_pc`
)
VALUES (
NULL , '$date', '$first_name', '$second_name', '$third_name', '$family', '$id_num', '$mobile', '$reg_day', '$reg_month', '$reg_year' , '$area', '$job', '1', '$id_pic', '$profile_pc'
)") or die (mysql_error());
if(!$sql){
   $site_email=E_MAIL;
    echo "هناك خطأ في   الاضافة فضل اتصل بمدير الموقع
<br><a href=\"mailto:$site_email\">$site_email</a>";
} else {







// print " <meta http-equiv=\"refresh\" content=\"0; url=index.php\" /> \n";



}
echo 'Ok';
//print " <meta http-equiv=\"refresh\" content=\"0; url=new_ad.php\" /> \n";
 include("footer.inc.php");
 exit();
}
?>





  <div class="container">
            <div class="row">
                <div class="col-sm-8">
                   
                    <article class="content">
                       
                       
                  
                        <div class="form-area">
                            <h3 class="category-headding "> تسجيل  العائلة</h3>
                            <div class="headding-border"></div>

                            <form name="form1" method="post" action="/family_reg.php" enctype="multipart/form-data">
                          
                                <div class="row">
                                    <div class="col-sm-3">
                                        <span class="input">
                                            <input class="input_field" name="first_name" required="" type="text" id="input-1">
                                            <label class="input_label" for="first_name">
                                                <span class="input_label_content" data-content="الاسم الاول">الاسم الاول</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="input">
                                            <input class="input_field" name="second_name" required="" type="text" id="input-1">
                                            <label class="input_label" for="second_name">
                                                <span class="input_label_content" data-content="الاب">الاب</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="input">
                                            <input class="input_field" name="third_name" required="" type="text" id="input-1">
                                            <label class="input_label" for="third_name">
                                                <span class="input_label_content" data-content="الجد">الجد</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-3">
                                        <span class="input">
                                            <input class="input_field" name="family" required="" type="text" id="input-1">
                                            <label class="input_label" for="family">
                                                <span class="input_label_content" data-content="العائلة">العائلة</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="input">
                                            <input name="id_num" required="" class="input_field" type="number" id="input-2">
                                            <label  class="input_label" for="id_num">
                                                <span class="input_label_content" data-content=" السجل المدني"> السجل المدني</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="input">
                                            <input name="mobile" required="" class="input_field" type="number" id="input-2">
                                            <label  class="input_label" for="mobile">
                                                <span class="input_label_content" data-content="  الجوال">  الجوال</span>
                                            </label>
                                        </span>
                                    </div>
                                    <div class="col-sm-4">
                                        <table >
<tr >
    <td style="font-size: 15px;"> الميلاد:</td>

<td >

<span class="input" >
    <select name="reg_day" class="input_field" id="input-1" required="">
 <option></option>
<?php

for($i=1; $i<32; $i++)
{
?>

<option value="<? echo $i; ?>"><? printf ("%02.0f", $i); ?></option>
<?
}
?>
</select>
    <label  class="input_label" for="reg_day">
                                                <span class="input_label_content" data-content="  اليوم">  اليوم</span>
                                            </label>
</span>
</td>
<td>
:
</td>

<td>
    <span class="input">
        <select name="reg_month" class="input_field" required="">
    <option></option>
<?php
for($i=1; $i<13; $i++)
{
?>

<option value="<? echo $i; ?>"><? printf ("%02.0f", $i); ?></option>
<?php
}
?>
</select>
         <label  class="input_label" for="reg_month">
                                                <span class="input_label_content" data-content="  الشهر">  الشهر</span>
                                            </label>
</span>
</td>
<td>
:
</td>

<td>
     <span class="input">
         <select name="reg_year" class="input_field" required="">
 <option></option>
<?php

for($i=1400; $i<1450; $i++)
{
?>

<option value="<? echo $i; ?>"><? echo $i; ?></option>
<?php
}
?>
</select>
  <label  class="input_label" for="reg_year">
                                                <span class="input_label_content" data-content="  السنة">  السنة</span>
                                            </label>
</span>   
</td>

</tr>
 </table>
                                    </div>
                                    <div class="col-sm-6">
                                        <span class="input">
                                            <select name="area" required="" class="input_field">
                                                <option></option>
                                                <option value="1">الرياض</option>
                                                <option value="2">حائل</option>
                                                <option value="3">حفر الباطن</option>
                                            </select>
                                            <label class="input_label" for="area">
                                                <span class="input_label_content" data-content="المنطقة">المنطقة</span>
                                            </label>
                                        </span>
                                        
                                    </div>
                                     <div class="col-sm-6">
                                        <span class="input">
                                            <select name="job" required="" class="input_field">
                                                <option></option>
                                                <option value="1">موظف</option>
                                                <option value="2">غير موظف</option>
                                                <option value="3"> رجل اعمال</option>
                                            </select>
                                            <label class="input_label" for="job">
                                                <span class="input_label_content" data-content="لوظيفة">الوظيفة</span>
                                            </label>
                                        </span>
                                        
                                    </div>
                                    
                                    
                                    
                                    <div id="filediv">
                                        <input name="userfile[]" type="file" id="file" /><br />
                                        <input name="userfile[]" type="file" id="file" /><br />
                                    
                                    </div>            
                                    
                                    
                                    
                                    <div class="col-sm-12">
                                                                                    <img src="/CaptchaSecurityImages.php?width=100&height=30&characters=3" alt="captcha" />

                                        <span class="input">
                                            <input class="input_field"  required="" type="text" id="security_code" name="security_code">
                                            <label class="input_label" for="message">
                                                <span class="input_label_content" data-content="كود الامان">اكتب كود الامان</span>
                                            </label>
                                        </span>
                                                                                   <input name="content_id" type="hidden" value="<?php echo $rq_id; ?>"> 
                                                                                    <input type="hidden" name="MyUrl" value="<?php echo $myurl; ?>">
                                        <button type="submit" name="SubmitAdd" class="btn btn-style"> تسجيل</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                     
                        <!-- comment box
                        ============================================ -->
                        

     
                    </article>
                </div>
              
            </div>
                
        </div>









<?php require_once 'footer.inc.php';   ?>