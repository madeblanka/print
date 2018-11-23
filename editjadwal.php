<?php include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id_jadwal = $_POST['id_jadwal'];

	$nama=$_POST['nama'];
	$matpel=$_POST['matpel'];
	$jam=$_POST['jam'];
  $tgl=$_POST['tgl'];
  $hari=$_POST['hari'];

	// update user data
	$result = mysqli_query($mysqli, "UPDATE jadwal SET nama='$nama',jam='$jam',matpel='$matpel' WHERE id_jadwal=$id_jadwal");

	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id_jadwal
// Getting id_jadwal from url
$id_jadwal = $_GET['id_jadwal'];

// Fetech user data based on id_jadwal
$result = mysqli_query($mysqli, "SELECT * FROM jadwal WHERE id_jadwal=$id_jadwal");

while($user_data = mysqli_fetch_array($result))
{
  $nama=$_POST['nama'];
	$matpel=$_POST['matpel'];
	$jam=$_POST['jam'];
  $tgl=$_POST['tgl'];
  $hari=$_POST['hari'];}
?>
<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="jadwal.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="editjadwal.php">
    <table border="0">
    <tr>
      <td>nama</td>
      <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
    </tr>
    <tr>
      <td>matpel</td>
      <td><input type="text" name="matpel" value=<?php echo $matpel;?>></td>
    </tr>
    <tr>
      <td>jam</td>
      <td><input type="text" name="jam" value=<?php echo $jam;?>></td>
    </tr>
    <tr>
      <td>tgl</td>
      <td><input type="date" name="tgl" value=<?php echo $tgl;?>></td>
    </tr>
    <tr>
      <td>hari</td>
      <td><input type="text" name="hari" value=<?php echo $hari;?>></td>
    </tr>
    <tr>
      <td><input type="hidden" name="id_jadwal" value=<?php echo $_GET['id_jadwal'];?>></td>
      <td><input type="submit" name="update" value="Update"></td>
    </tr>
  </table>
	</form>
</body>
</html>
