 <div class="container">

   
 <h3><?php echo $title;?></h3>
   
 <div class="row">
 <?php if($result){
	 ?>
	 <form action="<?php echo base_url();?>training/update_video/<?php echo $result->id; ?>" method="post">
 <?php } else { ?>
<form action="<?php echo base_url();?>training/save_video" method="post">
 <?php } ?>
<div class="col-md-8">
<br> 
 <div class="login-panel panel panel-default">
		<div class="panel-body"> 
	
	
	
			<?php 
		if($this->session->flashdata('message')){
			echo $this->session->flashdata('message');	
		}
		?>	
		
			<div class="form-group">	 
					<label for="inputEmail"  >Video Title</label> 
					<input type="text" required  name="v_title" value="<?php echo $result->title;?>" class="form-control"   > 
			</div>
			 
		 
<div class="form-group">	 
					<label for="inputEmail"  >Video Description</label> 
					<textarea  name="v_description"  class="form-control"  ><?php echo $result->description;?></textarea>

			</div>
			
			<div class="form-group">	 
					<label for="inputEmail"  >Video Link</label> 
					<input type="text" required  name="v_link"  class="form-control" value="<?php echo $result->link;?>" placeholder="Paste your video link here"   > 
			</div>
			 
			
			
		 

 
	<button class="btn btn-default" type="submit"><?php echo $this->lang->line('submit');?></button>
 
		</div>
</div>
 
 
 
 
</div>
      </form>
</div>

 

</div>