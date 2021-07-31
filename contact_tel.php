<?php
include("header.php");
require_once("dbcontroller.php");
$db_handle = new DBController();

$result = $db_handle->runQuery("SELECT * FROM toy WHERE id='" . $_GET["id"] . "'");
?>



<div id="mail-status"></div>
<div>
<label style="padding-top:20px;">اسم صاحب الاكسجين:</label>
<span id="name-info" class="info"></span><br/>
<?php echo $result[0]["name"]; ?>
</div>
<br>
<br>
<br>
<div>
<label>اخر مرة تم توفير الاكسجين : </label>
<span id="code-info" class="info"></span><br/>
<input type="date" name="code" id="code" class="demoInputBox"value="<?php echo $result[0]["date"]; ?>">
</div>

</div>