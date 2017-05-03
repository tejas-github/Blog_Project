<?php $__env->startSection('title','| Homepage'); ?>

<?php $__env->startSection('content'); ?>

<style>
  hr{
    border-color: black;
  }
</style>


<div class="row" ">

  <div class="col-md-12" >

    <div class="jumbotron" style="background-color: #F5D2E8; margin-left: -15px; margin-right: -15px">

      <h1>Welcome to My Blog!</h1>

      <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>

      <p><a class="btn btn-info btn-lg" href="#" role="button">Popular Post</a></p>
    
    </div>

   </div>

</div>
<!-- end of header .row -->


<div class="row">

  <div class="col-md-8 well" style="background-color: #F5D2E8;">

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="post" >

      <h3><?php echo e($post -> title); ?></h3>

      <p><?php echo e(substr($post -> body,0,120)); ?><?php echo e(strlen($post -> body) >120 ? "...": ""); ?></p>

     <!-- METHOD - 1 <a href="url('blog/'.$post->slug)}}" class="btn btn-primary">Read More</a> -->

     <!-- METHOD -2 <a href="  route('blog.single', $post -> slug) }} "> Read More </a> -->

     <?php echo Html::linkRoute('blog.single', 'Read More', array($post -> slug), array('class' => 'btn btn-info')); ?>


    </div>
    
    <hr>
  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>

  <div class="col-md-3 col-md-offset-1 well" style="background-color: #F5D2E8; padding-bottom:68px; padding-top: 55px">

    <h2 style="text-align: center; margin-bottom: 35px;" class=" inverse-label"> Sidebar </h2>
    <hr>

    <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <a href=" <?php echo e(route('blog.single', $s_data -> slug)); ?> " class="btn btn-block" style="text-align: center; color: blue;"><?php echo e($s_data -> title); ?></a>
    <hr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>