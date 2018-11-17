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
        Data Admin
    </div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
     <thead>
         <tr>
             <th>no</th>
             <th>Username</th>
             <th>Password</th>
             <th></th>
         </tr>
     </thead>
     <tbody>
       <?php $i = 1; foreach ($admin as $admin) { ?>
         <tr class="odd gradeX">
             <td><?php echo $i ?></td>
             <td><?php echo $admin->username ?></td>
             <td><?php echo $admin->password ?></td>
             <td><i class="fa fa-edit"></i></a>
               <?php include('hapus.php'); ?>
             </td>
         </tr>
       <?php $i++; } ?>
    </tbody>
</table>
</div>
</div>
</div>
