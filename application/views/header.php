
 <div class="container-fluid">
          <div class="row headder-contact bg-info">
		  <div class="col-md-2 info-contact-agile">
		 <!-- <img src="<?php echo base_url();?>assets/images/Logo.jpg" alt=" " class="img-fluid" style="height: 15%;width: 53%;">-->
		  </div>
            <div class="col-md-5 info-contact-agile">
              
                <div>
                  <span class="fas fa-phone-volume" ></span>
                  <label style="color: white;">9935876986,9795277204,9795277205</label>
                </div>
                <div>
                  <span class="fas fa-envelope"></span>
                  <label style="color: white;">edoosphysics@gmail.com</label>
                </div>
              
            </div>
            <div class="col-md-5 icons px-0">
              <ul>
                <li><a href="#" data-toggle="modal" class="btn btn-primary" data-target="#registermodel" data-blast="bgColor" style="padding: 1px;"><span>Register Here</span></a></li>
                <li><a href="https://www.facebook.com/Edoos-Physics-Classes-1019349341586220/?modal=admin_todo_tour"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              </ul>
            </div>
          </div>
        </div>


           <div id="registermodel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLiveLabel" data-blast="color">Registraion</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
             <form class="theme-form"
                action="<?php echo base_url(); ?>index.php/registration"
                method="post">
                <label for="name">Student Name<span title="Required"
                        style="color:red;">*</span></label>
                <input type="text" class="form-control" id="name"
                    name="name" placeholder="Enter Name" required>
                   
                    <label for="mno">Mobile Number<span title="Required"
                        style="color:red;">*</span></label>
                <input type="text" class="form-control" id="mno"
                    name="mobile" placeholder="Enter Mobile Number" required>
                    
                    <label for="email">Email Id <span title="Required"
                        style="color:red;">*</span></label>
                <input type="text" class="form-control" id="email"
                    name="email" placeholder="Enter Email Id" required>
                    
                <br>
            <input type="submit" class="btn btn-primary" value="Register"/>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>