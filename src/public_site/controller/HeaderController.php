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
        <div class='header-line'></div>
        <nav>
          <a href='#'>
            <b>00</b> <p>HOME</p>
          </a>
          <a href='#'>
            <b>01</b> <p>DESTINATION</p>
          </a>
          <a href='#'>
            <b>02</b> <p>CREW</p>
          </a>
          <a href='#'>
            <b>03</b> <p>TECHNOLOGOY</p>
          </a>
        </nav>
      </header>
    ";
  }
}
