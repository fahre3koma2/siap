 <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                             <button type="button" class="btn btn-info mb-1" data-toggle="modal" data-target="#mediumModal">Add User</button>
                            <?php if($dokumen->isEmpty()) : ?>
                            <div class="alert alert-danger" role="alert"> Data tidak ditemukan </div>
                            <?php else : ?>
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; foreach($dokumen as $dokumen) { ?>
                                        <tr>
                                            <td><?php echo $dokumen->file_nama ?></td>
                                            <td><?php echo $dokumen->file_desk ?></td>
                                            <td><?php echo $dokumen->file_status ?></td>
                                            <td>
                                                <div class="btn-group">
                                                <a href="{{ asset('home/approval/'.$dokumen->file_id) }}" class="btn btn-info btn-sm"> <i class="fa fa-check"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="{{ asset('home/edit/'.$dokumen->file_id) }}" class="btn btn-warning btn-sm"> <i class="fa fa-edit"></i></a>
                                                &nbsp;&nbsp;&nbsp;
                                                <a href="{{ asset('home/delete/'.$dokumen->file_id) }}" class="btn btn-danger btn-sm  delete-link"> <i class="fa fa-trash"></i></a>
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
                        <div class="card">
                          <div class="card-header">
                            <strong>Normal</strong> Form
                        </div>
                        <div class="card-body card-block">
                             <form action="{{ asset('home/upload') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">File Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Text" class="form-control" value="{{ old('nama') }}" required></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Departemen</label></div>
                                        <div class="col-12 col-md-9">
                                            <select name="dept" id="select" class="form-control">
                                                <option value="1">Departemen 1</option>
                                                <option value="2">Departemen 2</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Deskripsi</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="desk" placeholder="Text" class="form-control" value="{{ old('desk') }}" required></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="doc" class="form-control-file" value="{{ old('file') }}"></div>
                                </div>

                                 <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">Tag..</label></div>
                                        <div class="col col-md-9">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <label for="checkbox1" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox1" name="tag[]" value="sop" class="form-check-input">SOP
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox2" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox2" name="tag[]" value="form" class="form-check-input"> Form
                                                    </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label for="checkbox3" class="form-check-label ">
                                                        <input type="checkbox" id="checkbox3" name="tag[]" value="report" class="form-check-input"> Report
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div
                                <div class="form-actionsform-group"><button type="submit" class="btn btn-primary btn-sm">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

