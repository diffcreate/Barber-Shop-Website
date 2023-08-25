<?php $this->load->view('./template/header_admin.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Table with Update and Delete Buttons</title>
  <!-- Menghubungkan dengan file CSS Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
  <h2>Data Anggota Barber</h2>
	<a href="<?php echo base_url()?>index.php/barber/tambahbarber" class="btn btn-success" role="button">Tambah</a>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
		<?php foreach($data_barber as $data):?>
      <tr>
			<td><?php echo $data->id_bar?></td>
			<td><?php echo $data->Nama?></td>
			<td> <a href="<?php echo base_url()?>index.php/barber/update/<?php echo $data->id_bar; ?>" class="btn btn-warning" role="button">Update</a>
			<a href="<?php echo base_url()?>index.php/barber/hapus/<?php echo $data->id_bar; ?>" class="btn btn-danger" role="button">Delete</a></td>
      </tr>
			<?php endforeach?>
    </tbody>
  </table>
</div>

<!-- Menghubungkan dengan file JavaScript Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
