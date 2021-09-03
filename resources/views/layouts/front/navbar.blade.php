<body>
<style>
  .hero__search__phone {
	float: right;
  bottom: 0;
  left: 0;
  position:fixed;
  z-index: 900;
}

.hero__search__phone1 {
	float: right;
  bottom: 0;
  right: 0;
  position:fixed;
  margin-left:-9s0px;
  z-index: 900;
}

.hero__search__phone__icon {
	font-size: 18px;
	color: #7fad39;
	height: 50px;
	width: 50px;
	background: #f5f5f5;
	line-height: 50px;
	text-align: center;
	border-radius: 50%;
	float: left;
	margin-right: 20px;

}

.hero__search__phone__text {
	overflow: hidden;
}
</style>
<a href="tel:653936192"><div class="hero__search__phone fixed-div">
        <div class="hero__search__phone__icon" style="background-color:#f5921d">
             <i class="icofont-phone" style="margin-top:168px;color:black;"></i>
         </div>
                            
</div></a>
<a href="https://api.whatsapp.com/send/?phone=+237653936197&text=Hello Datao Solutions"><div class="hero__search__phone1 fixed-div">
        <div class="hero__search__phone__icon" style="background-color:#01D758">
             <i class="icofont-brand-whatsapp" style="margin-top:18px;color:black;width:200px;"></i>
         </div>
                            
</div></a>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <a href="../index.php" style="color:#52504d;"><img src="assets/img/1.jpg" alt="" class="img-fluid">
            <span style="font-size:30px;">Datao Solutions</span>
        </a>
        
        <!-- Uncomment below if you prefer to use an image logo -->
         
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Accueil</a></li>
          <li class="drop-down"><a href="">Services Camtel</a>
            <ul>
              <li><a href="{{url('/credit')}}">Recharge Crédit</a></li>
              <li><a href="{{url('forfait-fako')}}">Recharge Forfait Fako</a></li>
              <li><a href="{{url('forfait-blues')}}">Recharge Forfait Blues</a></li>
              <li><a href="{{url('/sim')}}">Achat Sim</a></li>
              <li><a href="{{url('/modem')}}">Modems</a></li>
            </ul>
          </li>
          <li><a href="{{url('/shop')}}">Matériels Informatique</a></li>
          
          <li><a href="{{url('/apropos')}}">A Propos </a></li>
          <li><a href="{{url('/contact')}}">Contacts</a></li>
          <li><a href="#contct">Aides?</a></li>
        </ul>
      </nav><!-- .nav-menu -->

       

    </div>
  </header><!-- End Header -->
  @yield('content')
  @yield('carroussel')

  