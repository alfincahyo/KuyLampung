<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Daerah</h4>
                </div>
                <div class="modal-body">
                    <?php
                      echo validation_errors('<div class="alert alert-warning">,</div>');
                      echo form_open(base_url('admin/daerah'));
                    ?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Nama Daerah</label>
                            <input type="text" name="nama_daerah" class"form-control" value="
                                <?php
                                    echo set_value('nama_daerah')
                                ?>" placeholder="Nama Daerah" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group form-group-lg">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class"form-control" value="
                            <?php
                              echo set_value('alamat')
                            ?>" placeholder="Alamat" required>
                      </div>
                    </div>

                      <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Save">
                        <input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
                      </div>

                    <?php
                      echo form_close();
                    ?>
                    <div class="clearfix"></div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
