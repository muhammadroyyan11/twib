<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h3>Tambah data Twibbon</h3>
            <p>Cari twibbon, dan Masukkan foto kamu dan generate twibbon.</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<section>

    <div class="container">
        <div class="card-body">
            <div class="card-content">
                <div class="card-body">
                    <?= form_open_multipart('campaign/insertdata') ?>
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>Tittle Twibbon</p>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" class="form-control" value="" name="tittle_twibbon" id="nama" placeholder="Masukkan Tittle Twibbon">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>Deskripsi Twibbon</p>
                                        <div class="position-relative has-icon-left">
                                            <textarea class="form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>Upload twibbon (PNG FILE)</p>
                                        <div class="position-relative has-icon-left">
                                        <input type="file" name="userfile" class="form-control" size="20" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                                    <button type="reset" class="btn btn-outline-danger mr-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </div>
                    <?= form_close();?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Add restrictions
    Dropzone.options.fileupload = {
        acceptedFiles: 'image/*',
        maxFilesize: 1 // MB
    };
</script>