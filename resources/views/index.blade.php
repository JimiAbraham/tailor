@extends('layout.app')


@section('contents')


<div class="content-area">

    <h1 class="white-text center welcome-logo index-welcome">The Designer</h1>

    <div class="fullfixed index-carousel">

      <div class="carousel carousel-fullscreen carousel-slider">

            <a class="carousel-item" href="#carousel-slide-0!">
          <div class="bg" style="background-image: url('assets/images/thedesigner1.jpg')"></div>
          <div class="item-content center-align white-text">

                      <h3>Take Your Tailoring To Another Level</h3>

          </div>
                  <div class="wave-bg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="var(--primary-color)" fill-opacity="1" d="M0,96L24,80C48,64,96,32,144,42.7C192,53,240,107,288,154.7C336,203,384,245,432,245.3C480,245,528,203,576,154.7C624,107,672,53,720,58.7C768,64,816,128,864,138.7C912,149,960,107,1008,128C1056,149,1104,235,1152,240C1200,245,1248,171,1296,133.3C1344,96,1392,96,1416,96L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"/></svg>
              <div></div>
            </div>

          </a>
            <a class="carousel-item" href="#carousel-slide-1!">
          <div class="bg" style="background-image: url('assets/images/thedesigner2.jpg')"></div>
          <div class="item-content center-align white-text">

                      <h3>Interact with your clients on different level</h3>

          </div>
                  <div class="wave-bg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="var(--primary-color)" fill-opacity="1" d="M0,96L24,80C48,64,96,32,144,42.7C192,53,240,107,288,154.7C336,203,384,245,432,245.3C480,245,528,203,576,154.7C624,107,672,53,720,58.7C768,64,816,128,864,138.7C912,149,960,107,1008,128C1056,149,1104,235,1152,240C1200,245,1248,171,1296,133.3C1344,96,1392,96,1416,96L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"/></svg>
              <div></div>
            </div>

          </a>
            <a class="carousel-item" href="#carousel-slide-2!">
          <div class="bg" style="background-image: url('assets/images/thedesigner3.jpg')"></div>
          <div class="item-content center-align white-text">

                      <h3>Show your clients thay fashion is LIFE</h3>

          </div>
                  <div class="wave-bg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="var(--primary-color)" fill-opacity="1" d="M0,96L24,80C48,64,96,32,144,42.7C192,53,240,107,288,154.7C336,203,384,245,432,245.3C480,245,528,203,576,154.7C624,107,672,53,720,58.7C768,64,816,128,864,138.7C912,149,960,107,1008,128C1056,149,1104,235,1152,240C1200,245,1248,171,1296,133.3C1344,96,1392,96,1416,96L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"/></svg>
              <div></div>
            </div>

          </a>
            <a class="carousel-item" href="#carousel-slide-3!">
          <div class="bg" style="background-image: url('assets/images/pic2.jpg')"></div>
          <div class="item-content center-align white-text">

                      <h3>Stand out amongst your competitors with this web app</h3>

          </div>
                  <div class="wave-bg">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="var(--primary-color)" fill-opacity="1" d="M0,96L24,80C48,64,96,32,144,42.7C192,53,240,107,288,154.7C336,203,384,245,432,245.3C480,245,528,203,576,154.7C624,107,672,53,720,58.7C768,64,816,128,864,138.7C912,149,960,107,1008,128C1056,149,1104,235,1152,240C1200,245,1248,171,1296,133.3C1344,96,1392,96,1416,96L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"/></svg>
              <div></div>
            </div>

          </a>
          </div></div>

    <div class="center index-start">
      <a href="{{ route('dashboard')}}" class='waves-light btn-large bg-primary'>  Get Started
      </a></div>









    </div>

@endsection
