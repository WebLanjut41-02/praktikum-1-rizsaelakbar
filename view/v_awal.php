<table border="1">
  <!-- <th>NO</th> -->
  <th>Username</th>
  <th>Password</th>
  <th>Aksi</th>
<?php
$ar = $this->session->data;
$i = -1;
// $jml = count($dataSiswa);
foreach ($ar as $key) {
  $i++;
  ?>

  <tr>
    <td hidden> <?php echo $i ?></td>
    <td> <?php echo $key['user'] ?></td>
    <td> <?php echo $key['pass'] ?></td>
    <td> <a href="<?php echo base_url(); ?>tugas/login/editawal?NIP=<?php echo $i ?>">Edit</a></td>
  </tr>
  <?php
}

 ?>
</table>
<br>
<br>
<a href="<?php echo site_url(); ?>tugas/login/logout">Log Out</a>
