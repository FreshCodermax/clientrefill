var href1= "<?php echo url('/')?>";
document.writeln('<header class="site-navbar py-1" role="banner">');
document.writeln('<div class="container">');
document.writeln('<div class="row align-items-center">');
document.writeln('<div class="col-6 col-xl-2">');
document.writeln('<h1 class="mb-0"><a href="" id="link" class="text-black h2 mb-0">Client<strong>refill</strong></a></h1></div>');
document.writeln('<div class="col-10 col-xl-10 d-none d-xl-block">');
document.writeln('<nav class="site-navigation text-right" role="navigation">');
document.writeln('<nav class="site-navigation text-right" role="navigation">');
document.writeln('<ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">');
document.writeln('<li class="active menu-left"><a href="index.html">Home</a></li>');
document.writeln('<li class="menu-left"><a href="cate.html">Products Category</a></li>');
document.writeln('<li class="menu-left"><a href="cate.html">Jobs Category</a></li>');
document.writeln('<li><a href="login.html">Log In</a></li>');
document.writeln('<li><a href="signup.html">Sign Up</a></li>');
document.writeln('<li><a href="post.html"><span class="rounded bg-primary py-2 px-3 text-white"><span class="h5 mr-2">+</span> Post Ad</span></a></li></ul></nav></div>');
document.writeln('<div class="col-6 col-xl-2 text-right d-block">');
document.writeln('<div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div></div></div></div></header>');

document.getElementById('link').href= href1;

document.writeln('<li class="menu-left dropdown">');
document.writeln('<a class="dropdown-toggle" role="button" id="dropdownlink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Category</a>');
document.writeln('<div class="dropdown-menu" aria-labelledby="dropdownlink">')
document.writeln('<a class="dropdown-item" href="#">Action</a>')