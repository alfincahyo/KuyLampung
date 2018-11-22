<p>
  <a href="<?php echo base_url('admin/dasbor/tambah') ?>" class="btn btn-primary">
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
        Data Administrator
    </div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
     <thead>
         <tr>
             <th>#</th>
             <th>Username</th>
             <th>Nama Lengkap</th>
             <th>Email</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
       <?php $i = 1; foreach ($admin as $admin) { ?>
         <tr class="odd gradeX">
           <td><?php echo $i ?></td>
           <td><?php echo $admin->username ?></td>
           <td><?php echo $admin->nama ?></td>
           <td><?php echo $admin->email ?></td>
             <td><a href="<?php echo base_url('admin/dasbor/edit/'.$admin->id_admin) ?>" class="btn btn-primary btn-sm" title="Edit Artikel"><i class="fa fa-edit"></i></a>
               <?php include('delete.php'); ?>
             </td>
         </tr>
       <?php $i++; } ?>
     </tbody>
</table>
