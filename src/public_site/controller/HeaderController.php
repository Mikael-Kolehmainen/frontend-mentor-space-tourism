<?php

namespace public_site\controller;
use api\manager\ServerRequestManager;

class HeaderController
{
  public function showHeader(): void
  {
    echo "
        <link href='/src/public_site/styles/header.css' rel='stylesheet' type='text/css'>
      <header>
        <div class='logo'>
          <img src='/src/public_site/media/icons/logo.svg' alt='Space tourism logo'>
        </div>
        <div class='header-line'>
          <div class='line'></div>
        </div>
        <nav>
    ";

    $this->showNavbar();

    echo "
        </nav>
      </header>
    ";
  }

  private function showNavbar(): void
  {
    $navItems = [
      [
        "link" => "/index.php",
        "index" => "00",
        "title" => "HOME",
        "path" => ""
      ],
      [
        "link" => "/index.php/destination",
        "index" => "01",
        "title" => "DESTINATION",
        "path" => "destination"
      ],
      [
        "link" => "/index.php/crew",
        "index" => "02",
        "title" => "CREW",
        "path" => "crew"
      ],
      [
        "link" => "/index.php/technology",
        "index" => "03",
        "title" => "TECHNOLOGY",
        "path" => "technology"
      ]
    ];

    foreach ($navItems as $navItem) {
      echo "
        <a href='$navItem[link]' {$this->isActiveNavItem($navItem['path'])}>
          <div class='nav-title'>
            $navItem[index] <p>$navItem[title]</p>
          </div>
        </a>
      ";
    }
  }

  private function isActiveNavItem($path): string
  {
    $uri = ServerRequestManager::getUriParts();
    if ($uri[2] == $path) {
      return "class='active'";
    }
    return "";
  }
}
