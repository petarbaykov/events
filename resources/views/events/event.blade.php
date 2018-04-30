@extends('layouts.eventMaster')
<?php

?>
@section('content')
    <header class="home">
        <nav>
          <div class="container">
            <a href="{{asset('event/'.$event->slug)}}" class="logo">{{$event->name}}</a>
              <ul>
                <li><a id="home">Home</a></li>
                <li><a id="about">About</a></li>
                <li><a id="speakers">Speakers</a></li>
                <li><a id="schedule">Shedule</a></li>
                <li><a id="tickets">Tickets</a></li>
                <li><a id="contacts">Contacts</a></li>
              </ul>
              <div class="clearfix"></div>
          </div>
        </nav>
        <div class="container">
          <div class="headerContent">
            <div class="bannerText">
                  <h2 class="bannerSubTitle">{{$header_data->title1}}</h2>
                  <h1 class="confName">{{$header_data->title2}}</h1>

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
    <section class="about scrollspy">
        <div class="container">
          <h1 class="sectionTitle">About The Event</h1>
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

              <span class="fa fa-users"></span>
          </div>
          <div class="statsBox">
            <h3>117</h3>
            <h4>Speakers</h4>

            <span class="fa fa-microphone"></span>
          </div>
          <div class="statsBox">
            <h3>121</h3>
            <h4>Sessions</h4>

            <span class="fa fa-calendar"></span>
          </div>
          <div class="statsBox">
            <h3>87</h3>
            <h4>Sponsors</h4>

            <span class="fa fa-windows"></span>
          </div>
      </div>
      <div class="statsOverlay"></div>
    </section>

    <section class="speakers scrollspy">
        <div class="container">
            <h1 class="sectionTitle">Speakers</h1>
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
            <div class="col4 ">

                    <div class="fa fa-map-marker"></div>
                    <div>
                      <h3>Wst. Conference Center</h3>
                      San Francisco, CA
                    </div>

            </div>
            <div class="col4 ">

                  <div class="fa fa-clock-o"></div>
                  <div>
                    <h3>July 15 - 19, 2017</h3>
                    09:00 AM - 05:00 PM
                  </div>

            </div>
            <div class="col4 ">

                  <div class="fa fa-sitemap"></div>
                  <div>
                    <h3>343 Available Seats</h3>
                    Hurryup! few tickets are left
                  </div>

            </div>
            <div class="col4 ">

                  <div class="fa fa-cutlery"></div>
                  <div>
                    <h3>Free Lunch & Snacks</h3>
                    Don't miss it
                  </div>

            </div>
        </div>
    </section>

    <section class="schedule scrollspy">
        <div class="container">
          <h1 class="sectionTitle">Schedule</h1>
          <div class="schedule_row">
                <span class="time">8.00 - 9.00</span>
                <div class="activity">Регистрация</div>
                <span class="starter">

                </span>
            </div>
            <div class="schedule_row">
                    <span class="time">9.00 - 10.00</span>
                    <div class="activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    <span class="starter">

                    </span>
            </div>
            <div class="schedule_row">
                    <span class="time">10.00 - 11.00</span>
                    <div class="activity">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    <span class="starter">

                    </span>
                </div>
        </div>
    </section>

    <section class="tickets pricing  scrollspy">
        <div class="container justifyFlex">
            <div class="col3 priceBox">
                <h3>Basic</h3>
                <h2 class="price">$ 29</h2>
                <ul>
                  <li>Entrance </li>
                  <li>Free Lunch & Snacks </li>
                  <li>Custom Badge </li>
                  <li>Certificate</li>
                  <li></li>
                </ul>

                <div class="btn">
                  Buy ticket
                </div>
            </div>
            <div class="col3 priceBox">
              <h3>Basic</h3>
              <h2 class="price">$ 29</h2>
              <ul>
                <li>Entrance </li>
                <li>Free Lunch & Snacks </li>
                <li>Custom Badge </li>
                <li>Certificate</li>
                <li></li>
              </ul>

              <div class="btn">
                Buy ticket
              </div>
            </div>
            <div class="col3 priceBox">
              <h3>Basic</h3>
              <h2 class="price">$ 29</h2>
              <ul>
                <li>Entrance </li>
                <li>Free Lunch & Snacks </li>
                <li>Custom Badge </li>
                <li>Certificate</li>
                <li></li>
              </ul>

              <div class="btn">
                Buy ticket
              </div>
            </div>
        </div>
    </section>

    <section class="sponsors">
        <div class="container">
          <h1 class="sectionTitle">Sponsors</h1>
          <div class="justifyFlex">
              <div class="col3 sponsorBox">
                <img src="{{asset('images/google.png')}}" alt="">
              </div>
              <div class="col3 sponsorBox">
                <img src="{{asset('images/facebook.jpg')}}" alt="">
              </div>
              <div class="col3 sponsorBox">
                <img src="{{asset('images/microsoft.png')}}" alt="">
              </div>
            </div>
        </div>
    </section>

    <section class="contacts map  scrollspy">
        <div class="container">
            <h1 class="sectionTitle">Venu Information</h1>
            <div class="justifyFlex infoTiles">
              <div class="infoTile col3">
                <span class="fa fa-map-marker"></span>
                <h2>Location</h2>
                <p>PLEASE NOTE: The conference takes place at the Oagnuson Convention Center Hotel (TFE 3EW), not the Spanish College Site. See the map for exact information.</p>
              </div>
              <div class="infoTile col3">
                <span class="fa fa-bus"></span>
                <h2>Transport</h2>
                <p>To get to the venu place, you can take one of the city bus lines, tube or railway service. All the services are comfortable to reach into the place.</p>

              </div>
              <div class="infoTile col3">
                <span class="fa fa-building"></span>
                <h2>Hotels</h2>
                <p>Suitable Hotels and Restaurents are surrounded all the area. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>

              </div>
            </div>

        </div>


          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19726.621903726525!2d23.283359825929875!3d42.695676282305115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa8682cb317bf5%3A0x400a01269bf5e60!2z0KHQvtGE0LjRjw!5e0!3m2!1sbg!2sbg!4v1525015577365" width="600" height="450" frameborder="0" style="border:0" allowfullscreen class="gMap"></iframe>
    </section>

    <footer>
        <div class="container">
            <h2>Stay Updated - Join Our Newsletter</h2>
            <div class="col3">

            </div>
            <div class="col3">

            </div>
            <div class="col3">

            </div>
            <div class="alignCenter">
                <input type="text" name="" value="" placeholder="Enter your name">
                <button type="button" name="button" class="btn">Subscribe</button>
            </div>
        </div>
        <div class="subFooter">
          <div class="container">
            <div>
                <span class="fa fa-facebook"></span>
                <span class="fa fa-twitter"></span>
                <span class="fa fa-google"></span>
                <span class="fa fa-linkedin"></span>
                <span class="fa fa-instagram"></span>
            </div>
            <p>Copyright © 2017 Eventime. All Rights Reserved.</p>
          </div>
        </div>
    </footer>
@endsection
