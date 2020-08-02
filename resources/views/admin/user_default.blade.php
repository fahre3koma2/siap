 <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data User</strong>
                                 <span class="input-group-append float-right">
                                     <button type="button" class="btn btn-info mb-1" data-toggle="modal" data-target="#mediumModal">Add File</button>
                                </span>
                            </div>
                            <div class="card-body">
                            <?php if($user->isEmpty()) : ?>
                                <div class="alert alert-danger" role="alert"> Data tidak ditemukan </div>
                            <?php else : ?>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Alamat</th>
                                            <th>Telp</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($user as $user) { ?>
                                        <tr>
                                            <td><?php echo $user->user_nama ?></td>
                                            <td><?php echo $user->user_alamat ?></td>
                                            <td><?php echo $user->user_email ?></td>
                                            <td><?php echo $user->user_username ?></td>
                                            <td>
                                                <div class="btn-group">
                                                <a href="{{ asset('user/edit/'.$user->user_id) }}" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="{{ asset('user/delete/'.$user->user_id) }}" class="btn btn-danger btn-sm  delete-link"> <i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php $i++; } ?>
                                    </tbody>
                                </table>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">

                        <div class="card-body card-block">
                                <form action="{{ asset('user/tambah') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">NIP</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nip" value="{{ old('nip') }}" placeholder="NIP" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" value="{{ old('nama') }}" placeholder="Nama" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9"><textarea name="alamat" value="{{ old('alamat') }}" id="textarea-input" rows="4" placeholder="Alamat" class="form-control"></textarea></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Gender</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="gender" id="select" class="form-control">
                                                <option value="L">Laki-laki</option>
                                                <option value="P">Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telp</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="telp" value="{{ old('telp') }}" placeholder="Telp" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="email" placeholder="Email" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Jabatan</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="level" id="select" class="form-control">
                                                <option value="2">Manager Dept 1</option>
                                                <option value="3">Manager Dept 2</option>
                                                <option value="4">Staff Dept 1</option>
                                                <option value="5">Staff Dept 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="username" value="{{ old('username') }}" placeholder="Username" class="form-control"></div>
                                    </div>
                                    <div>
                                        <center>
                                        <button id="payment-button" type="submit" name="submit" class="btn btn-sm btn-info">
                                                <span >Simpan Data</span>
                                                <span style="display:none;">Sending…</span>
                                        </button>
                                        <button id="payment-button" type="reset" name="reset" class="btn btn-sm btn-danger">
                                                <span>Reset</span>
                                        </button>
                                        </center>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
