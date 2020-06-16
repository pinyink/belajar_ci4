<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
  </head>
  <body>
    <button type="button" onclick="location.href='<?= base_url().'/crud/tambah';?>'">tambah</button>
    <h4>Lihat Data</h4>
    <table width="100%" border="1" style="text-align:center; border-collapse: collapse;">
      <thead>
        <tr>
          <th>NIK</th>
          <th>NAMA</th>
          <th>TTL</th>
          <th>ALAMAT</th>
          <th>JENIS KELAMIN</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $k_data => $v_data): ?>
          <tr>
            <td><?=$v_data->nik;?></td>
            <td><?=$v_data->nama;?></td>
            <td><?=$v_data->tempat_lahir.', '.$v_data->tanggal_lahir;?></td>
            <td><?=$v_data->alamat;?></td>
            <?php if (strtoupper($v_data->jk) == 'L'): ?>
              <td>Laki-laki</td>
            <?php else: ?>
              <td>Perempuan</td>
            <?php endif; ?>
            <td>
              <button type="button" onclick="location.href='<?=base_url().'/crud/edit/'.$v_data->nik;?>'">Edit</button>
              <button type="button" onclick="hapus('<?=$v_data->nik;?>')" >Delete</button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <script type="text/javascript">
      function hapus(nik) {
        pesan = confirm("apa anda yakin ingin mengapus data ?");
        if (pesan) {
          window.location.href = "<?=base_url()?>/crud/delete/"+nik+"";
        } else return false;
      }
    </script>
  </body>
</html>
