<?php $__env->startSection('title', '| Login'); ?>

<?php $__env->startSection('content'); ?>

	<!--csrf_field()  !!} If custom form i.e without using Laravel Form helpers then include the above otherwise it will fail [Do it "i think" first thing inside the form tag]-->

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			
			<div class="panel" style="background-color: #B76B93">
                <div class="panel-heading" style="text-align: center; font-size: large;">Login</div>
                	<div class="panel-body" style="background-color: #FBE6F1">
						<?php echo Form::open(); ?>

							
							
							<?php echo e(Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Enter Your EmailID', 'style' => 'margin-top:40px; text-align:center;'])); ?>


							
							<div style="text-align: center;"> <?php echo e(Form::password('password', ['class' => 'form-control ', 'placeholder' => 'Type Your Password', 'style' => 'margin-top:40px; text-align:center;'])); ?> </div>
							
							<?php echo e(Form::checkbox('remember')); ?> 
							<?php echo e(Form::label('remember', 'Remember Me', ['style' => 'margin-top:40px;'])); ?>


							<br>
							<div style="text-align: center;"><?php echo e(Form::submit('Login', ['class' => 'btn btn-danger btn-lg form-spacing-top', 'style' => 'width:160px'])); ?></div>

						<?php echo Form::close(); ?>

					</div>	
				</div>	
			</div>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>