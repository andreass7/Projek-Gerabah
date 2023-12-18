<?php include('layout/header.php') ?>

<section>
    <div class="row justify-content-around mt-5">
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center">
                    Jumlah Bahan di Gudang
                </div>
                <form action="hasil.php" method="get">
                    <div class="mb-3 ms-2 me-2">
                        <label for="semen" class="form-label">Semen</label>
                        <input type="text" class="form-control" id="semen" name="semen" placeholder="jumlah Tanah Liat (Kg)" required>
                    </div>
                    <div class="mb-3 ms-2 me-2">
                        <label for="waktu" class="form-label">Waktu Pembuatan</label>
                        <input type="text" class="form-control" id="waktu" name="waktu" placeholder="Berapa Lama Waktu Pembuatan" required>
                    </div>
                    <div class="mb-3 ms-2 me-2">
                        <label for="cat" class="form-label">Cat</label>
                        <input type="text" class="form-control" id="cat" name="cat" placeholder="Jumlah Cat yang digunakan" required>
                    </div>
                    <div class="d-grid gap-2 ms-2 me-2 mb-3">
                        <button type="submit" class="btn btn-primary" name="btnhitung">Hitung</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header text-center">
                    Petunjuk Penggunaan
                </div>
                <p class="ms-2 me-2 mt-2">Persamaan yang digunakan : </p>
                <table class="table">
                    <tr class="ms-2 me-2">
                        <td>1x</td>
                        <td>2y</td>
                        <td>0.5z</td>
                    </tr>
                    <tr class="ms-2 me-2">
                        <td>5x</td>
                        <td>6y</td>
                        <td>4z</td>
                    </tr>
                    <tr class="ms-2 me-2">
                        <td>1x</td>
                        <td>0y</td>
                        <td>1z</td>
                    </tr>
                </table>
                <p class="ms-2 me-2 mt-2">Keterangan : </p>
                <p class="ms-2 me-2 mt-2">x = Guci</p>
                <p class="ms-2 me-2">y = Tempayan </p>
                <p class="ms-2 me-2">z = Kendi </p>
            </div>
        </div>
    </div>

</section>

<?php include('layout/footer.php') ?>