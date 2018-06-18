 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Event
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo site_url('admin/kelola_event') ?>">Event</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('event');
                  $this->db->like('id_jenis',1);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Event Crispy</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('event');
                  $this->db->like('id_jenis',2);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Event Burger</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
                <?php 
                  $this->db->from('event');
                  $this->db->like('id_jenis',3);
                  echo $this->db->count_all_results();
                ?>
              </h3>
              <p>Event Pizza</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-info btn-xs"><i class="fa fa-plus">&nbsp;Tambah</i></a>  
              <table class="table table-bordered table-striped" id="mydata">
                <thead>
                <tr>
                  <th class="text-center">No</th> 
                  <th class="text-center">Jenis Event</th>
                  <th class="text-center">Event</th>
                  <th class="text-center">Tanggal Pelaksanaan</th>
                  <th class="text-center">Harga Event</th>
                  <th class="text-center">Status</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <?php $no = 1; foreach($event as $e){ ?>
                <tbody>
                  <td class="text-center"><?php echo $no++ ?></td>
                  <td><?php echo $e->nama_jenis ?></td>
                  <td><?php echo $e->nama_event ?></td>
                  <td class="text-center"><?php echo $e->tgl_mulai." s/d ".$e->tgl_akhir ?></td>
                  <td class="text-center"><b>Rp </b><?php echo $e->harga_event ?></td>
                  <td class="text-center"><?php echo $e->status_event ?></td>
                  <td class="text-center">
                    <a href="<?php echo site_url('event/edit/'.$e->id_event) ?>" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>&nbsp;Edit</a>
                    <a href="<?php echo site_url('event/hapus/'.$e->id_event) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;Hapus</a>
                  </td>
                </tbody>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- Modal -->
            <div class="modal fade" id="tambah" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Form Tambah Event</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart('event/tambah') ?>
                              <div class="form-group">
                                <select class="form-control select2" name="jenis" style="width: 100%">
                                  <option>-- Pilih Jenis Event --</option>
                                  <?php foreach($jenis as $j){ ?>
                                  <option value="<?php echo $j->id_jenis ?>"><?php echo $j->nama_jenis ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="form-group">
                                <label class="label-control">Pilih Level Partisipasi :</label><br>
                                <?php foreach($level as $l){ ?>
                                  <input type="checkbox" name="level[]" class="flat-red" value="<?php echo $l->nama_level ?>">&nbsp;<?php echo $l->nama_level ?>
                                <?php } ?>
                              </div>
                              <input type="text" name="event" class="form-control" placeholder="Nama Event"><br>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="mulai" id="datepicker" placeholder="Tanggal Mulai Event">
                              </div><br><br>
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" name="akhir" id="datepicker2" placeholder="Tanggal Akhir Event">
                              </div><br><br>
                              <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Event"></textarea><br>
                              <input type="text" name="harga" class="form-control" placeholder="Harga Event"><br>
                              <label>Upload Path</label>
                              <input type="file" name="path" class="form-control"><br>
                              <input type="radio" name="status" class="flat-red" value="Open Participant">&nbsp;Open Participant
                              <input type="radio" name="status" class="flat-red" value="Event Sudah Berakhir">&nbsp;Event Sudah Berakhir
                              <br><br>
                              <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>&nbsp;Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          <!-- Modal -->
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->