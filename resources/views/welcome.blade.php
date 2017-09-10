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
 <style>
.errorbox{display: none; color:red;}
 </style>
    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Do you want to troubleshoot yourself</h2>
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

    <section id="Query">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Send us your query</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 text-center">
            <div class="form-end">
                <form id='qryform' name='qryform' enctype="multipart/form-data">
                <div class="name-box">
                    <label for="">Name :</label>
                    <input type="text" id="name" name="name" required><br>
                    <div class="errorbox">Name cannot contain numbers</div><br>
                </div>
                <div class="email-box">
                    <label for="">Email : </label>
                    <input type="text" id="email" name="email" required><br>
                     <div class="errorbox">Email should be in 'abc@domian.com' format</div><br>
                </div>
                <div>
                    <label for="">Message:</label>
                    <textarea name="query" id="query" cols="30" rows="10"></textarea>
                </div>
                <br>
                <div>
                    Upload ID
                    <input type="file" name='file' id='file'>
                </div>
                <button id="register" class="btn">Submit</button>
                </form>
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
}
 
@stop

@section('scripts')

<script>
    $('.yes').click(function()
    {
        $('#services').toggleClass('show');
        $('#Query').removeClass('show');
    });

    $('.no').click(function()
    {
        $('#Query').toggleClass('show');
        $('#services').removeClass('show');
    });

    function validateEmail(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
  }

  function validateName(name) {
      var re = /^([^0-9]*)$/;
      return re.test(name);
  }


    $("form#qryform").submit(function(e)
    {

      var email = validateEmail($('#qryform #email').val()),
          name = validateName($('#qryform #name').val());

      if(email ==  true && name == true){

        $('.name-box .errorbox').hide();
           $('.email-box .errorbox').hide();
           
        e.preventDefault();
        var base_url = "{{ URL::to('/') }}";
        var formData = new FormData(this);
        console.log(formData);
        $.ajax(
        {
            url: base_url + '/register',
            type: 'POST',
            data: formData,
            async: false,
            success: function (data)
            {
                alert('Your query has been submitted. We will get back to you soon');
            },
            cache: false,
            contentType: false,
            processData: false
        });

      } else {
        e.preventDefault();

        if(email == true && name == false){
            $('.name-box .errorbox').show();
        } else if(email == false && name == true){
           $('.email-box .errorbox').show();
        } else{
          $('.name-box .errorbox').show();
           $('.email-box .errorbox').show();

        }

      }
    });
</script>

@stop