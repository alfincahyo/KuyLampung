<p>
  <a href="<?php echo base_url('admin/gambar/tambah') ?>" class="btn btn-primary">
    <i class="fa fa-plus"></i>
    Tambah
  </a>
</p>
<?php
  if ($this->session->flashdata('SUKSES')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('SUKSES');
    echo '</div>';
  }
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Data File Gambar
    </div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
     <thead>
         <tr>
             <th>#</th>
             <th>Nama Daerah</th>
             <th>Judul</th>
             <th>Gambar</th>
             <th>Keterangan</th>
             <th>Author</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
       <?php $i = 1; foreach ($gambar as $gambar) { ?>
         <tr class="odd gradeX">
             <td><?php echo $i ?></td>
             <td><?php echo $gambar->nama_daerah ?></td>
             <td><?php echo $gambar->judul ?></td>
             <td><img src="<?php echo base_url('assets/upload/gambar/thumbs/'.$gambar->gambar) ?>"width="60"></td>
             <td><?php echo $gambar->keterangan ?></td>
             <td><?php echo $gambar->username ?></td>
             <td><a href="<?php echo base_url('admin/gambar/edit/'.$gambar->id_gambar) ?>" class="btn btn-primary btn-sm" title="Edit Artikel"><i class="fa fa-edit"></i></a>
               <?php include('delete.php'); ?>
             </td>
         </tr>
       <?php $i++; } ?>
    </tbody>
</table>
</div>
</div>
</div>
