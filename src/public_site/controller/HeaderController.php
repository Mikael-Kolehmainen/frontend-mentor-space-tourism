<?php

namespace public_site\controller;

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
          <a href='#' class='active'>
            <div class='nav-title'>
              00 <p>HOME</p>
            </div>
          </a>
          <a href='#'>
            <div class='nav-title'>
              01 <p>DESTINATION</p>
            </div>
          </a>
          <a href='#'>
            <div class='nav-title'>
              02 <p>CREW</p>
            </div>
          </a>
          <a href='#'>
            <div class='nav-title'>
              03 <p>TECHNOLOGOY</p>
            </div>
          </a>
        </nav>
      </header>
    ";
  }
}
