<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="http://localhost/pustaka-boking/application/views/styles.css" rel="stylesheet">
    <title>Form Data</title>
</head>

<body>
<!-- <font size="+2"><strong>Form Data Siswa</b></font> -->
<br /><br />

<div class="d-flex justify-content-center container-xl flex-column">
<form method="POST" action="<?= base_url('index.php/siswa/fungsiTambah'); ?>">

    <nav class="nav-head">
      <div class="nav-left">
<img src="http://students.bsi.ac.id/mahasiswa/gambar/logo_ubsi.png" width="70"/>
        <h3>Pustaka Booking</h1> 
      </div>

    <a class="btn btn-light" href="<?= base_url('index.php') ?>">Kembali</a>

</nav>
<br/>
<br/>
<br/>

<h2>Tambah Data Mahasiswa Baru </h2>
<br/>
<div class="input-container">

    <table class="input-wrap-mhs">
         <td>
        <br/>
        <td/>
        <tr class="ml-20">
            <td id="indeks"><label for="nama_siswa"><strong>Nama Siswa</b></label></td>
            <td>: &nbsp &nbsp &nbsp<input class="input-mhs" type="text" name="nama_siswa" id="nama_siswa" value="<?=set_value('nama_siswa');?>" /></td>
        </tr>
        <td>
        <br/>
        <td/>
        <tr>
            <td id="indeks"><label for="nis"><strong>NIS </b></label></td>
            <td>: &nbsp &nbsp &nbsp<input type="text" class="input-mhs" name="nis" id="nis" value="<?=set_value('nis');?>" /></td>
        </tr>
         <td>
        <br/>
        <td/>
        <tr>
            <td id="indeks"><label for="kelas"><strong>Kelas </b></label></td>
            <td>: &nbsp &nbsp &nbsp<input type="text" class="input-mhs"  name="kelas" id="kelas" value="<?=set_value('kelas');?>"/></td>
        </tr>
         <td>
        <br/>
        <td/>
        <tr>
            <td id="indeks"><label for="tanggal_lahir"><strong>Tanggal Lahir</b> </label></td>
            <td>: &nbsp &nbsp &nbsp<input type="date" class="input-mhs" name="tanggal_lahir"  /></td>
        </tr>
         <td>
        <br/>
        <td/>
        <tr>
            <td id="indeks"><label for="tempat_lahir"><strong>Tempat Lahir</b> </label></td>
            <td>: &nbsp &nbsp &nbsp<input type="text" class="input-mhs" name="tempat_lahir" id="tempat_lahir" value="<?=set_value('tempat_lahir');?>" /></td>
        </tr>
         <td>
        <br/>
        <td/>
        <tr>
            <td id="indeks"><label for="alamat"><strong>Alamat</b> </label></td>
            <td>: &nbsp &nbsp &nbsp<input type="text" class="input-mhs" name="alamat" id="alamat" value="<?=set_value('alamat');?>" /></td>
        </tr>
         <td>
        <br/>
        <td/>
        <tr>
            <td id="indeks"><label for="jenis_kelamin"><strong>Jenis Kelamin</b></label> </td>
            <td> : &nbsp &nbsp
            <input type="radio" name="jenis_kelamin" value="Pria" <?php if (set_value('jenis_Kelamin') == "Pria") : echo "checked"; endif; ?>/><label for="Pria">&nbsp Pria</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (set_value('jenis_Kelamin') == "Perempuan") : echo "checked"; endif; ?>/><label for="Perempuan">&nbsp Perempuan</label>
        </td>
        </tr>
         <td>
        <br/>
        <td/>
        <tr>
            <td id="indeks"><label for=""><strong>Agama</b></label> </td>
            <td>
                : &nbsp &nbsp
            <input type="radio" name="agama" value="Islam" <?php if (set_value('agama') == "Islam") : echo "selected"; endif; ?>/>
            <label for="Laki-Laki">&nbsp Islam</label>
            <input type="radio" name="agama" value="Kristen Protestan" <?php if (set_value('agama') == "Kristen Protestan") : echo "selected"; endif; ?> />
            <label for="Perempuan">&nbsp Kristen Protestan</label>        
            <input type="radio" name="agama" value="Kristen Katolik" <?php if (set_value('agama') == "Kristen Katolik") : echo "selected"; endif; ?> /><label for="Perempuan">&nbsp Kristen Katolik</label>
            <input type="radio" name="agama" value="Hindu" <?php if (set_value('agama') == "Hindu") : echo "selected"; endif; ?> /><label for="Perempuan">&nbsp Hindu</label>
            <input type="radio" name="agama" value="Budha" <?php if (set_value('agama') == "Budha") : echo "selected"; endif; ?> /><label for="Perempuan">&nbsp Budha</label>
            <input type="radio" name="agama" value="Konghucu" <?php if (set_value('agama') == "Konghucu") : echo "selected"; endif; ?> /><label for="Perempuan">&nbsp Konghucu</label>
        </td>
        
            
        </tr>
        <td>
        <br/>
        <td/>
    
        <tr>
            <td>
        <div class="w-100 ">
        <input type="submit" class="btn btn-primary value="Submit">
            <a href="<?php echo base_url();?>" class="btn btn-danger">Batal</a>
        </div>
        </td>
        
        </tr>
             <td>
        <br/>
        <td/>
            
        
    
    </table>  
</div>




</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>