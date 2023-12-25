<?php

namespace public_site\controller;
use api\manager\ServerRequestManager;

class DestinationController
{
  private $planets = [
    [
      "path" => "",
      "title" => "MOON",
      "description" => "See our planet as you’ve never seen it before. A perfect relaxing
        rip away to help regain perspective and come back refreshed. While
        you’re there, take in some history by visiting the Luna 2 and Apollo
        11 landing sites.",
      "fact-1" => "384,400 KM",
      "fact-2" => "3 DAYS"
    ],
    [
      "path" => "mars",
      "title" => "MARS",
      "description" => "Don’t forget to pack your hiking boots. You’ll need
        them to tackle Olympus Mons, the tallest planetary mountain in our
        solar system. It’s two and a half times the size of Everest!",
      "fact-1" => "225 MIL. KM",
      "fact-2" => "9 MONTHS"
    ],
    [
      "path" => "europa",
      "title" => "EUROPA",
      "description" => "The smallest of the four Galilean moons orbiting Jupiter,
        Europa is a winter lover’s dream. With an icy surface, it’s perfect
        for a bit of ice skating, curling, hockey, or simple relaxation in
        your snug wintery cabin.",
      "fact-1" => "628 MIL. KM",
      "fact-2" => "3 YEARS"
    ],
    [
      "path" => "titan",
      "title" => "TITAN",
      "description" => "The only moon known to have a dense atmosphere other
        than Earth, Titan is a home away from home (just a few hundred degrees
        colder!). As a bonus, you get striking views of the Rings of Saturn.",
      "fact-1" => "1.6 BIL. KM",
      "fact-2" => "7 YEARS"
    ]
  ];

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
        ";

    $this->showSubPageNavBar();

    echo "</nav>";

    $this->showDestinationSubPage();

    echo "
        </article>
      </section>
    ";
  }

  private function showHeader(): void
  {
    $headerController = new HeaderController();
    $headerController->showHeader();
  }

  private function showSubPageNavBar(): void
  {
    foreach ($this->planets as $planet) {
      echo "<a href='/index.php/destination/$planet[path]' {$this->isActiveNavItem($planet['path'])}>$planet[title]</a>";
    }
  }

  private function isActiveNavItem($path): string
  {
    $uri = ServerRequestManager::getUriParts();
    if ($uri[3] == $path) {
      return "class='active'";
    }
    return "";
  }

  private function showDestinationSubPage(): void
  {
    $uri = ServerRequestManager::getUriParts();
    foreach ($this->planets as $planet) {
      if ($uri[3] == $planet["path"]) {
        echo "
          <h2>$planet[title]</h2>
          <p>$planet[description]</p>
          <div class='line'></div>
          <div class='facts-box'>
            <div class='fact'>
              <p class='subheading2'>AVG. DISTANCE</p>
              <p class='subheading1'>{$planet['fact-1']}</p>
            </div>
            <div class='fact'>
              <p class='subheading2'>EST. TRAVEL TIME</p>
              <p class='subheading1'>{$planet['fact-2']}</p>
            </div>
          </div>
        ";
        break;
      }
    }
  }
}
