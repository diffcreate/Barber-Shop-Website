<?php $this->load->view('./template/header_admin.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="<?php echo base_url()?>index.php/barber/simpan_barber_a" method="post">
                        <!-- Action diisi fungsi simpan pada controller -->
                        <input type="hidden" name="Rating" value="0"> <!-- Hidden untuk menyimpan rating awal dengan nilai 0 -->
                        <input type="hidden" name="Status" value="Ada"> <!-- Hidden untuk menyimpan status awal dengan nilai "Ada" -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama User</label>
                            <input type="text" class="form-control" id="nama" name="Nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Submit Form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('./template/footer.php'); ?>
