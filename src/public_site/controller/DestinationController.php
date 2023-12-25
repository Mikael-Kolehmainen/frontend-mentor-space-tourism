<?php

namespace public_site\controller;

class DestinationController
{
  public function showDestinationPage(): void
  {
    echo "
        <link href='/src/public_site/styles/destination.css' rel='stylesheet' type='text/css'>
      </head>
    ";

    $this->showHeader();

    echo "
      <section>
        <article>
          <div class='title'>
            01 <h5>PICK YOUR DESTINATION</h5>
          </div>
          <div class='planet'>
            <img src='/src/public_site/media/image-moon.webp' alt='Moon'>
          </div>
        </article>
        <article>
          <nav>
            <a href='/index.php/destination/moon' class='active'>MOON</a>
            <a href='/index.php/destination/mars'>MARS</a>
            <a href='/index.php/destination/europa'>EUROPA</a>
            <a href='/index.php/destination/titan'>TITAN</a>
          </nav>
          <h2>MOON</h2>
          <p>
            See our planet as you’ve never seen it before. A perfect relaxing
            rip away to help regain perspective and come back refreshed. While
            you’re there, take in some history by visiting the Luna 2 and Apollo
            11 landing sites.
          </p>
          <div class='line'></div>
          <div class='facts-box'>
            <div class='fact'>
              <p class='subheading2'>AVG. DISTANCE</p>
              <p class='subheading1'>384,400 KM</p>
            </div>
            <div class='fact'>
              <p class='subheading2'>EST. TRAVEL TIME</p>
              <p class='subheading1'>3 DAYS</p>
            </div>
          </div>
        </article>
      </section>
    ";
  }

  private function showHeader(): void
  {
    $headerController = new HeaderController();
    $headerController->showHeader();
  }
}
