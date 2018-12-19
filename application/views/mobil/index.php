<html>
  <head>
    <title>Data Mobil</title>
    
  <body>
    <h1>Data Mobil</h1>
    <hr>
    <a href='<?php echo base_url("mobil/tambah"); ?>'><input type="submit" name="submit" value="Tambah Data"></a><br><br>
    <table border="13" cellpadding="30">
      <tr>

        <th>Id</th>
        <th>Nama Pemilik</th>
        <th>Jenis Kelamin</th>
        <th>Merk</th>
        <th>Type</th>
        <th colspan="2">Aksi</th>
      </tr>
      <?php
      if( ! empty($mobil)){ // Jika data mobil tidak sama dengan kosong, artinya jika data mobil ada
        foreach($mobil as $data){
          echo "<tr>
          <td>".$data->id."</td>  
          <td>".$data->nama_pemilik."</td>
          <td>".$data->jenis_kelamin."</td>
          <td>".$data->merk."</td>
          <td>".$data->type."</td>
      
          <td><a href='".base_url("mobil/ubah/".$data->id)."'>Ubah</a></td>
          <td><a href='".base_url("mobil/hapus/".$data->id)."'>Hapus</a></td>
          </tr>";
        }
      }else{ // Jika data siswa kosong
        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
      }
      ?>
    </table>
  </body>
</html>