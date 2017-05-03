<!-- Default Bootstrap Navbar -->
<nav class="navbar" style="background-color: #5A0E3C;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo e(Request::is('/') ? "active" : ""); ?>"><a href="/">Home</a></li>
        <li class="<?php echo e(Request::is('about') ? "active" : ""); ?>"><a href="/about">About</a></li>
        <li class="<?php echo e(Request::is('contact') ? "active" : ""); ?>"><a href="/contact">Contact</a></li>
        <li class="<?php echo e(Request::is('blog') ? "active" : ""); ?>"><a href="<?php echo e(route('blog.index')); ?>">Blog Archive</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <!-- Authentication Links -->
          <?php if(Auth::guest()): ?>
              <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
              <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
          <?php else: ?>
              <li class="dropdown">
                <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li class="<?php echo e(Request::is('posts') ? "active" : ""); ?>"><a href="<?php echo e(route('posts.index')); ?>">All Posts</a></li>
                  <li class="<?php echo e(Request::is('posts/create') ? "active" : ""); ?>">
                  <a href="<?php echo e(route('posts.create')); ?>">Create New Post</a>
                  </li>
                  <li class="<?php echo e(Request::is('home') ? "active" : ""); ?>"> <a href="<?php echo e(route('home')); ?>">Dashboard</a></li>  

                  <li role="separator" class="divider"></li>
                  <li>
                    <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> Logout </a>
                    
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"> <?php echo e(csrf_field()); ?>

                    </form>
                  </li>
                </ul>
              </li>
          <?php endif; ?>  
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
