<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit</title>
  </head>
  <body>
    <h4>Edit Data</h4>
    <?php echo form_open('crud/update'); ?>
    <input type="hidden" name="nik_awal" value="<?=$data->nik;?>">
    <table width="70%">
      <tr>
        <td width="30%">NIK</td>
        <td width="5%">:</td>
        <td width="65%"><input type="text" name="nik" value="<?=$data->nik;?>"></td>
      </tr>
      <tr>
        <td>NAMA</td>
        <td>:</td>
        <td>
          <input type="text" name="nama" value="<?= $data->nama;?>">
        </td>
      </tr>
      <tr>
        <td>TTL</td>
        <td>:</td>
        <td>
          <input type="text" name="tempat" value="<?=$data->tempat_lahir;?>"> / <input type="date" name="tanggal" value="<?=$data->tanggal_lahir?>">
        </td>
      </tr>
      <tr>
        <td>ALAMAT</td>
        <td>:</td>
        <td>
          <textarea name="alamat" rows="8" cols="80"><?=$data->alamat?></textarea>
        </td>
      </tr>
      <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>
          <?php if (strtoupper($data->jk) == 'L'): ?>
            <input type="radio" name="jk" value="L" checked>
            <input type="radio" name="jk" value="P">
          <?php else: ?>
            <input type="radio" name="jk" value="L">
            <input type="radio" name="jk" value="P" checked>
          <?php endif; ?>
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
