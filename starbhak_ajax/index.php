<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <!-- data table -->
   <link rel="stylesheet" style="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <title>Index.php</title>
</head>
<body>
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<!-- bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- datatable -->
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<div class="table-responsive">
  <table class="table table-striped table-bordered" style="width:100%" id="data">
    <thead>
      <tr>
        <td>NO</td>
        <td>Nama Siswa</td>
        <td>Alamat</td>
        <td>Jurusan</td>
        <td>Jenis Kelamin</td>
        <td>Tanggal Masuk</td>
        <td>Aksi</td>
      </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $no = 1;
            $query = "SELECT * FROM `tbl_siswa` ORDER BY `id` DESC";
            $dewan1 = $db1->prepare($query);
            $dewan1->execute();
            $res1 = $dewan1->get_result();
            while ($row = $res1->fetch_assoc()) {
                $id = $row['id'];
                $nama_siswa = $row['nama_siswa'];
                $alamat = $row['alamat'];
                $jurusan = $row['jurusan'];
                $jenis_kelamin = $row['jenis_kelamin'];
                $tgl_masuk = $row['tgl_masuk'];     
            
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $nama_siswa; ?></td>
            <td><?php echo $alamat; ?></td>
            <td><?php echo $jurusan; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $tgl_masuk; ?></td>
            <td><button style="font-size:11px;" class="btn btn-primary" id='detail' name='detail' title='Lihat Detail'><i class="fa fa-search"></i></button></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>