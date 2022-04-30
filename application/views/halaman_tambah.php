<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Form Data</title>
</head>

<body>
<font size="+2"><b>Form Data Siswa</b></font>
<br /><br />

<form method="POST" action="<?= base_url('index.php/siswa/fungsiTambah'); ?>">
    
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
            <input type="radio" name="agama" value="Islam" <?php if (set_value('agama') == "Islam") : echo "selected"; endif; ?>/><label for="Laki-Laki">Islam</label>
            <input type="radio" name="agama" value="Kristen Protestan" <?php if (set_value('agama') == "Kristen Protestan") : echo "selected"; endif; ?> /><label for="Perempuan">Kristen Protestan</label>
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
</body>
</html>