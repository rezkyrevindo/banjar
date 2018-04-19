<body style="background-image: url(<?php echo config_item('base_url') ?>assets/images/SOD-2.jpg);">
  
<div class="container" style="
  position: absolute !important;
  width: 100%;top: 0;left: 0;
  bottom: 0;right: 0;z-index: 1;background: rgba(0, 0, 0, 0.5);">
    
  <div class="row" id="pwd-container">
    <div class="col-md-7"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login" style="background : rgba(0,0,0,0.3)">
          <img src="<?php echo config_item('base_url') ?>assets/images/ICON.png" class="img-responsive" style="width:150px; height:100px;">
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />
          
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="<?php echo config_item('base_url') ?>register">Create account <i class="fas fa-long-arrow-alt-right"></i></a> 
          </div>
          
        </form>
        
      
      </section>  
      </div>
      <div class="col-md-1"></div>

  </div>
  
  
</div>
