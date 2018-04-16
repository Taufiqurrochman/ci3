<div class="container-fluid">
<?php
	foreach ($artikel->result_array() as $row){
?>
 <h4><small>POSTS</small></h4>
 <hr>
 <h2><?php echo $row['title']?></h2>
 <h5>Diposting oleh <?php echo $row['author']?>, <?php echo $row['tanggal']?>.</h5>
 	<div class="row">
    	<div class="col-sm-3">
     		<p><?php echo "<img src='".base_url()."assets/img/".$row['gambar']."' width='200' height='150'>"?></p>
  		</div>	
  		<div class="com-sm-9">
  			<p><?php echo $row['artikel']?></p>
  		</div>
	</div>
    <p><a href="<?php echo site_url('blogger/view/'.$row['id'])?>" class="btn btn-default">Baca Selengkapnya</a> 
       <a href="<?php echo site_url('blogger/edit/'.$row['id'])?>" class="btn btn-primary">Edit</a> 
       <a href="<?php echo site_url('blogger/delete/'.$row['id'])?>" class="btn btn-warning">Delete</a> 
    </p>
      <br>
       <?php
			}
		?>
    <hr>
</div>