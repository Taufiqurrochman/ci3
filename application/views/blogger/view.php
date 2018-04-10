<div class="container-fluid">
 <h4><small>POST</small></h4>
 <hr>
	<div class="panel panel-default">
  		<h1 align="center"><?php echo $show_article['title'] ?></h1>
	</div>
	<div class="panel-group">
  	<div class="panel panel-default">
    	<div class="panel-body"><b>Article ID #<?php echo $show_article['id']?></b>
    	<h5><span class="glyphicon glyphicon-time"></span> Diposting oleh <?php echo $show_article['author']?>, <?php echo $show_article['tanggal']?>.</h5>	

    	</div>
  	</div>
  	<div class="panel panel-default" align="center">
    	<div class="panel-body"><img class="img-rounded" width="500" height="400" src="<?php echo base_url().'assets/img/'.$show_article['gambar']?>"></div>
  	</div>
    	<div class="panel-body"><b>Article</b><p><?php echo $show_article['artikel'] ?></p></div>
</div>

</div>