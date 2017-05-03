<?php $__env->startSection('title','| About'); ?>

<?php $__env->startSection('content'); ?>

<style>
	hr{
		border-color: black;
	}
</style>


 <div class="row">

	<div class="col-md-12">

	  <h1>About Me</h1>


			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				
				<?php 

				if($key == "fullname")

				{ echo "My Name is " .$element;}
				 
				 else
				 
				 	{echo "<br><br>My Email ID is ".$element;}
				?>
				
				
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	  <hr><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis aspernatur quas quibusdam veniam sunt animi, est quos optio explicabo deleniti inventore unde minus, tempore enim ratione praesentium, cumque, dolores nesciunt?</p>

	</div>

  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>