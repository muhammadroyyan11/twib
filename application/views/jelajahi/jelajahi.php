<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h3>Cari twibbon sesuai keinginanmu !</h3>
            <p>Cari twibbon, dan Masukkan foto kamu dan generate twibbon.</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<section>

    <div class="container">
        <div class="row">
            <?php
            foreach ($twibbon as $key => $row) {
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
                        <p><i class="fa fa-clock-o"></i> <?= $row->date?></p>
                        <a href="<?= base_url('jelajah/edit/') .  $row->id_twibbon?>">
                            <input type="button" class="twb-btn twb-btn--primary flex--1 my-1" value="Gunakan">
                        </a>
                        <hr>

                    </div>
                </div><br>
            <?php } ?>
            <br>
        </div>
    </div><br>
    </div>
</section>