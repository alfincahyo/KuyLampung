<p>
  <?php include('tambah.php'); ?>
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
        Data Daerah
    </div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
     <thead>
         <tr>
             <th>#</th>
             <th>Nama Daerah</th>
             <th>Alamat</th>
             <th>No.Telepon</th>
             <th>Logo Daerah</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
       <?php $i = 1; foreach ($daerah as $daerah) { ?>
         <tr class="odd gradeX">
             <td><?php echo $i ?></td>
             <td><?php echo $daerah->nama_daerah ?></td>
             <td><?php echo $daerah->alamat ?></td>
             <td><?php echo $daerah->telepon ?></td>
             <td><img src="<?php echo base_url('assets/upload/logo/thumbs/'.$daerah->logo_daerah) ?>"width="60"></td>
             <td><a href="<?php echo base_url('admin/daerah/edit/'.$daerah->id_daerah) ?>" class="btn btn-primary btn-sm" title="Edit Daerah"><i class="fa fa-edit"></i></a>
               <?php include('delete.php'); ?>
             </td>
         </tr>
       <?php $i++; } ?>
    </tbody>
</table>
</div>
</div>
</div>
