
<?php
  if ($this->session->flashdata('SUKSES')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('SUKSES');
    echo '</div>';
  }
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Data Artikel Culinary
    </div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
     <thead>
         <tr>
             <th>No</th>
             <th>Judul Artikel</th>
             <th>Rating</th>
             <th>Gambar</th>
             <th>Option</th>
         </tr>
     </thead>
     <tbody>
       <?php $i = 1; foreach ($culinary as $culinary) { ?>
         <tr class="odd gradeX">
             <td><?php echo $i ?></td>
             <td><?php echo $culinary->judul_posting ?></td>
             <td><?php echo $culinary->rating ?></td>
             <td><img class="featurette-image img-fluid mx-auto" style="width: 100px; height:100px;"
             src="<?=base_url()?>assets/img/culinary/<?php echo $culinary->gambar?>"></td>
             <td><a href="<?php echo base_url('admin/culinary/edit/'.$culinary->id_culinary) ?>" class="btn btn-primary btn-sm" title="Edit Culinary"><i class="fa fa-edit"></i></a>
               <?php include('hapus.php'); ?>
         </tr>
       <?php $i++; } ?>
    </tbody>
</table>
</div>
</div>
</div>
