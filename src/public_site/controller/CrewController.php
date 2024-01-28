<?php

namespace public_site\controller;

class CrewController
{
  public function showCrewPage(): void
  {
    echo "
        <link href='/src/public_site/styles/crew.css' rel='stylesheet' type='text/css'>
        <script src='/src/public_site/js/event-listeners/fullHeight.js' defer></script>
        <script src='/src/public_site/js/event-listeners/crewMenu.js' defer></script>
      </head>
    ";

    $this->showHeader();

    /*
      Write JS script which fetches from a json file all the data for the crew
      members, run a for loop for creating the HTML elements and adding options
      to the switch. JS should also handle the switching obviously.
    */
    echo "
      <section id='full-height'>
        <article>
          <div class='title'>
            02 <h5>MEET YOUR CREW</h5>
          </div>
          <h4 id='crew-member-title'>COMMANDER</h4>
          <h3 id='crew-member-name'>DOUGLAS HURLEY</h3>
          <p id='crew-member-description'>
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
          <img id='crew-member-image' src='/src/public_site/media/image-douglas-hurley.webp' alt='Douglas Hurley'>
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
