<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo site_url('dashboard/profil') ?>">Profil</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/images/dp/'.$this->session->userdata('path')) ?>" alt="User profile picture">
              <a href="#" data-toggle="modal" data-target="#picture" class="btn btn-primary btn-xs"><i class="fa fa-image"></i>&nbsp;Ganti Foto</a>

              <h3 class="profile-username text-center"><?php echo $this->session->userdata('nama_user') ?></h3>

              <p class="text-muted text-center"><?php echo $this->session->userdata('level') ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">0</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">0</a>
                </li>
              </ul>
              <?php if($this->session->userdata('id')!=$this->session->userdata('id')){ ?>
                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- Modal -->
            <div class="modal fade" id="picture" tabindex="-1" role="dialog">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <?php echo form_open_multipart('profil/change_pict') ?>
                      <center>
                        <table border="1">
                          <tr>
                            <td><img src="<?php echo base_url('assets/images/dp/'.$this->session->userdata('path')) ?>" width="100px" height="100px" id="gambar_nodin"></td>
                          </tr>
                        </table>
                      </center>
                      <hr>
                      <div class="form-group">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $this->session->userdata('id') ?>">
                        <input type="file" name="gambar" class="form-control" id="preview_gambar">
                      </div>
                      <button type="submit" class="btn btn-primary"><i class="fa fa-upload"></i>&nbsp;Upload</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <!-- Modal -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php echo $this->session->userdata('asal') ?></p>

              <hr>

              <strong><i class="fa fa-time margin-r-5"></i> Bergabung</strong>

              <p class="text-muted"><?php echo date("d/F/Y", strtotime($this->session->userdata('gabung'))) ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Bio</strong>

              <p><?php echo $this->session->userdata('bio') ?></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <form action="#" method="post">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="Bagikan pengalaman anda <?php echo $this->session->userdata('username') ?>" id="textarea"></textarea>
                    <p id="text_counter"></p>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-info btn-xs" id="posting"><i class="fa fa-pencil"></i>&nbsp;Post</button>
                  </div>
                </form>
                <hr>
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url() ?>assets/dashboard/dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <div class="tab-pane" id="settings">
                <form class="form-horizontal" action="<?php echo site_url('profil/update_data') ?>" method="post">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="hidden" name="id" class="form-control" value="<?php echo $this->session->userdata('id') ?>">
                      <input type="text" name="nama" class="form-control" value="<?php echo $this->session->userdata('nama_user') ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" value="<?php echo $this->session->userdata('email') ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" name="username" class="form-control" value="<?php echo $this->session->userdata('username') ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="bio" class="col-sm-2 control-label">Bio</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" name="bio"><?php echo $this->session->userdata('bio') ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-info">Update</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->