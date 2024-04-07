@extends('frontend.layouts.main')

@section('main-section')
    

<!-- slide -->
     <section class="home" id="Home">

<!-- <div id="my-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="Images/lab.avif" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <p>Text</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Images/lap.avif" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Title</h5>
                <p>Text</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="Images/med.avif" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h3>Providing Total 
                    Health Care Solutions For You!</h3>
        
                    <p>Health is wealth keep it healthy
                        Stay Safe, Stay Healthy</p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> -->




<!--  -->


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{url('frontend/Images/lap.avif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="{{url('frontend/Images/lab.avif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('frontend/Images/lap.avif')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

    <!-- Home Section -->
    <!-- <section class="home" id="Home">


        <div class="image">
            <img src="Images/hnd.jpg" alt="">
        </div>
        <div class="content">
            <h3>Providing Total 
            <h3>Health Care Solutions For You!</h3>

            <p>Health is wealth keep it healthy
                Stay Safe, Stay Healthy</p>
            <a href="#"><button class="view">Take a Service &nbsp;&nbsp;<i class="fa-solid fa-circle-info"></i></button></a>
        </div>

    </section> -->
    <!-- home section end -->

    <!-- icon section starts -->
    <!-- <h3 class="heading">Hospital <span> That You Can Trust</span></h3> -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>Doctor at Work</p>
        </div>


        <div class="icons">
            <i class="fa-solid fa-hospital-user"></i>
            <h3>1040+</h3>
            <p>Happy Patients</p>
        </div>


        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>240+</h3>
            <p> Bed Facility</p>
        </div>


        <div class="icons">
            <i class="fa-solid fa-stethoscope"></i>            
            <h3>440+</h3>
            <p>Doctor Facility</p>
        </div>

    </section>
    <!-- icon end -->
    <!-- services start -->
    <section class="services mt-5" id="OurServices">

        <h1 class="heading pt-3">Our <span>services</span></h1>
        <div class="box-container">

            <div class="box">
                <!-- <i class="fas fa-ambulance"></i>/ -->
                <i class="fa-solid fa-briefcase-medical"></i>
                <h3>Free Checkup</h3>
                <p>Visit our website and use our convenient online booking system to schedule your free checkup at a time that suits you best.</p>
                <a href="#" class="btn">Learn More<span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>24/7 Ambulance's</h3>
                <p>Our fleet of fully-equipped ambulances is ready to respond to emergencies 24 hours a day, 7 days a week. We prioritize a rapid and efficient response to ensure you receive timely medical attention.</p>
                <a href="#" class="btn">Learn More<span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>Emergency Care  </h3>
                <p>In case of an emergency, dial our dedicated emergency hotline at 1442556489. Our dispatch team is ready to assist you, dispatching the nearest ambulance to your location promptly.</p>
                <a href="#" class="btn">Learn More<span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <!-- <i class="fas fa-notes-medical"></i> -->
            <i class="fa-solid fa-syringe"></i>

                <h3>Medicines</h3>
                <p>our team of experienced pharmacists is dedicated to providing expert advice and support for all your medication-related needs.</p>
                <a href="#" class="btn">Learn More<span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <!-- <i class="fas fa-ambulance"></i> -->
            <i class="fas fa-procedures"></i>

                <h3>Bed Facility </h3>
                <p>Our patient rooms are thoughtfully designed to provide a welcoming and calming atmosphere. </p>
                <a href="#" class="btn">Learn More<span class="fas fa-chevron-right"></span></a>
            </div>
            <div class="box">
                <!-- <i class="fas fa-notes-medical"></i> -->
                <i class="fa-solid fa-hand-holding-medical"></i>
                <h3>Total Care</h3>
                <p>Our team of skilled healthcare professionals is committed to providing top-notch care and guidance to all members of our community.</p>
                <a href="#" class="btn">Learn More<span class="fas fa-chevron-right"></span></a>
            </div>
            

        </div>
    </section>
    <!-- Service Section send -->

<br><br>
    <!-- About Section -->
    <section class="about" id="about">
<h1 class="heading pt-2"><span>about</span>us</h1>
<div class="row">
    <div class="image">
        <img src="{{url('frontend/Images/abt.svg')}}" alt="">

    </div>
    <div class="contact-container">
        <h3>Our Mission</h3>
        <p>Welcome to Wellness Warriors, where we are dedicated to nurturing the synergy between mental and physical health. Our holistic approach recognizes the intricate connection between mind and body, and we strive to empower individuals to achieve balance, resilience, and overall well-being.</p>
        <h3>Our Values</h3>
        <p>We envision a community where individuals thrive mentally and physically, equipped with the tools to navigate life's challenges with resilience and vitality. At [Your Health and Wellness Center], we are here to guide you on your path to a healthier, happier you.</p>
        <a href="#" class="btn"><span class="fas fa-chevron-right"></span>learn more</a>
    </div>
</div>
    </section>

    <!-- End About -->
      <!-- Booking Section start -->
      <section class="book" id="book">
        <h1 class="heading pt-3"> <span>Book</span>Now</h1>
        <div class="row">
            <div class="image">
                <img src="{{url('frontend/Images/book.png')}}" alt="">
            </div>
            <form action="connect.php" method="POST">
                <h3>BOOK APPOINTMENT</h3>
                <input type="text" placeholder="Enter Your Name" name="name" id="box">
                <input type="number" placeholder="Enter Your Number" name="number" id="box">
                <input type="email" placeholder="Enter Your Email" name="email" id="box">
                <input type="date"  name="date"id="box">
                <input type="submit" value="BOOk NoW" id="btn">

            </form>
        </div>
      </section>
       <!-- Booking Section  End -->
 <!-- Footer Section start -->
 @endsection