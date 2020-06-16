<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tambah</title>
  </head>
  <body>
    <?php echo form_open('crud/simpan'); ?>
    <table width="70%">
      <tr>
        <td width="30%">NIK</td>
        <td width="5%">:</td>
        <td width="65%"><input type="text" name="nik" value=""></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>
          <input type="text" name="nama" value="">
        </td>
      </tr>
      <tr>
        <td>TTL</td>
        <td>:</td>
        <td>
          <input type="text" name="tempat" value=""> / <input type="date" name="tanggal" value="">
        </td>
      </tr>
      <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td>
          <textarea name="alamat" rows="8" cols="80"></textarea>
        </td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <input type="radio" name="jk" value="L">
          <input type="radio" name="jk" value="P">
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <br>
          <input type="submit" value="simpan">
        </td>
      </tr>
    </table>
    <?php echo form_close(); ?>
  </body>
</html>
