<div class="content-wrapper">
	<section class="content-header"></section>
	<section class="content">
		<!-- Post -->
        <?php foreach($posting as $p){ ?>
                <div class="post">
        	        <div class="user-block">
            			<img class="img-circle img-bordered-sm" src="<?php echo base_url('assets/images/dp/'.$p->path) ?>" alt="user image">
                        <span class="username">
                          <?php echo $p->username ?>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    	<span class="description">Shared - <?php echo date("h:m:s", strtotime($p->tgl_timeline)) ?></span>
                  	</div>
                  <!-- /.user-block -->
                  	<p>
                    	<?php echo $p->isi_timeline ?>
                  	</p>
                  	<ul class="list-inline">
                    	<li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    	<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
                    	<li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (0)</a></li>
                  	</ul>
                  	<input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
        <?php } ?>
        <!-- /.post -->
	</section>
</div>