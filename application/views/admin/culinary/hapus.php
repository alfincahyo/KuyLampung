<button class="btn btn-primary btn-sm" data-toggle="modal"
        data-target="#myModal<?php echo $culinary->id_culinary ?>"
        title="Delete Artikel Culinary">
        <i class="fa fa-trash-o"></i>
</button>
    <div class="modal fade" id="myModal<?php echo $culinary->id_culinary ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Hapus Artikel ?</h4>
                </div>
                <div class="modal-body">
                    Yakin Ingin Menghapus Data Ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?php echo base_url('admin/culinary/hapus/'.$culinary->id_culinary) ?>" class="btn btn-primary">
                        <i class="fa fa-trash-o"></i>
                        Ya, Hapus Data Ini.
                    </a>
                </div>
            </div>
        </div>
    </div>
