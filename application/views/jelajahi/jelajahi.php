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
    <br>
    <div class="container" id="card-lists">
        <!-- <div class="row-12">
            <div class="content-input1">
                <i class="fa fa-search"></i>
            </div>
            <div class="content-input2">
                <input type="text" class="d-flex" onkeyup="myFunction()" placeholder="Cari Twibbon">
            </div>
        </div> -->
        <div class="col-12 my-1">
            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-search"></i></div>
                </div>
                <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Cari twibbon">
            </div>
        </div>

        <div class="row">

            <?php
            foreach ($twibbon as $key => $row) {
            ?>
                <div class="col-md-3">
                    <div class="card-box">
                        <div class="user-pic">
                            <img src="<?= base_url() ?>assets/img/upload/twibbon/<?= $row->gambar ?>" class="img-fluid" alt="User Pic">
                        </div><br>
                        <div class="card-body">
                            <h5 class="card-title"><?= $row->tittle_twibbon ?></h5>
                            <hr>
                            <p class="card-name"><i class="fa fa-user"></i> <?= $row->nama ?> </p>
                            <p class="card-name"><i class="fa fa-clock-o"></i> <?= $row->date ?></p>
                            <a href="<?= base_url('jelajah/edit/') .  $row->id_twibbon ?>">
                                <input type="button" class="twb-btn twb-btn--primary flex--1 my-1" value="Gunakan">
                            </a>
                        </div>

                        <hr>
                        <!-- 24 huruf limit -->
                    </div>
                </div><br>
            <?php } ?>
            <br>
        </div>
    </div><br>
    </div>
</section>