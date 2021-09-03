@extends('layouts.front.header')
@extends('layouts.front.navbar')
@section('content')
<section id="topbar" class="d-none d-lg-block sticky-wrapper" id="header-sticky-wrapper" style='background-color:#f5921d'>
    <div class="container clearfix">
      
    </div>
</section>
@include('layouts.front.carroussel')
@include('partials.services')
@include('partials.partenaires')
<div class='col-md-12 d-flex justify-content-center'>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d994.995114575367!2d9.704870929162157!3d4.024396037615283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061132b59a49e3b%3A0xe8ccb71d35729e79!2sBytes-corp!5e0!3m2!1sfr!2scm!4v1630331395774!5m2!1sfr!2scm" width="1600" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
@include('layouts.front.footer')
@endsection
