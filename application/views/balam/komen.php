<!DOCTYPE html>
<html>
<head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/komen.css">

</head>
<body>
  <div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="page-header">Comments</h2>
        <section class="comment-list">
          <!-- First Comment -->
          <?php 
            foreach($komen_lambar as $u){ 
          ?>
          <article class="row">
            <div class="col-md-3 col-sm-2 hidden-xs">
              <figure class="thumbnail">
                <img class="img-responsive" src="http://www.tangoflooring.ca/wp-content/uploads/2015/07/user-avatar-placeholder.png" />
                <figcaption class="text-center"><?php echo $u->nama ?></figcaption>
              </figure>
            </div>
            <div class="col-md-7 col-sm-7">
              <div class="panel panel-default arrow left" style="margin-right: -370px;">
                <div class="panel-body">
                    <div class="comment-user"><i class="fa fa-user"></i> That Guy</div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> Dec 16, 2014</time>
                  <div class="comment-post">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <?php } ?>
          </section>
    </div>
  </div>
</div>
</body>
</html>