<?php

namespace public_site\controller;

class HomeController
{
  public function showHomePage(): void
  {
    echo "
        <link href='/src/public_site/styles/home.css' rel='stylesheet' type='text/css'>
        <link href='/src/public_site/styles/hero.css' rel='stylesheet' type='text/css'>
      </head>
    ";

    $this->showHeader();

    echo "
      <section>
        <div class='hero'>
          <div class='left'>
            <h5>SO, YOU WANT TO TRAVEL TO</h5>
            <h1>SPACE</h1>
            <p>
              Let’s face it; if you want to go to space, you might as well
              genuinely go to outer space and not hover kind of on the edge of it.
              Well sit back, and relax because we’ll give you a truly out of this
              world experience!
            </p>
          </div>
          <div class='right'>
            <div class='CTA'>
              <h4>EXPLORE</h4>
            </div>
          </div>
        </div>
      </section>
    ";
  }

  private function showHeader(): void
  {
    $headerController = new HeaderController();
    $headerController->showHeader();
  }
}
