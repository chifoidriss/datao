@extends('layouts.front.header')
@extends('layouts.front.navbar')
@section('content')

<section id="topbar" class="d-none d-lg-block" style='background-color:#f5921d'>
    <div class="container clearfix">
      
    </div>
</section>

<section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 style='color:#f5921d'>Contactez nous</h2>
        </div>

        <div class="row">
           
          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"style='color:#f5921d'></i>
              <h3>Notre Adresse</h3>
              <p>Bonapriso , Collège des nations</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"style='color:#f5921d'></i>
              <h3>Email</h3>
              <p>contact@dataosolutions.com</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"style='color:#f5921d'></i>
              <h3>Appelez-nous</h3>
              <p>+ 237 653 936 192</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" style="background-color:#f5921d">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
</section>
  
@include('layouts.front.footer')
@endsection
