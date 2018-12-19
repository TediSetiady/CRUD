<html>
  <head>
    <title>Form Ubah - Data Mobil</title>
  </head>
  <body>
    <h1>Form Ubah Data Mobil</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("mobil/ubah/".$mobil->id); ?>
      <table cellpadding="8">
        <tr>
          <td>Id</td>
          <td><input type="text" name="input_id" value="<?php echo set_value('input_id', $mobil->id); ?>"readonly></td>
        </tr>

        <tr>
          <td>Nama Pemilik</td>
          <td><input type="text" name="input_namapemilik" value="<?php echo set_value('input_namapemilik', $mobil->nama_pemilik); ?>"></td>
        </tr>
  
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki', ($mobil->jenis_kelamin == "Laki-laki")? true : false); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan', ($mobil->jenis_kelamin == "Perempuan")? true : false); ?>> Perempuan
          </td>
        </tr>
        <tr>
          <td>Merk</td>
          <td><input type="text" name="input_merk" value="<?php echo set_value('input_merk', $mobil->merk); ?>"></td>
        </tr>
        <tr>
          <td>Type</td>
          <<td><input type="text" name="input_type" value="<?php echo set_value('input_type', $mobil->type); ?>"></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Ubah">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>