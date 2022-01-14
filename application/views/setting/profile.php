<!--================Banner Area =================-->
<section class="banner_area">
    <div class="container">
        <div class="banner_inner_text">
            <h3>Hai, <?= userdata('nama') ?></h3>
            <p>Buat atau atur campaign, dan ubah pengaturan akun Anda.</p>
        </div>
    </div>
</section>
<!--================End Banner Area =================-->

<!--================Progress Bar Area =================-->
<section class="progress_bar_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="company_skill">
                    <div class="our_skill_inner">
                        <div class="single_skill">
                        </div>
                        <ul>
                            <li>
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <button type="button" class="btn btn-primary">+ Campaign</button>
                                </a>
                            </li><br>
                            <li>
                                <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Campaign</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Profile</a>
                            </li>
                            <li>
                                <a data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Privasi & Keamanan</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="accordion" role="tablist" class="solution_collaps">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Profile
                                    <i class="minus">-</i>
                                    <i class="minus">+</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <p>Nama</p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" class="form-control" value="<?= set_value('nama', $user['nama']); ?>" name="nama" id="nama" placeholder="Nama">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <p>Email</p>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="email" class="form-control" value="<?= set_value('email', $user['email']); ?>" name="email" id="email" placeholder="Email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Simpan</button>
                                                        <button type="reset" class="btn btn-outline-danger mr-1 mb-1">Reset</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Privasi & Keamanan
                                    <i class="minus">-</i>
                                    <i class="plus">+</i>
                                </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <p>Ini Privasi & Keamanan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Progress Bar Area =================-->

<!--================Circle Chart Area =================-->
<section class="circle_chart_area">
    <div class="container">
        <h3 class="elements_title">Loaders </h3>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="circle_progress circular style-polygon" data-percentage="75" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                    <div class="circle_progress_inner">
                        <strong></strong>
                        <span class="percentage"></span>
                        <h4>Hard work</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="circle_progress circular style-polygon" data-percentage="83" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                    <div class="circle_progress_inner">
                        <strong></strong>
                        <span class="percentage"></span>
                        <h4>Creativity</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="circle_progress circular style-polygon" data-percentage="25" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                    <div class="circle_progress_inner">
                        <strong></strong>
                        <span class="percentage"></span>
                        <h4>Good luck</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="circle_progress circular style-polygon" data-percentage="95" data-thickness="3" data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff" data-end-color="#7acaff">
                    <div class="circle_progress_inner">
                        <strong></strong>
                        <span class="percentage"></span>
                        <h4>Development</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Circle Chart Area =================-->