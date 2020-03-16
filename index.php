<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
	<body>
	<form method="post">
		<div id="main-container">
			<div id="content">
				<table style="margin:auto;margin-top:20px;">
					<tr>
						<td>
							<div style="margin-left:60px;font-weight:bold;">
								<label>
									QUESTION-2
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div style="">
								<label>
									Historically Spent:
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="hspent" style="width:200px;height:25px;text-align:center;" placeholder="0.00" required></input>
						</td>
					</tr>
					<tr>
						<td>
							<div style="">
								<label>
									Recent Spent:
								</label>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<input type="number" name="rspent" style="width:200px;height:25px;text-align:center;" placeholder="0.00" required></input>
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="submit" value="SUBMIT" style="width:200px;height:25px;cursor:pointer;font-size:12px;"></input>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</form>
	</body>	
</html>
<?php
if(isset($_POST["submit"]))
{
	$hspent = $_POST['hspent'];  
	$rspent= $_POST['rspent'];
	$numadd=$hspent+$rspent;
	if($numadd<125)
	{
		echo"<script>alert('You Are a White Member.')</script>";
	}
	if($numadd>=125 and $numadd<1000)
	{
		echo"<script>alert('You Are a Blue Member.')</script>";
	}
	if($numadd>=1000 and $numadd<2000)
	{
		echo"<script>alert('You Are a Silver Member.')</script>";
	}
	if($numadd>=2000)
	{
		echo"<script>alert('You Are a Gold Member.')</script>";
	}
}
?>