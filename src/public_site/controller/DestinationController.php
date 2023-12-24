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

      </section>
    ";
  }

  private function showHeader(): void
  {
    $headerController = new HeaderController();
    $headerController->showHeader();
  }
}
