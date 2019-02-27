 <?php echo $this->load->view('js'); ?>
       <?php echo $this->load->view('header'); ?>
       <?php echo $this->load->view('navbar'); ?>
 <br>
 <section class="contact py-lg-4 py-md-3 py-sm-3 py-3" id="contact">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Contact Us</h3>
        <div class="row">
          <div class="col-md-5 address-grid">
            <div class="addres-office-hour text-center" >
              <ul>
                <li class="mb-2">
                  <h6 data-blast="color">Address</h6>
                </li>
                <li>
                  <p>117/K-87 Sobha Tower<br>(Basement),Kakadeo,Kanpur</p>
                </li>
              </ul>
              <ul>
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Contect Number</h6>
                </li>
                <li class="mt-2">
                  <p>9935876986,9795277204</p>
                </li>
                <li class="mt-lg-4 mt-3">
                  <h6 data-blast="color">Email</h6>
                </li>
                <li class="mt-2">
                  <p><a href="#">info@example.com</a></p>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-7 contact-form">
            <form action="<?php echo base_url(); ?>index.php/query" method="post">
              <div class="row text-center contact-wls-detail">
                <div class="col-md-6 form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Name" required="">
                </div>
                <div class="col-md-6 form-group contact-forms">
                  <input type="text" class="form-control" placeholder="Mobile Number" required="">
                </div>
              </div>
              <div class="form-group contact-forms">
                <input type="email" class="form-control" placeholder="Email" required="">
              </div>
              <div class="form-group contact-forms">
                <textarea class="form-control" rows="3" placeholder="Your Message" required=""></textarea>
              </div>
              <div class="sent-butnn text-center">
                <button type="submit" class="btn btn-block" data-blast="bgColor">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
         <?php $this->load->view('footer');?>