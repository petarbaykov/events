@extends('layouts.eventMaster')

@section('content')
    <header>
        <div class="container">
          <div class="headerContent">
            <div class="bannerText">
                  <h2 class="bannerSubTitle">Be part of</h2>
                  <h1 class="confName">{{$event->name}}</h1>

                  <div class="bannerDesc justifyFlex justify-center">
                    <div class="smallDesc">17 -22 AUGUST</div>
                    <div class="smallDesc">LONDON </div>
                    <div class="smallDesc">2017 EDITION</div>
                  </div>

                  <div class="btn ">Get tickets</div>
            </div>
          </div>
        </div>
        <div class="headerOverlay"></div>
    </header>
    <div class="countdown">
        <div class="container">
          <div class="count-down justifyFlex">
               <div class="days counter-box">

                   <div >
                     <span>18</span>
                     дни</div>
               </div>
               <div class="hours counter-box"><div ><span>20</span> часа</div></div>
               <div class="minutes counter-box">

                 <div >
                   <span>45</span>
                   минути</div>
               </div>
               <div class="seconds counter-box">

                 <div ><span>15</span> секунди</div>
               </div>
           </div>
        </div>
    </div>
    <!-- About -->
    <section >
        <div class="container">
          <h1>About The Event</h1>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Lid est laborum dolo rumes fugats untras.

Rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.</p>
          <div class="justifyFlex">
            <div class="aboutBox">
                <span class="fa fa-map-marker"></span>
                <h3>Where</h3>
                <p>West International Conference Center</p>

                <p> San Francisco, CA</p>

                <div class="btn ">Learn more</div>
            </div>
            <div class="aboutBox">
              <span class="fa fa-clock-o"></span>
              <h3>When</h3>
              <p>Saturday to Thursday (09:00 AM to 05:00 PM)</p>

              <p>July 15 to 19, 2017</p>
            </div>
          </div>
        </div>
    </section>

    <!-- COUNTERS -->

    <section class="stats">
      <div class="container justifyFlex statsContent">
          <div class="statsBox">
              <h3>968</h3>
              <h4>Participents</h4>
              <hr>
              <span class="fa fa-users"></span>
          </div>
          <div class="statsBox">
            <h3>117</h3>
            <h4>Speakers</h4>
            <hr>
            <span class="fa fa-microphone"></span>
          </div>
          <div class="statsBox">
            <h3>121</h3>
            <h4>Sessions</h4>
            <hr>
            <span class="fa fa-calendar"></span>
          </div>
          <div class="statsBox">
            <h3>87</h3>
            <h4>Sponsors</h4>
            <hr>
            <span class="fa fa-windows"></span>
          </div>
      </div>
      <div class="statsOverlay"></div>
    </section>

    <section class="speakers">
        <div class="container">
            <h1>Speakers</h1>
            <div class="speakersContainer justifyFlex">
                <div class="speakerBox">
                    <img src="{{asset('images/s1.jpg')}}">
                    <div class="speakerInfo">
                      <h3>Jonathan Smith</h3>
                      <h4>COO, Apple Inc.</h4>
                    </div>
                    <div class="social">
                        <span class="fa fa-twitter"></span>
                        <span class="fa fa-linkedin"></span>
                        <span class="fa fa-dribbble"></span>
                    </div>
                </div>
                <div class="speakerBox">
                    <img src="{{asset('images/s2.jpg')}}">
                    <div class="speakerInfo">
                      <h3>Jonathan Smith</h3>
                      <h4>COO, Apple Inc.</h4>
                    </div>
                    <div class="social">
                        <span class="fa fa-twitter"></span>
                        <span class="fa fa-linkedin"></span>
                        <span class="fa fa-dribbble"></span>
                    </div>
                </div>
                <div class="speakerBox">
                    <img src="{{asset('images/s3.jpg')}}">
                    <div class="speakerInfo">
                      <h3>Jonathan Smith</h3>
                      <h4>COO, Apple Inc.</h4>
                    </div>
                    <div class="social">
                        <span class="fa fa-twitter"></span>
                        <span class="fa fa-linkedin"></span>
                        <span class="fa fa-dribbble"></span>
                    </div>
                </div>
                <div class="speakerBox">
                    <img src="{{asset('images/s1.jpg')}}">
                    <div class="speakerInfo">
                      <h3>Jonathan Smith</h3>
                      <h4>COO, Apple Inc.</h4>
                    </div>
                    <div class="social">
                        <span class="fa fa-twitter"></span>
                        <span class="fa fa-linkedin"></span>
                        <span class="fa fa-dribbble"></span>
                    </div>
                </div>
                <div class="speakerBox">
                    <img src="{{asset('images/s2.jpg')}}">
                    <div class="speakerInfo">
                      <h3>Jonathan Smith</h3>
                      <h4>COO, Apple Inc.</h4>
                    </div>
                    <div class="social">
                        <span class="fa fa-twitter"></span>
                        <span class="fa fa-linkedin"></span>
                        <span class="fa fa-dribbble"></span>
                    </div>
                </div>
                <div class="speakerBox">
                    <img src="{{asset('images/s3.jpg')}}">
                    <div class="speakerInfo">
                      <h3>Jonathan Smith</h3>
                      <h4>COO, Apple Inc.</h4>
                    </div>
                    <div class="social">
                        <span class="fa fa-twitter"></span>
                        <span class="fa fa-linkedin"></span>
                        <span class="fa fa-dribbble"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container justifyFlex">
            <div class="col4">

                    <div class="fa fa-map-marker"></div>
                    <div>
                      <h3>Wst. Conference Center</h3>
                      San Francisco, CA
                    </div>

            </div>
            <div class="col4">

                  <div class="fa fa-clock-o"></div>
                  <div>
                    <h3>July 15 - 19, 2017</h3>
                    09:00 AM - 05:00 PM
                  </div>

            </div>
            <div class="col4">

                  <div class="fa fa-sitemap"></div>
                  <div>
                    <h3>343 Available Seats</h3>
                    Hurryup! few tickets are left
                  </div>

            </div>
            <div class="col4">

                  <div class="fa fa-cutlery"></div>
                  <div>
                    <h3>Free Lunch & Snacks</h3>
                    Don't miss it
                  </div>

            </div>
        </div>
    </section>

    <section class="schedule">
        <div class="container">
            
        </div>
    </section>
@endsection
