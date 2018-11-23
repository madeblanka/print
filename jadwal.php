<!DOCTYPE html>
<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM jadwal ORDER BY tgl ASC")
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="inputjadwal.php">Add New Jadwal</a><br/><br/>

        <table width='100%' border=1>

        <tr>
            <th>Nama</th> <th>matpel</th> <th>jam</th> <th>tgl</th> <th>hari</th> <th>Update</th>
        </tr>
        <?php
        while($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['matpel']."</td>";
            echo "<td>".$user_data['jam']."</td>";
            echo "<td>".$user_data['tgl']."</td>";
            echo "<td>".$user_data['hari']."</td>";
            echo "<td><a href='edit.php?id_jadwal=$user_data[id_jadwal]'>Edit</a> | <a href='delete.php?id_jadwal=$user_data[id_jadwal]'>Delete</a></td></tr>";
        }
        ?>
        </table>
    </form>
  </body>
</html>
