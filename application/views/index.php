<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <h1><?= $title?></h1>
    <a href="<?= base_url('index.php/siswa/halaman_tambah') ?>">Tambah Data Siswa</a>
    <div class="table">
<table border="1">
  <tr>
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
</body>
</html>