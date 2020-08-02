<div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                          <div class="card-header">
                            <strong>Normal</strong> Form
                        </div>
                        <div class="card-body card-block">
                             <form action="{{ asset('home/upload') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">File Nama</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="nama" placeholder="Text" class="form-control"></div>
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
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Deskripsi</label></div>
                                        <div class="col-12 col-md-9"><textarea name="textarea-input" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea></div>
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3"><label for="file-input" class=" form-control-label">File input</label></div>
                                        <div class="col-12 col-md-9"><input type="file" id="file-input" name="file" class="form-control-file">{{ old('file') }}</div>
                                </div>

                                 <div class="row form-group">
                                        <div class="col col-md-3"><label for="select" class=" form-control-label">Tag</label></div>
                                        <div class="col-12 col-md-9">
                                            <select data-placeholder="Choose a Tag..." name="tag" multiple class="standardSelect">
                                                <option value="" label="default"></option>
                                                <option value="sop">SOP</option>
                                                <option value="form">Form</option>
                                                <option value="report">Report</option>
                                                <option value="pp">Peraturan Pemerintah</option>

                                            </select>
                                        </div>
                                </div>

                                <div class="form-actions form-group"><button type="submit" class="btn btn-secondary btn-sm">Submit</button></div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->
