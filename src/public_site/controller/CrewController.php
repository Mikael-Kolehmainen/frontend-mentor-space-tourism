<?php

namespace public_site\controller;

class CrewController
{
  public function showCrewPage(): void
  {
    echo "
        <link href='/src/public_site/styles/crew.css' rel='stylesheet' type='text/css'>
        <script src='/src/public_site/js/event-listeners/fullHeight.js' defer></script>
        <script src='/src/public_site/js/Menu.js' defer></script>
        <script src='/src/public_site/js/event-listeners/crewMenu.js' defer></script>
      </head>
    ";

    $this->showHeader();

    echo "
      <section id='full-height'>
        <article>
          <div class='title'>
            02 <h5>MEET YOUR CREW</h5>
          </div>
          <h4 id='crew-title'>COMMANDER</h4>
          <h3 id='crew-name'>DOUGLAS HURLEY</h3>
          <p id='crew-description'>
            Douglas Gerald Hurley is an American engineer, former Marine Corps
            pilot and former NASA astronaut. He launched into space for the
            third time as commander of Crew Dragon Demo-2.
          </p>
          <div class='switch' id='crew-switch'>
            <div class='option active' id='1'></div>
            <div class='option' id='2'></div>
            <div class='option' id='3'></div>
            <div class='option' id='4'></div>
          </div>
        </article>
        <article>
          <img id='crew-image' src='/src/public_site/media/image-douglas-hurley.webp' alt='Douglas Hurley'>
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
