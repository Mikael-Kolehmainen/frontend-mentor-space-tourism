<?php

namespace public_site\controller;

class HomeController
{
  public function showHomePage(): void
  {
    echo "
        <link href='/src/public_site/styles/home.css' rel='stylesheet' type='text/css'>
      </head>
    ";

    $this->showHeader();

    echo "

    ";
  }

  private function showHeader(): void
  {
    $headerController = new HeaderController();
    $headerController->showHeader();
  }
}
