<html>
<head>
    <title>Menambahkan Data</title>
</head>
<body>

    <h3>Tambah Data</h3>
    <?php 
    if($this->uri->segment(2)=='edit'){
        echo form_open('mahasiswa/edit/'.$this->uri->segment(3)); 
    }else{
        echo form_open('mahasiswa/tambahdata'); 
    }
    ?>
<table>
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?php echo form_input('nim',$nim); ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo form_input('nama',$nama); ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo form_input('jenis_kelamin',$jenis_kelamin); ?></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td>:</td>
        <td><?php echo form_input('alamat',$alamat); ?></td>
    </tr>
    <tr>
        <td>nohp</td>
        <td>:</td>
        <td><?php echo form_input('nohp',$nohp); ?></td>
    </tr>
    <tr>
        <td><?php echo form_submit('submit','Simpan','id="submit"'); ?></td>
    </tr>
</table>
<?php echo form_close(); ?>
</body>
</html>