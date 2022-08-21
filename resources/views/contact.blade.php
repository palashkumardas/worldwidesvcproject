@extends('layout.app')

@section('title','Contact | Worldwide Services')

@section('content')
  
    <main id="main">
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact overflow-hidden">
        <div class="contact_bg" style="background-image:url('frontend/assets/img/main_bg.png') ;">
          <div class="container">
            <div class="row mt-5 g-4 align-items-center">
              <div class="col-lg-6 pe-0 pe-lg-5">
                <div class="contact-content">
                  <h1>Get In Touch.</h1>
                  <p>Here at Worldwide, we're passionate about serving our customers every step of the way. If you wish to contact,order or need information start by filling out the form on the left.</p>
                </div>
                <div class="row g-4  contact-card">
                  <div class="col-12 col-md-6 text-white">
                    <div class="p-3 " style="background-color: #3CB4E7;border-radius: 12px;">
                      <p>Call us</p>
                      <p>+44 (0) 20 8855 7777</p>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="p-3" style="background-color: white;border-radius: 12px;">
                      <p style="color:#FFAD9A;">Email us</p>
                      <p style="color: #3CB4E7;">info@worldwidesvc.com</p>
                    </div>
                  </div>
                  <div class=" col-12 col-md-6">
                    <div class="p-3" style="background-color: white;border-radius: 12px;color: #3CB4E7;">
                      <p>Monday to Friday <br> 9:00 AM to 5:00 PM </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 ps-0 ps-lg-5">
                <form action="http://worldwidesvc.com/forms/contact.php" method="post" role="form" class="php-email-form">
                  <h2>Contact Us </h2>
                  <p>If you have any question or issue’s to use our <br> product. Fill the form below. We’ll help you. </p>
                  <div class="d-flex form-flex">
                    <div class="width-50 pe-0 pe-md-2">
                      <label for="exampleFormControlInput1" class="form-label">Your name <span style="color: 
                    #3CB4E7;">*</span>
                      </label>
                      <input type="text" class="form-control" placeholder="Enter your name" required />
                    </div>
                    <div class=" width-50 ps-0 ps-md-2">
                      <label for="exampleFormControlInput1" class="form-label">Your email <span style="color: 
                    #3CB4E7;">*</span>
                      </label>
                      <input type="email" class="form-control" placeholder="Enter your email" required />
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="name" class="mb-2">Message <span style="color: 
                  #3CB4E7;">*</span>
                    </label>
                    <textarea class="form-control" name="message" rows="5" placeholder="Write your message" required></textarea>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div>
                    <button class="w-100 mt-2" type="submit">Contact Us</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
      <section>
        <div class="container-fluid">
          <div class="row clearfix">
            <div class="col-md-12 p-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.36261867371!2d0.08744381591224921!3d51.48821281992663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a8cc73aae0cd%3A0xa0ebb28a923cf32d!2s92a%20Plumstead%20High%20St%2C%20London%20SE18%201SL%2C%20UK!5e0!3m2!1sen!2sbd!4v1650344758723!5m2!1sen!2sbd" width="100%" height="450px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->
    @endsection
