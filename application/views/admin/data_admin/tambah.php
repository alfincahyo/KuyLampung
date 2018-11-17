<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah</button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Tambah Admin</h4>
                </div>
                <div class="modal-body">
                    <?php
                      echo validation_errors('<div class="alert alert-warning">,</div>');
                      echo form_open(base_url('admin/data_admin'));
                    ?>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class"form-control" value="
                                <?php
                                    echo set_value('username')
                                ?>" placeholder="Username" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                      <div class="form-group form-group-lg">
                        <label>Password</label>
                        <input type="text" name="password" class"form-control" value="
                            <?php
                              echo set_value('password')
                            ?>" placeholder="Password" required>
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
