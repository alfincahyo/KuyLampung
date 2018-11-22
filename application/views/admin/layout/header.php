<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo base_url('admin/dasbor') ?>">Administrator</a>
  </div>
  <div style="color: white;
    padding: 15px 50px 5px 50px;
    float: right;
    font-size: 16px;">
    Last access : <?php date_default_timezone_set('Asia/Jakarta');
                  echo date ('d M Y');
    ?> &nbsp;
    <a href="<?php echo base_url('login/logout')?>" class="btn btn-danger square-btn-adjust">Logout</a>
  </div>
</nav>
