<?php
require_once 'header.php';
require_once 'Apriori-Algorithm/class.apriori.php';

$dataset = array();
$students = $db->rawQuery("SELECT * FROM student order by studentno");
$rows = $db->rawQuery("SELECT * FROM `examination` left join result_type on (result_type.id = examination.result) order by examination.studentno");

foreach($students as $student){
	$set = array();
	foreach($rows as $row){
		if($row['studentno'] == $student['studentno']){
			array_push($set, $row['issue']);
		}
	}
	if(count($set) <> 0){
		array_push($dataset, $set);
	}

}

if(isset($_POST['submitParameters'])){
$Apriori = new Apriori();
	$Apriori->setMaxScan($_POST['maximumScan']);       //Scan 2, 3, ...
	$Apriori->setMinSup($_POST['minimumSupport']);         //Minimum support 1, 2, 3, ...
	$Apriori->setMinConf($_POST['minimumConfidence']);       //Minimum confidence - Percent 1, 2, ..., 100
	$Apriori->setDelimiter(',');    //Delimiter
	$Apriori->process($dataset);

}else{
	$Apriori = new Apriori();
	//default values
	$Apriori->setMaxScan(100);       //Scan 2, 3, ...
	$Apriori->setMinSup(3);         //Minimum support 1, 2, 3, ...
	$Apriori->setMinConf(75);       //Minimum confidence - Percent 1, 2, ..., 100
	$Apriori->setDelimiter(',');    //Delimiter
	$Apriori->process($dataset);
}

?>
<pre>
<?php
// print_r($dataset);
?>
	</pre>
<center>
	<div style = "height: 20px"></div>
<a href = "index.php">back</a>
<h3>Parameters</h3>
<table>
	<form action= '' method = 'post'>
		<tr><td>Maximum scan: </td><td><input value = <?php echo (isset($_POST['maximumScan'])) ? $_POST['maximumScan'] : "100";?> type = 'text' name = 'maximumScan' /></td></tr>
		<tr><td>Minimum support: </td><td><input value = <?php echo (isset($_POST['minimumSupport']))  ? $_POST['minimumSupport'] : "3";?> type = 'text' name = 'minimumSupport' /></td></tr>
		<tr><td>Minimum confidence: </td><td><input value = <?php echo (isset($_POST['minimumConfidence'])) ? $_POST['minimumConfidence'] : "75";?> type = 'text' name = 'minimumConfidence' /></td></tr>
		<tr><td colspan = '2'><input type = 'submit' name = 'submitParameters' value = 'submit parameters'/></td></tr>
		</form>
</table>
</center>
<?php
require_once 'aprioriTable.php';
require_once 'footer.php';
?>