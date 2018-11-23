<p>
  <a href="<?php echo base_url('admin/artikel/tambah') ?>" class="btn btn-primary">
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
        Data Artikel
    </div>
<div class="panel-body">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
     <thead>
         <tr>
             <th>#</th>
             <th>Nama Daerah</th>
             <th>Judul</th>
             <th>Isi</th>
             <th>Tanggal</th>
             <th>Author</th>
             <th>Gambar</th>
          <!--   <th>Harga</th>
             <th>Rating</th>
             <th>Operasional</th>-->
             <th></th>
         </tr>
     </thead>
     <tbody>
       <?php $i = 1; foreach ($artikel as $artikel) { ?>
         <tr class="odd gradeX">
             <td><?php echo $i ?></td>
             <td><?php echo $artikel->nama_daerah ?></td>
             <td><?php echo $artikel->judul ?></td>
             <td><?php echo character_limiter($artikel->isi,200); ?></td>
             <td><?php echo $artikel->tanggal ?></td>
             <td><?php echo $artikel->username ?></td>
             <td><img src="<?php echo base_url('assets/upload/gambar/'.$artikel->gambar) ?>"width="60"></td>
          <!--   <td></?php echo $artikel->harga ?></td>
             <td></?php echo $artikel->rating ?></td>
             <td></?php echo $artikel->operasional ?></td>-->
             <td><a href="<?php echo base_url('admin/artikel/edit/'.$artikel->id_artikel) ?>" class="btn btn-primary btn-sm" title="Edit Artikel"><i class="fa fa-edit"></i></a>
               <?php include('delete.php'); ?>
             </td>
         </tr>
       <?php $i++; } ?>
    </tbody>
</table>
</div>
</div>
</div>
