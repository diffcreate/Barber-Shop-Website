<!DOCTYPE html>
<html>
<body>
<div class="container">
    <h2>Update mahasiswa #<?php echo $ambil->id_bar; ?></h2>
    <form action="<?php echo base_url()?>index.php/barber/simpan_update" method="post">
       
        <input type="hidden" name="id_bar"  value="<?php echo $ambil->id_bar; ?>" />
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="Nama" class="form-control" value="<?php echo $ambil->Nama; ?>" placeholder="Nama" />
        </div>
		<div class="form-group">
            <label>Rating :</label>
            <input type="textbox" name="Rating" class="form-control" value="<?php echo $ambil->Rating; ?>" placeholder="Rating" />
        </div>
		<div class="form-group">
            <label>Status :</label>
            <input type="textbox" name="Status" class="form-control" value="<?php echo $ambil->Status; ?>" placeholder="Status" />
        </div>
        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>
</body>
</html>
