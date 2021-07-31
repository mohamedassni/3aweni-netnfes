
<?php
include("header.php");
require_once("dbcontroller.php");


$db_handle = new DBController();
if(!empty($_POST["submit"])) {
    $query = "INSERT INTO toy(name, code, phone, place, date) VALUES('".$_POST["name"]."','".$_POST["code"]."','".$_POST["phone"]."','".$_POST["place"]."','".$_POST["date"]."'  )";
        $result = $db_handle->executeQuery($query);
    if(!$result){
			$message="Problem in Adding to database. Please Retry.";
	} else {
		$message = "تم اضافة هاتفك نتمنى ان تجده شكرا لتقتك بنا";
echo "<script type='text/javascript'>alert('$message');
window.open('verfier.php','_self')
</script>";
	}
}
?>


<form name="frmToy" method="post" action="" id="frmToy" onClick="return validate();">
<div id="mail-status"></div>
<div>
<label style="padding-top:20px;"> اسم صاحب الاكسجين :</label>
<span id="name-info" class="info"></span><br/>
<input type="text" name="name" id="name" class="demoInputBox">
</div>
<div>
<label>الولاية الموجود بها : </label>
<span id="code-info" class="info"></span><br/>
<input type="text" name="code" id="code" class="demoInputBox">
</div>
<div>
<label>رقم هاتف صاحب الاكسجين:</label> 
<span id="phone-info" class="info"></span><br/>
<input type="text" name="phone" id="phone" class="demoInputBox">
</div>
<div>
<label> رابط google map :</label> 

<span id="place-info" class="info"></span><br/>
<input type="text" name="place" id="place" class="demoInputBox">
</div>
<div>
	<label> متى اخر مرة توفرة فيها ؟ :</label>
<span id="date-info" class="info"></span><br/>
<input type="date" name="date" id="date" class="demoInputBox">
</div>
<div>

<div>
<input type="submit" name="submit" id="btnAddAction" value="Add" />
</div>
</div>
<?php
include("footer.php");
?>