<html>
  <head>
    <title>Form Tambah - Data Mobil</title>
  </head>
  <body>
    <h1>Form Tambah Data Mobil</h1>
    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("mobil/tambah"); ?>
      <table cellpadding="8">
        <tr>
          <td>Id</td>
          <td><input type="text" name="input_id" value="<?php echo set_value('input_id'); ?>"></td>
        </tr>
        <tr>
          <td>Nama Pemilik</td>
          <td><input type="text" name="input_namapemilik" value="<?php echo set_value('input_namapemilik'); ?>"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
          <input type="radio" name="input_jeniskelamin" value="Laki-laki" <?php echo set_radio('jeniskelamin', 'Laki-laki'); ?>> Laki-laki
          <input type="radio" name="input_jeniskelamin" value="Perempuan" <?php echo set_radio('jeniskelamin', 'Perempuan'); ?>> Perempuan
          </td>
        </tr>
         <tr>
          <td>Merk</td>
          <td><input type="text" name="input_merk" value="<?php echo set_value('input_merk'); ?>"></td>
        </tr>
        <tr>
          <td>Type</td>
          <td><input type="text" name="input_type" value="<?php echo set_value('input_type'); ?>"></td>
        </tr>
       
      </table>
        
      <hr>
      <input type="submit" name="submit" value="Simpan">
      <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>