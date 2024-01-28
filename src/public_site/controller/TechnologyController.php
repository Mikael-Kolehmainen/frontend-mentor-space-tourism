<?php

namespace public_site\controller;

class TechnologyController
{
  public function showTechnologyPage(): void
  {
    echo "
        <link href='/src/public_site/styles/technology.css' rel='stylesheet' type='text/css'>
        <script src='/src/public_site/js/event-listeners/technologyMenu.js' defer></script>
      </head>
    ";

    $this->showHeader();

    echo "
      <section>
        <article>
          <div class='title'>
            03 <h5>SPACE LAUNCH 101</h5>
          </div>
          <div class='content'>
            <nav class='circles' id='technology-switch'>
              <div class='option active' id='1'>
                <p>1</p>
              </div>
              <div class='option' id='2'>
                <p>2</p>
              </div>
              <div class='option' id='3'>
                <p>3</p>
              </div>
            </nav>
            <div class='item'>
              <p class='subheading2'>THE TERMINOLOGY...</p>
              <h3 id='technology-title'>LAUNCH VEHICLE</h3>
              <p id='technology-description'>
                A launch vehicle or carrier rocket is a rocket-propelled vehicle
                used to carry a payload from Earth's surface to space, usually to
                Earth orbit or beyond. Our WEB-X carrier rocket is the most powerful
                in operation. Standing 150 metres tall, it's quite an awe-inspiring
                sight on the launch pad!
              </p>
            </div>
          </div>
        </article>
        <article class='aside'>
          <img id='technology-image' src='/src/public_site/media/image-launch-vehicle-portrait.jpg' alt='Launch Vehicle'>
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
