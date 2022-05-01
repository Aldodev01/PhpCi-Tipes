<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Form Data</title>
</head>

<body>
<font size="+2"><b>Form Data Siswa</b></font>
<br /><br />

<form method="POST" action="<?= base_url('index.php/siswa/fungsiTambah'); ?>">
<div class="d-flex justify-content-center container-xl flex-column">

    <div class="div">
        <div class="input-group mb-3">
          <label  class="input-group-text" for="nama_siswa"><b>Nama Siswa</b></label>
            <input type="text" class="form-control" placeholder="Nama Siswa" name="nama_siswa" id="nama_siswa" value="<?=set_value('nama_siswa');?>" >
        </div>
    </div>
    <div class="div">
        <div class="input-group mb-3">
            <span class="input-group-text" id="indeks" for="nis">NIS</span>
            <input type="text" class="form-control" placeholder="NIS" aria-label="NIS" aria-describedby="basic-addon1" name="nis" id="nis" value="<?=set_value('nis');?>">
        </div>
    </div>
    <div class="div">
        <div class="input-group mb-3">
            <span class="input-group-text" id="indeks" for="kelas">Kelas</span>
            <input type="text" class="form-control" placeholder="Kelas" aria-label="Kelas" aria-describedby="basic-addon1" type="text"  name="kelas" id="kelas" value="<?=set_value('kelas');?>">
        </div>
    </div>
    <div class="div">
        <div class="input-group mb-3">
            <span class="input-group-text" id="indeks" for="tanggal_lahir">Tanggal Lahir</span>
            <input type="date" class="form-control" placeholder="Tanggal Lahir" aria-label="Tanggal Lahir" aria-describedby="basic-addon1" type="text" name="tanggal_lahir">
        </div>
    </div>
    <div class="div">
        <div class="input-group mb-3">
            <span class="input-group-text" id="indeks" for="tempat_lahir">Tempat Lahir</span>
            <input type="text" class="form-control" placeholder="Tempat Lahir" aria-label="Tempat Lahir" aria-describedby="basic-addon1" type="text" name="tempat_lahir" id="tempat_lahir" value="<?=set_value('tempat_lahir');?>">
        </div>
    </div>
    <div class="div">
        <div class="input-group mb-3">
            <span class="input-group-text" id="indeks" for="alamat">Alamat</span>
            <input type="text" class="form-control" placeholder="Alamat" aria-label="Alamat" aria-describedby="basic-addon1" type="text"  name="alamat" id="alamat" value="<?=set_value('alamat');?>" >
        </div>
    </div>
    <div class="div">
        <div class="input-group mb-3">
            <span class="input-group-text" id="indeks" for="jenis_kelamin">Jenis Kelamin</span>
            <input type="radio" class="form-control" disabled placeholder="Jenis Kelamin" aria-label="Jenis Kelamin" aria-describedby="basic-addon1" type="text"  >
        </div>
        <div class="justify-content-between">
        <input type="radio" name="jenis_kelamin" value="Pria" <?php if (set_value('jenis_Kelamin') == "Pria") : echo "checked"; endif; ?>/><label for="Pria">&nbsp Pria</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (set_value('jenis_Kelamin') == "Perempuan") : echo "checked"; endif; ?>/><label for="Perempuan">&nbsp Perempuan</label>
        </div>
    </div>
<br/>
    <div class="div">
        <div class="input-group mb-3">
            <span class="input-group-text" id="indeks" for="">Agama</span>
            <input type="radio" class="form-control" disabled placeholder="Agama" aria-label="Agama" aria-describedby="basic-addon1" type="text"  >
        </div>
        <div class="justify-content-between">
        <input type="radio" name="agama" value="Islam" <?php if (set_value('agama') == "Islam") : echo "selected"; endif; ?>/>
            <label for="Islam">&nbsp Islam</label>
            <input type="radio" name="agama" value="Kristen Protestan" <?php if (set_value('agama') == "Kristen Protestan") : echo "selected"; endif; ?> />
            <label for="Kristen Protestan">&nbsp Kristen Protestan</label>
            <input type="radio" name="agama" value="Kristen Katolik" <?php if (set_value('agama') == "Kristen Katolik") : echo "selected"; endif; ?> /><label for="Kristen Katolik">&nbsp Kristen Katolik</label>
            <input type="radio" name="agama" value="Hindu" <?php if (set_value('agama') == "Hindu") : echo "selected"; endif; ?> /><label for="Hindu">&nbsp Hindu</label>
            <input type="radio" name="agama" value="Budha" <?php if (set_value('agama') == "Budha") : echo "selected"; endif; ?> /><label for="Budha">&nbsp Budha</label>
            <input type="radio" name="agama" value="Konghucu" <?php if (set_value('agama') == "Konghucu") : echo "selected"; endif; ?> /><label for="Konghucu">&nbsp Konghucu</label>
        </div>
    </div>
