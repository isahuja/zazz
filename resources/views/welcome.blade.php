@extends('default')

@section('content')

<!-- Navigation -->
    

   <!--  <header class="masthead">
      <div class="header-content">
        <div class="header-content-inner">
          <h1 id="homeHeading">PC Support  that’s there</h1>
          <hr>
          <p>The best way to fix your PC problems</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
        </div>
      </div>
    </header>
 -->
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Are you able to troubleshoot yourself?</h2>
            <hr class="light">
            <!-- <p class="text-faded">Computer Repair is dedicated to providing the best customer service and computer repair available to you. When your Laptop, PC or Mac needs repairing, you won’t have to worry for long! Our technicians are skilled in dealing with all computers and gadgets whether you need home or business computer repairs.</p>
            <a class="btn btn-default btn-xl js-scroll-trigger" href="#services">Get Started!</a> -->

            <div>
              <span class="yes btn">Yes</span>
              <span class="no btn"> No</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 text-center">
            <div class="service-box">
              <!-- <i class="fa fa-desktop" aria-hidden="true"></i> -->
              <i class="fa fa-5x fa-desktop text-primary sr-icons"></i>
              <h3>Fix Desktop</h3><br>
              <a class="btn btn-default  sr-button" href="{{ URL::to('/desktop') }}" data-sr-id="6" style="; visibility: visible;  background:#ff0000; color:#fff;-webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: all 0.15s ease-in-out 0s, -webkit-transform 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; transition: all 0.15s ease-in-out 0s, transform 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; ">Click here</a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 text-center">
            <div class="service-box">
              <i class="fa fa-5x fa-laptop text-primary sr-icons"></i>
              <h3>Fix Laptop</h3><br>
              <a class="btn btn-default  sr-button" href="{{ URL::to('/laptop') }}" data-sr-id="6" style="; visibility: visible;  background:#ff0000; color:#fff;-webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: all 0.15s ease-in-out 0s, -webkit-transform 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; transition: all 0.15s ease-in-out 0s, transform 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s, opacity 1s cubic-bezier(0.6, 0.2, 0.1, 1) 0.2s; ">Click here</a>
            </div>
          </div>
        </div>
      </div>
    </section>
 
@stop

@section('scripts')

<script>
  $('.yes').click(function(){
    $('#services').toggleClass('show');
  });

  $('.no').click(function(){


  });
</script>

@stop