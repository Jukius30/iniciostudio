@extends('layouts.apps')

@section('title', 'Inicio x GasWaraS')

@section('content')
  <style>
    .gws-page {
      background: #fff;
      padding: 28px 0 70px;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji",
        "Segoe UI Emoji";
    }

    .gws-container {
      width: min(980px, calc(100% - 40px));
      margin: 0 auto;
    }

    /* HERO */
    .gws-hero {
      display: grid;
      justify-items: center;
      margin: 6px 0 40px;
      position: relative;
    }

    .gws-rays {
      width: 520px;
      height: 520px;
      border-radius: 999px;
      background: repeating-conic-gradient(
        from 0deg,
        #93a867 0deg 16deg,
        #8aa162 16deg 32deg
      );
      filter: saturate(.95);
      display: grid;
      place-items: center;
    }

    .gws-circle {
      width: 330px;
      height: 330px;
      border-radius: 999px;
      overflow: hidden;
      position: relative;
      box-shadow: 0 18px 42px rgba(0,0,0,.22);
      outline: 6px solid rgba(255,255,255,.5);
    }

    .gws-circle-placeholder {
      background: radial-gradient(circle at 30% 20%, #f8f8f8, #d9dfc0);
      display: grid;
      place-items: center;
    }

    .gws-circle-title {
      position: absolute;
      inset: 0;
      display: grid;
      place-items: center;
      font-weight: 800;
      color: #fff;
      font-size: 42px;
      letter-spacing: .3px;
      text-shadow: 0 6px 20px rgba(0,0,0,.6);
    }

    .gws-hero-subtitle {
      margin-top: 14px;
      font-size: 14px;
      color: #6f6f6f;
      letter-spacing: .7px;
      text-transform: uppercase;
    }

    /* SECTIONS */
    .gws-section-grid {
      display: grid;
      grid-template-columns: 1.2fr .8fr;
      gap: 34px;
      align-items: start;
      margin-top: 22px;
    }

    .gws-h2 {
      margin: 0 0 10px;
      font-size: 26px;
      font-weight: 800;
      color: #111;
    }

    .gws-p {
      margin: 0;
      color: #3b3b3b;
      line-height: 1.7;
      font-size: 14.5px;
    }

    .gws-block {
      margin-bottom: 22px;
    }

    .gws-logo {
      width: 220px;
      max-width: 100%;
      display: block;
      margin-left: auto;
      margin-right: auto;
      filter: drop-shadow(0 14px 22px rgba(0,0,0,.18));
    }

    /* MEDIA ROW */
    .gws-media {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 26px;
      align-items: center;
      margin-top: 30px;
    }

    .gws-video-card {
      border-radius: 10px;
      overflow: hidden;
      border: 1px solid #e8e8e8;
      box-shadow: 0 18px 40px rgba(0,0,0,.08);
      background: #fff;
      position: relative;
      aspect-ratio: 16/9;
    }

    .gws-video-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      filter: contrast(1.02);
    }

    .gws-play {
      position: absolute;
      left: 18px;
      bottom: 18px;
      width: 54px;
      height: 54px;
      border-radius: 14px;
      display: grid;
      place-items: center;
      background: #6a4cff;
      box-shadow: 0 10px 24px rgba(106,76,255,.35);
    }

    .gws-play::before {
      content: '';
      display: block;
      width: 0;
      height: 0;
      border-left: 16px solid #fff;
      border-top: 10px solid transparent;
      border-bottom: 10px solid transparent;
      margin-left: 3px;
    }

    .gws-mock {
      border-radius: 10px;
      overflow: hidden;
      border: 1px solid #e8e8e8;
      box-shadow: 0 18px 40px rgba(0,0,0,.08);
      background: #fff;
      padding: 12px;
    }

    .gws-mock img {
      width: 100%;
      height: auto;
      display: block;
    }

    /* BUTTON */
    .gws-next {
      margin-top: 36px;
      display: grid;
      justify-items: center;
      gap: 10px;
    }

    .gws-next a {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      padding: 10px 18px;
      border-radius: 999px;
      border: 1px solid #e6e6e6;
      color: #111;
      text-decoration: none;
      font-weight: 700;
      font-size: 13px;
      background: #fff;
      box-shadow: 0 14px 26px rgba(0,0,0,.06);
      transition: transform .15s ease, box-shadow .15s ease;
    }

    .gws-next a:hover {
      transform: translateY(-1px);
      box-shadow: 0 18px 30px rgba(0,0,0,.08);
    }

    .gws-cursor {
      width: 20px;
      height: 20px;
      display: inline-block;
      border-left: 2px solid #111;
      border-bottom: 2px solid #111;
      transform: rotate(-35deg);
      border-radius: 2px;
      opacity: .75;
    }

    /* RESPONSIVE */
    @media (max-width: 860px) {
      .gws-section-grid { grid-template-columns: 1fr; }
      .gws-media { grid-template-columns: 1fr; }
      .gws-rays { width: 440px; height: 440px; }
      .gws-circle { width: 290px; height: 290px; }
      .gws-circle-title { font-size: 36px; }
    }

    @media (max-width: 520px) {
      .gws-rays { width: 360px; height: 360px; }
      .gws-circle { width: 240px; height: 240px; }
      .gws-circle-title { font-size: 30px; }
    }
  </style>

  <div class="gws-page">
    <div class="gws-container">

      {{-- HERO --}}
      <section class="gws-hero">
        <div class="gws-rays">
          <div class="gws-circle gws-circle-placeholder">
            <div class="gws-circle-title">GasWaraS</div>
          </div>
        </div>
        <div class="gws-hero-subtitle">Design Agency</div>
      </section>

      {{-- CONTENT GRID --}}
      <section class="gws-section-grid">
        <div>
          <div class="gws-block">
            <h2 class="gws-h2">About Company</h2>
            <p class="gws-p">
              GasWaraS Design Agency is a design agency that focuses on creating designs for content creators.
              We aim to solve the challenges faced by content creators who struggle with designing and video editing,
              allowing our customers to focus on creating content itself.
            </p>
          </div>

          <div class="gws-block">
            <h2 class="gws-h2">Target Market</h2>
            <p class="gws-p">
              The target market of GasWaraS Design Agency is content creators across Indonesia who lack the skills
              or time to handle design tasks on their own. So, with our services we hope to be able to help the
              content creators. This agency is particularly appealing to content creators as its primary target market,
              focusing on segments needed by content creators, such as editing, logos, mascots, or merchandise.
            </p>
          </div>
        </div>

        <div>
          <img class="gws-logo" src="{{ asset('assets/27b41b45194dbd1f68be314b9c24e8a25c44841b.png') }}" alt="GWS Design Agency">
        </div>
      </section>

      {{-- MEDIA ROW --}}
      <section class="gws-media">
        {{-- Video preview (placeholder pakai gambar grup) --}}
        <div class="gws-video-card">
          <img src="{{ asset('assets/grup.jpg') }}" alt="Video preview">
          <div class="gws-play" aria-hidden="true"></div>
        </div>

        {{-- Laptop mockup --}}
        <div class="gws-mock">
          <img src="{{ asset('assets/f73d397bcc363569a2119d811d5fb5bcfd082791.png') }}" alt="Website mockup">
        </div>
      </section>

      {{-- NEXT --}}
      <div class="gws-next">
        <span class="gws-cursor" aria-hidden="true"></span>
        <a href="#" role="button">See next work</a>
      </div>

    </div>
  </div>
@endsection