<br/>
<br/>
<br/>
   
    
    <div class="submit">
        <input type="submit" class="btn btn-primary" value="Submit">
        <a href="<?php echo base_url();?>" class="btn btn-default">Batal</a>
    </div>
    <br/>
    <br/>
</div>
    


    <table>
        
    <tr>
            <td id="indeks"><label for="nama_siswa"><b>Nama Siswa</b></label></td>
            <td><input type="text" name="nama_siswa" id="nama_siswa" value="<?=set_value('nama_siswa');?>" /></td>
        </tr>
        
        <tr>
            <td id="indeks"><label for="nis"><b>NIS </b></label></td>
            <td><input type="text"  name="nis" id="nis" value="<?=set_value('nis');?>" /></td>
        </tr>
        <tr>
            <td id="indeks"><label for="kelas"><b>Kelas </b></label></td>
            <td><input type="text"  name="kelas" id="kelas" value="<?=set_value('kelas');?>"/></td>
        </tr>
        <tr>
            <td id="indeks"><label for="tanggal_lahir"><b>Tanggal Lahir</b> </label></td>
            <td><input type="date" name="tanggal_lahir"  /></td>
        </tr>
        
        <tr>
            <td id="indeks"><label for="tempat_lahir"><b>Tempat Lahir</b> </label></td>
            <td><input type="text" name="tempat_lahir" id="tempat_lahir" value="<?=set_value('tempat_lahir');?>" /></td>
        </tr>
        <tr>
            <td id="indeks"><label for="alamat"><b>Alamat</b> </label></td>
            <td><input type="text" name="alamat" id="alamat" value="<?=set_value('alamat');?>" /></td>
        </tr>
        <tr>
            <td id="indeks"><label for="jenis_kelamin"><b>Jenis Kelamin</b></label> </td>
            <td>
            <input type="radio" name="jenis_kelamin" value="Pria" <?php if (set_value('jenis_Kelamin') == "Pria") : echo "checked"; endif; ?>/><label for="Pria">Pria</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if (set_value('jenis_Kelamin') == "Perempuan") : echo "checked"; endif; ?>/><label for="Perempuan">Perempuan</label>
        </td>
        </tr>
        <tr>
            <td id="indeks"><label for=""><b>Agama</b></label> </td>
            <td>
            <input type="radio" name="agama" value="Islam" <?php if (set_value('agama') == "Islam") : echo "selected"; endif; ?>/>
            <label for="Laki-Laki">Islam</label>
            <input type="radio" name="agama" value="Kristen Protestan" <?php if (set_value('agama') == "Kristen Protestan") : echo "selected"; endif; ?> />
            <label for="Perempuan">Kristen Protestan</label>

            
            <input type="radio" name="agama" value="Kristen Katolik" <?php if (set_value('agama') == "Kristen Katolik") : echo "selected"; endif; ?> /><label for="Perempuan">Kristen Katolik</label>
            <input type="radio" name="agama" value="Hindu" <?php if (set_value('agama') == "Hindu") : echo "selected"; endif; ?> /><label for="Perempuan">Hindu</label>
            <input type="radio" name="agama" value="Budha" <?php if (set_value('agama') == "Budha") : echo "selected"; endif; ?> /><label for="Perempuan">Budha</label>
            <input type="radio" name="agama" value="Konghucu" <?php if (set_value('agama') == "Konghucu") : echo "selected"; endif; ?> /><label for="Perempuan">Konghucu</label>
        </td>
        
            
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td>
        <div class="submit">
        <input type="submit" value="Submit">
            <a href="<?php echo base_url();?>" class="btn btn-default">Batal</a>
        </div>
        </td>
        </tr>
            
            
        
    
    </table>  
    
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>