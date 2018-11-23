
<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="jadwal.php">Go to Home</a>
	<br/><br/>

	<form action="inputjadwal.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>matpel</td>
				<td><input type="text" name="matpel"></td>
			</tr>
			<tr>
				<td>jam</td>
				<td><input type="time" name="jam"></td>
			</tr>
      <tr>
				<td>tanggal</td>
				<td><input type="date" name="tgl"></td>
			</tr>
      <tr>
				<td>hari</td>
				<td>
          <input list="hari" name="hari">
          <datalist id="hari">
          <option value="senin">
          <option value="selasa">
          <option value="rabu">
          <option value="kamis">
          <option value="jumat">
          <option value="sabtu">
        </datalist>
       </td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['name'];
		$matpel = $_POST['matpel'];
		$jam = $_POST['jam'];
		$tgl = $_POST['tgl'];
		$hari = $_POST['hari'];
		// include database connection file
		include_once("config.php");

		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO jadwal(nama,matpel,jam,tgl,hari) VALUES('$nama','$matpel','$jam','$tgl','$hari')");

		// Show message when user added
		echo "Jadwal added successfully. <a href='jadwal.php'>View Jadwal</a>";
	}
	?>
</body>
</html>
