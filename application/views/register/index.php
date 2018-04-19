<body style="background-image: url(<?php echo config_item('base_url') ?>assets/images/SOD-2.jpg)">
  
<div class="container " style="
position: absolute !important;
width: 100%;top: 0;left: 0;bottom: 0;
right: 0;z-index: 1;
background: rgba(0, 0, 0, 0.5);">
    
  <div class="row" id="pwd-container">
    <div class="col-md-5"></div>
    
    <div class="col-md-6">
      <section class="login-form">
        <form method="post" action="#" role="login" style="background : rgba(0,0,0,0.3)">
          <img href="#" src="<?php echo config_item('base_url') ?>assets/images/ICON.png" class="img-responsive" style="width:150px; height:100px;"> 
          <div class="row"> 
            
          <div class="col-md-6">
            <input type="text" name="nama" placeholder="Nama" required class="form-control"  />
            <input type="text" name="jabatan" placeholder="Jabatan di institusi" required class="form-control"  />
            <input type="text" name="nohp" placeholder="Nomor HP yang dapat dihubungi" required class="form-control"  />
            <input type="email" name="email" placeholder="Email" required class="form-control"  />
            <div class="form-group row">
              <div class="col-md-5"><label for ="it">Anda dari :</label> </div>
              <div class="col-md-7">
                  <select class="form-control" id="it" name="institusi">
                  <option>Institusi Pendidikan</option>
                  <option>Swasta / Pemerintahan</option>
                  </select>
              </div>
            </div>
          </div>

          <div class="col-md-6"> 
              <div class="form-group row">
                <div class="col-md-5"><label >Kelamin :</label></div>
                <div class="col-md-7">
                  <select class="form-control" id="jk" name="jk">
                    <option>Pria</option>
                    <option>Wanita</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-5"><label >Akreditasi :</label></div>
                <div class="col-md-7">
                  <select class="form-control" id="jk" name="akreditasi">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>None</option>
                  </select>
                </div>
              </div>
              <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
              <div class="pwstrength_viewport_progress"></div>
              <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Register</button>
              <div>
                <a href="<?php echo config_item('base_url') ?>login">Login <i class="fas fa-long-arrow-alt-right"></i></a> 
              </div>
          </div>

          
          </div>
          
        </form>
        
      
      </section>  
      </div>
      
      <div class="col-md-1"></div>
  </div>
  
  
</div>