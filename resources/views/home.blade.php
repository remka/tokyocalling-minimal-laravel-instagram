@extends('layouts.app')

@section('title', 'Home')

@section('navigation')
    @parent
    <!-- This is appended to the main navigation. -->
@endsection

@section('content')

  <!-- Intro Header -->
  <header class="intro">
      <div class="intro-body">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">#stickers</h1>
                    <p class="brand-tagline">Stickers from the streets of Tokyo.
                      <br>Send your pics at <a href="mailto:hello@tokyocalling.jp">hello@tokyocalling.jp</a>
                    </p>
                    <a href="#about" class="btn btn-default btn-lg page-scroll">Mgnn... What?</a>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <!-- About Section -->
  <section id="about" class="container content-section text-center">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <h2>What?</h2>
              <p>
                Tokyo is a eclectic mix of thriving underground cultures, and a remarkable place when it comes to <a href="http://en.wikipedia.org/wiki/Street_art">street art</a> in general, and stickers in particular.<br />
                We are trying to draw a portrait of this unique city trough the art as seen its streets.
              </p>
              <p>The name of the project is a reference to the 1979 <a href="http://en.wikipedia.org/wiki/London_Calling">album</a> of The Clash.</p>
              <a href="#latest" class="btn btn-default btn-lg page-scroll">OK, Show me.</a>
          </div>
      </div>
  </section>

  <!-- Download Section -->
  <section id="latest" class="content-section text-center">
      <div class="download-section">
          <div class="container">
              <div class="col-lg-8 col-lg-offset-2">
                  <h2>Latest entries</h2>
                  <p>
                    Here are the 20 latest photographies.<br />
                    Want to contribute? <a href="#contact" class="page-scroll">Click here</a> to contact us.
                  </p>
                  <p>
                    <a href="#" class="sort-list active" data-type="date">By date</a>
                    <a href="#" class="sort-list" data-type="likes">By likes</a>
                    <a href="#" class="sort-list" data-type="comments">By comments</a>
                  </p>
              </div>
          </div>

          <div class="container">
            <ul class="instagram-list">
              @foreach ($items as $item)
                <li class="list-item" data-created="{{$item['created_time']}}" data-likes="{{$item['likes']['count']}}" data-comments="{{$item['comments']['count']}}">
                  <a href="{{$item['link']}}" target="_blank" class="openImage">
                    <img src="{{$item['images']['standard_resolution']['url']}}" alt="Image #{{$item['id']}}" />
                    <div class="stats">
                      <i class="fa fa-heart" aria-hidden="true"></i> {{$item['likes']['count']}}
                      <i class="fa fa-comment" aria-hidden="true"></i> {{$item['comments']['count']}}
                    </div>
                  </a>
                  <?php /*
                  {{$item['id']}}
                  {{$item['images']['standard_resolution']['url']}}
                  <pre class="pre-debug"><?php print_r($item); ?></pre>
                  https://github.com/vinkla/instagram
                  https://blackrockdigital.github.io/startbootstrap-grayscale/
                  */ ?>
                </li>
              @endforeach
            </ul>
              <div class="col-lg-8 col-lg-offset-2">
                  <a href="https://www.instagram.com/_tokyocalling/" class="btn btn-default btn-lg" target="_blank">See more on Instagram</a>
              </div>
          </div>
      </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="container content-section text-center">
      <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
              <h2>Contact us</h2>
              <p>
                Send us your pics, suggestions and or questions,<br />
                or just drop us a line to say hello.
              </p>
              <p><a href="mailto:hello@tokyocalling.jp">hello@tokyocalling.jp</a>
              </p>
              <ul class="list-inline banner-social-buttons">
                  <li>
                      <a href="https://www.instagram.com/_tokyocalling/" class="rounded"><i class="fa fa-instagram fa-fw"></i> <span class="network-name">Instagram</span></a>
                  </li>
                  <li>
                      <a href="https://twitter.com/SBootstrap" class="rounded"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                  </li>
                  <li>
                      <a href="https://www.facebook.com/toukyoucalling/" class="rounded"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                  </li>
              </ul>
          </div>
      </div>
  </section>

  <!-- Map Section -->
  <?php /* <div id="map"></div> */ ?>

@endsection

@section('javascript')
    @parent
    <!-- <p>This is page specific javascript</p> -->
@endsection
