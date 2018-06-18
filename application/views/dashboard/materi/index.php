<div class="content-wrapper">
	<section class="content-header">
		<h1>
        	Dashboard
        	<small>Materi</small>
      	</h1>
	    <ol class="breadcrumb">
	    	<li><a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active"><a href="<?php echo site_url('dashboard/materi') ?>">Materi</a></li>
	    </ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>
							<?php 
								$this->db->from('materi');
								$this->db->like('id_level','1');
								echo $this->db->count_all_results();
							?>
						</h3>
						<p>Materi Fundamental</p>
					</div>
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<a href="#" class="small-box-footer">Read More&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3>
							<?php 
								$this->db->from('materi');
								$this->db->like('id_level','2');
								echo $this->db->count_all_results();
							?>
						</h3>
						<p>Materi Standart</p>
					</div>
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<a href="#" class="small-box-footer">Read More&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3>
							<?php 
								$this->db->from('materi');
								$this->db->like('id_level','3');
								echo $this->db->count_all_results();
							?>
						</h3>
						<p>Materi Medium</p>
					</div>
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<a href="#" class="small-box-footer">Read More&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-red">
					<div class="inner">
						<h3>
							<?php 
								$this->db->from('materi');
								$this->db->like('id_level','4');
								echo $this->db->count_all_results();
							?>
						</h3>
						<p>Advanced</p>
					</div>
					<div class="icon">
						<i class="fa fa-book"></i>
					</div>
					<a href="#" class="small-box-footer">Read More&nbsp;<i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>
	</section>
</div>