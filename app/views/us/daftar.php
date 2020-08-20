<!-- Pendaftaran -->
<section id="content-1">
    <div class="container mt-5">
        <div class="jumbotron">
            <div class="row col-lg-12 justify-content-center">
                <div class="col-lg-12 text-center">
                    <h3 style="font-family: 'Titillium Web', sans-serif; ">
                        UPLOAD <span> FILE</span></h3>
                    <hr>
                </div>
                <div class="row col-lg-12 mb-5">
                    <div class="col-lg-6">
                        <div class="flash mb-3">
                            <?php Flasher::flash() ?>
                        </div>
                        <form action="<?= BASEURL ?>/user/proses" method="POST" class="needs-validation"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="foto">Upload File</label>
                                <p style="font-size: 11px; color:red; font-style:italic">Maks Besar File 5MB dan
                                    Berformat .jpg, .jpeg, atau .png</p>
                                <input type="file" class="form-control-file" id="foto" name="up_foto" required>
                                <div class="invalid-feedback">
                                    Form is Required
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" name="Submit">Upload Sekarang</button>
                            <button class="btn btn-danger" type="reset">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>