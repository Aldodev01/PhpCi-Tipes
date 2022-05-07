<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link href="http://localhost/pustaka-boking/application/views/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="d-flex justify-content-center container-xl flex-column">
    <nav class="nav-head">
      <div class="nav-left">
<img src="http://students.bsi.ac.id/mahasiswa/gambar/logo_ubsi.png" width="70"/>
        <h3>Pustaka Booking</h1> 
      </div>
    <a class="btn btn-light" href="<?= base_url('index.php/siswa/halaman_tambah') ?>">Tambah Data Siswa</a>
</nav>
<br/>
<br/>
<br/>
<br/>
<br/>

    <h1><?= $title?></h1>
    <br/>
    <br/>
    <br/>

    <div class="table">
<table  class="table table-striped table-hover table-">
  <tr class="table-dark">
    <th>No</th>
    <th>Nama Siswa</th>
    <th>NIS</th>
    <th>Kelas</th>
    <th>Tanggal Lahir</th>
    <th>Tempat Lahir</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Agama</th>
  </tr>
  <tr>
    <?php foreach ($data_siswa as $i => $data) : ?>
      <td><?= ++$i; ?></td>
    <td><?= $data->nama_siswa ?></td>
    <td><?= $data->nis ?></td>
    <td><?= $data->kelas ?></td>
    <td><?= $data->tanggal_lahir ?></td>
    <td><?= $data->tempat_lahir ?></td>
    <td><?= $data->alamat ?></td>
    <td><?= $data->jenis_kelamin ?></td>
    <td><?= $data->agama ?></td>
  </tr>
  <?php endforeach; ?>
</table>


</div>
</div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>