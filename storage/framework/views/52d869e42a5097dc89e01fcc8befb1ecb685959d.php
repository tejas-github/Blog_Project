<?php $__env->startSection('title','| Contact'); ?>

<?php $__env->startSection('content'); ?>

<style>
  hr{
    border-color: black;
  }
</style>

<div class="row">

  <div class="col-md-8 col-md-offset-2">

    <h1>Contact Me</h1>

    <hr style="width: 150%; position: relative;left: -190px">

    <form style="margin-top: 60px; margin-bottom: 60px" method="POST" action="">

      <div class="form-group">

        <label name="email">Email:</label>
        <input id="email" name="email" class="form-control" placeholder="example@xyz.com">

      </div>

      <div class="form-group">

        <label name="subject">Subject:</label>
        <input id="subject" name="subject" class="form-control" placeholder="Write the subject here">

      </div>

      <div class="form-group">

        <label name="message">Message:</label>
        <textarea id="message" name="message" class="form-control" placeholder="Type your message here..."></textarea>

      </div>

      <div style="text-align: center;"><input type="submit" value="Send Message" class="btn btn-success" ></div>

    </form>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>