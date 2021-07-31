<?php
include("header.php");
	require_once("perpage.php");	
	require_once("dbcontroller.php");
	$db_handle = new DBController();
	
	$name = "";
	$code = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("code");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "code":
						$code = $v;
						$queryCondition .= "code LIKE '" . $v . "%'";
						break;
				}
			}
		}
	}
	$orderby = " ORDER BY id desc"; 
	$sql = "SELECT * FROM toy " . $queryCondition;
	$href = 'verfier.php';					
		
	$perPage = 6; 
	$page = 1;
	if(isset($_POST['page'])){
		$page = $_POST['page'];
	}
	$start = ($page-1)*$perPage;
	if($start > 0) $start = 0;
		
	$query =  $sql . $orderby .  " limit " . $start . "," . $perPage; 
	$result = $db_handle->runQuery($query);
	
	if(!empty($result)) {
		$result["perpage"] = showperpage($sql, $perPage, $href);
	}?>
	<body>
		<div>
		<a id="btnAddAction" href="add.php">لديك الاكسجين ؟ اضفه الأن </a>
		</div>
    <div id="toys-grid">      
			<form name="frmSearch" method="post" action="verfier.php">
			<div class="search-box">
			<p><input type="text" placeholder="الولاية" name="search[code]" class="demoInputBox" value="<?php echo $code; ?>"	/><input type="submit" name="go" class="btnSearch" value="بحث"></p>
			</div>
			<table cellpadding="10" cellspacing="1">
        <thead>
					<tr>
          <th><h3>إسم  صاحب الاكسجين</h3></th>
          <th><h3>الولاية الموجود بها </h3></th>          
          <th><h3>رقم هاتف صاحب الاكسجين</h3></th>
		  <th><h3>google map</h3></th>
					<th><h3>اخر مرة توفرة فيها </h3></th>
					<th><h3>تعديل اخر مرة توفرة</h3></th>
					</tr>
				</thead>
				<tbody>
					<?php
					if(!empty($result)) {
						foreach($result as $k=>$v) {
						  if(is_numeric($k)) {
					?>
          <tr>
					<td><?php echo $result[$k]["name"]; ?></td>
          <td><?php echo $result[$k]["code"]; ?></td>
					<td><?php echo $result[$k]["phone"]; ?></td>
					<td><a href="<?php echo $result[$k]["place"]; ?>">اضغط هنا لدخول الى google map</a></td> 

					<td><?php echo $result[$k]["date"]; ?></td> 
					<td>
					<a class="btnEditAction" href="contact_tel.php?id=<?php echo $result[$k]["id"]; ?>">تعديل اخر مرة توفرة</a> 
					</td>
			
					<?php
						  }
					   }
                    }
					if(isset($result["perpage"])) {
					?> 
					<?php } ?>
				<tbody>
			</table>
			</form>	
		</div>
		<?php
		include("footer.php");
?>
	</body>
</html>