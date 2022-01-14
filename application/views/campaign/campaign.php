<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h3>Twibbon saya</h3>
            <p>Cari twibbon, dan Masukkan foto kamu dan generate twibbon.</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<section>

    <div class="container">
        <a href="<?= site_url('campaign/add') ?>">
            <input type="button" class="twb-btn twb-btn--primary flex--1 my-1" name="" id="" value="+ Tambah twibbon baru">
        </a>
        <hr><br>
        <div class="row">
            <?php
            foreach ($twibbonById as $key => $row) {
                if (userdata('id_user') == $row->id_user) :

            ?>
                    <div class="col-md-3">
                        <div class="card-box">
                            <div class="user-pic">
                                <img src="<?= base_url() ?>assets/img/upload/twibbon/<?= $row->gambar ?>" class="img-fluid" alt="User Pic">
                            </div><br>
                            <h5 style="
                                      overflow-wrap: break-word;
                                      white-space: nowrap;
                                      overflow: hidden;
                                      text-overflow: ellipsis;
                                    "><?= $row->tittle_twibbon ?></h5>
                            <hr>
                            <!-- 24 huruf limit -->
                            <p><i class="fa fa-user"></i> <?= $row->nama ?> </p>
                            <p><i class="fa fa-clock-o"></i> <?= $row->date ?></p>
                            <a href="<?= site_url('edit') ?>">
                                <input type="button" class="twb-btn twb-btn--primary flex--1 my-1" name="" id="" value="Edit">
                            </a>
                            <a onclick="return confirm('Yakin ingin hapus?')" href="<?= base_url('masuk/delete/') ?>" class="twb-btn twb-btn--primary">Hapus</a>
                            <hr>

                        </div>
                    </div><br>
                <?php endif; ?>
            <?php } ?>

            <br>
        </div>
    </div><br>
    </div>
</section>