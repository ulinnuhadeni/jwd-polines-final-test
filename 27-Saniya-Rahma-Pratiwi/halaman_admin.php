<?php
    include_once('koneksi.php');

	$result = mysqli_query($konek, "SELECT * FROM tsiswa_27 order by nim ASC");

    $total = mysqli_num_rows($result);
    $no = 1;
?>

<?php
session_start();

if($_SESSION['username']=='' || $_SESSION['level']!='1')
{
    ?>
    <script language="JavaScript">
        document.location='index.php';          
    </script>
    <?php
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
	<title>REKAP DATA NILAI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center><h2>REKAP DATA NILAI SISWA DTS KOMINFO - JWD 2021</h2></center>
	<h3><a href="add.php">&nbsp;&nbsp;&nbsp;Add New Siswa</a></h3><br>
	<table id="tabel-data" class="table table-striped table-bordered">
		<thead class="table-dark">
			<th>NO</th>
			<th class="th1">NIM</th>
			<th class="th1">NAMA</th>
			<th class="th3">ALAMAT</th>
			<th class="th4">N.HARIAN <br>(N1)</th>
			<th class="th5">NILAI MID TEST<br>(N2)</th>
			<th class="th6">NILAI FINAL TEST<br>(N3)</th>
			<th class="th7">DENGAN<br>HURUF</th>
			<th class="th8">PREDIKAT</th>
			<th class="th1">ACTION</th>
        </thead>

        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
        $n1 = $user_data['n1'];
        $n2 = $user_data['n2'];
        $n3 = $user_data['n3'];

        $sum = floatval($n1) + floatval($n2) + floatval($n3);
        $average = $sum / 3;
        $grade;
        $predikat;

        if ($average > 89) {
          $grade = "A";
          $predikat = "MEMUASKAN";
        } else if ($average > 79) {
          $grade = "B";
          $predikat = "BAIK";
        } else if ($average > 69) {
          $grade = "C";
          $predikat = "CUKUP";
        } else if ($average > 59) {
          $grade = "D";
          $predikat = "KURANG";
        } else {
          $grade = "E";
          $predikat = "GAGAL";
        }
        echo "<td>".$no++."</td>"; 
        echo "<td>".$user_data['nim']."</td>";   //KOLOM 1
        echo "<td>".$user_data['nama']."</td>";  //KOLOM 2
        echo "<td>".$user_data['alamat']."</td>";  //KOLOM 3
        echo "<td>".$n1."</td>";   //KOLOM 4
        echo "<td>".$n2."</td>";   //KOLOM 5
        echo "<td>".$n3."</td>";   //KOLOM 6
        echo "<td>".$grade."</td>"; 
        echo "<td>".$predikat."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
        }
   		?>
		
	</table>
	<br>
	<b>Total Siswa adalah :&nbsp;&nbsp;<?php echo $total; ?>&nbsp;&nbsp;Orang.</b><tr>
  <p><a class="btn btn-danger btn-md" href="logout_admin.php" role="button"> Logout</a></p>
</body>
</html>
<?php
}
?>

<script>
  $(document).ready(function(){
    $('#tabel-data').DataTable();
});
</script>