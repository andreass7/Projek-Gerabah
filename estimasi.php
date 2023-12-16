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
                        <label for="GypsumCasting" class="form-label">Gypsum casting</label>
                        <input type="text" class="form-control" id="GypsumCasting" name="GypsumCasting" placeholder="jumlah gypsum casting" required>
                    </div>
                    <div class="mb-3 ms-2 me-2">
                        <label for="Rofing" class="form-label">Rofing</label>
                        <input type="text" class="form-control" id="Rofing" name="Rofing" placeholder="jumlah rofing" required>
                    </div>
                    <div class="mb-3 ms-2 me-2">
                        <label for="SemenPutih" class="form-label">Semen Putih</label>
                        <input type="text" class="form-control" id="SemenPutih" name="SemenPutih" placeholder="jumlah semen putih" required>
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
                        <td>1.5x</td>
                        <td>2.5y</td>
                        <td>0.75z</td>
                    </tr>
                    <tr class="ms-2 me-2">
                        <td>2x</td>
                        <td>3y</td>
                        <td>1.5z</td>
                    </tr>
                    <tr class="ms-2 me-2">
                        <td>0.5x</td>
                        <td>1y</td>
                        <td>1z</td>
                    </tr>
                </table>
                <p class="ms-2 me-2 mt-2">Keterangan : </p>
                <p class="ms-2 me-2 mt-2">x = gypsum Panjang</p>
                <p class="ms-2 me-2">y = gypsum CP Merak </p>
                <p class="ms-2 me-2">z = gypsum Layang-layang </p>
            </div>
        </div>
    </div>

</section>

<?php include('layout/footer.php') ?>