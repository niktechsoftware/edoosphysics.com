
 <div class="container-fluid">
          <div class="row headder-contact bg-info">
            <div class="col-lg-6 col-md-7 col-sm-9 info-contact-agile">
              <ul>
                <li>
                  <span class="fas fa-phone-volume" ></span>
                  <p>9935876986,9795277204,9795277205</p>
                </li>
                <li>
                  <span class="fas fa-envelope"></span>
                  <p><a href="#">edoosphysics@gmail.com</a></p>
                </li>
                <li>
                </li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-5 col-sm-3 icons px-0">
              <ul>
                <li><a href="#" data-toggle="modal" class="btn btn-primary" data-target="#exampleModalLive" data-blast="bgColor"><span>Register Here</span></a></li>
                <li><a href="https://www.facebook.com/Edoos-Physics-Classes-1019349341586220/?modal=admin_todo_tour"><span class="fab fa-facebook-f"></span></a></li>
                <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
              </ul>
            </div>
          </div>
        </div>


           <div id="exampleModalLive" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
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