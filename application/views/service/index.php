<?php $this->load->view('./template/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card" style="margin-top: 25%; margin-bottom: 25%;" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="../../img/model6.jpg" alt="Gambar" class="img-fluid"> <p style="margin: right 20px;"><strong>Arif</strong></p>
                        </div>
                        <div class="col-md-8">
                            <form class="row g-3" action="<?php echo base_url()?>index.php/barber/simpan_barber" method="post" >
							<!-- Action diisi fungsi simpan pada controller -->
                                <div class="col-md-12">
								<label for="validationServer01" class="form-label">Id</label>
								<input type="hidden" class="form-control is-valid" id="validationServer01" value="" name="id_receipt" required>
								<!-- Hidden untuk menyimpan id auto increment -->
                                    <label for="validationServer01" class="form-label">Nama user</label>
                                    <input type="text" class="form-control is-valid" id="validationServer01" value="" name="Nama" required>
									<!-- Input nama -->
									<label for="validationServer01" class="form-label"></label>
                                    <input type="hidden" class="form-control is-valid" id="validationServer01" value="2" name="Nama_barber" required>
									<!-- Input nama barber, hidden pakai database isinya nanti -->
									<label for="validationServer01" class="form-label">Jenis cut</label>
                                    <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" name="jenis_cut" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Premium Cut</option>
                                        <option>Kid's Cut</option>
                                    </select>

									<label for="validationServer01" class="form-label">Jadwal</label>
                                    <input type="date" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" name="Jadwal" required>

									<label for="validationServer01" class="form-label">Service</label>
									<select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" name="service" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>Vitamin</option>
                                        <option>Coloring</option>
                                        <option>Shaving</option>
                                        <option>Hair wash</option>
                                        <option>Massage</option>
                                    </select>
                                    <button class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px;" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('./template/footer.php'); ?>
