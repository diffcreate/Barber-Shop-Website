<?php $this->load->view('./template/header.php'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h3>Daftar Barber</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Ratings</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_barber as $barber) : ?>
                        <tr>
                            <td><?php echo $barber->Nama; ?></td>
                            <td><?php echo $barber->Rating; ?></td>
                            <td><?php echo $barber->Status; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
