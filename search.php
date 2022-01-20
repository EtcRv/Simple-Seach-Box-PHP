<?php
	if(ISSET($_POST['search'])){
		$keyword = $_POST['keyword'];
?>
<div>
	<h2>Result</h2>
	<hr style="border-top:2px dotted #ccc;"/>
	<?php
		require 'conn.php';
		$query = mysqli_query($conn, "SELECT * FROM `agent` WHERE `agent_name` LIKE '%$keyword%' ORDER BY `agent`.`agent_name`") or die(mysqli_error());
		while($fetch = mysqli_fetch_array($query)){
			
	?>
	<div style="word-wrap:break-word;">
		<img src="<?php echo $fetch['agent_picture']?>" />
		<h4><?php echo $fetch['agent_name']?></h4>
		<p><?php echo substr($fetch['agent_overview'], 0, 1000)?></p>
	</div>
	<hr style="border-bottom:1px solid #ccc;"/>
	<?php
		}
	?>
</div>
<?php
	}
?>