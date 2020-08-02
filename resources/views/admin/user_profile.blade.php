<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-4">
                        <aside class="profile-nav alt">
                            <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                    <div class="media">
                                        <a href="#">
                                            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="{{ asset('public/upload/user/'.$user->user_pict) }}">
                                        </a>

                                        <div class="media-body">
                                            <h2 class="text-light display-12"><?php echo $user->user_nama ?></h2>
                                            <?php if ($user->user_level == '2') { ?>
                                                <p>Manager Dept 1</p>
                                            <?php }else if ($user->user_level == '3') { ?>
                                                <p>Staff Dept 1</p>
                                            <?php }else if ($user->user_level == '4') { ?>
                                                <p>Manager Dept 2</p>
                                            <?php }else if ($user->user_level == '5') { ?>
                                                <p>Staff Dept 2</p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                       <button type="button" class="btn btn-info mb-1" data-toggle="modal" data-target="#mediumModal"><i class="fa fa-user"></i> Change Photo Profile <span class="badge badge-primary pull-right"></span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-tasks"></i> Change Password <span class="badge badge-danger pull-right"></span></a>
                                    </li>
                                </ul>

                            </section>
                        </aside>
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ asset('user/update') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                    <div class="row form-group">
                                        <input type="hidden" name="user_id" value="<?php echo $user->user_id ?>">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nip" value="<?php echo $user->user_nip ?>" placeholder="NIP" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" value="<?php echo $user->user_nama ?>" placeholder="Nama" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><textarea name="alamat" id="textarea-input" rows="8" placeholder="Alamat" class="form-control"><?php echo $user->user_alamat ?></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Gender</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="gender" id="select" class="form-control">
                                                <option value="L">Laki-laki</option>
                                                <option value="P" <?php if($user->user_sex=="P") { echo 'selected'; } ?>>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telp</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="telp" value="<?php echo $user->user_tlp ?>" placeholder="Telp" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" value="<?php echo $user->user_email ?>" placeholder="Email" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="level" id="select" class="form-control">
                                                <option value="1" <?php if($user->user_level=="1") { echo 'selected'; } ?>>Manager Dept 1</option>
                                                <option value="2" <?php if($user->user_level=="2") { echo 'selected'; } ?>>Manager Dept 2</option>
                                                <option value="3" <?php if($user->user_level=="3") { echo 'selected'; } ?>>Staff Dept 1</option>
                                                <option value="4" <?php if($user->user_level=="4") { echo 'selected'; } ?>>Staff Dept 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" value="<?php echo $user->user_username ?>" placeholder="Username" class="form-control"></div>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info">
                                                <span >Simpan Data</span>
                                                <span style="display:none;">Sending…</span>
                                        </button>
                                        <button id="payment-button" type="reset" name="reset" class="btn btn-lg btn-danger">
                                                <span>Reset</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="card">
                            <div class="card-header">
                                <strong>Normal</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ asset('user/upload') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    {{ csrf_field() }}
                                     <input type="hidden" name="user_id" value="<?php echo $user->user_id ?>">
                                    <div class="row form-group">
                                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="photo" class="form-control-file" value="{{ old('file') }}"></div>
                                    </div>
                                    <div class="form-actionsform-group"><button type="submit" class="btn btn-primary btn-sm">Submit</button></div>
                            </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
