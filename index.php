<?php

use public_site\controller\CrewController;
use public_site\controller\ErrorController;
use public_site\controller\HomeController;
use public_site\controller\DestinationController;
use api\manager\ServerRequestManager;

require __DIR__ . "/src/inc/bootstrap.php";

session_start();

$uri = ServerRequestManager::getUriParts();

if ($uri[2] != "ajax") {
  echo "
    <!DOCTYPE html>
    <html lang='en'>
      <head>
        <title>Space Tourism</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='icon' type='image/png' sizes='32x32' href='/src/public_site/media/favicon-32x32.png'>
        <link href='/src/public_site/styles/main.css' rel='stylesheet' type='text/css'>
        <link href='/src/public_site/styles/root-variables.css' rel='stylesheet' type='text/css'>
  ";
}

switch ($uri[2]) {
  case "":
    showHome();
    break;
  case "destination":
    showDestination();
    break;
  case "crew":
    showCrew();
    break;
  case "error":
    showError("Error title", "This is the error page.", "/index.php");
    break;
  default:
    showError(
      "404 Not Found",
      "The page you're looking for doesn't exist.",
      "/index.php"
    );
    exit();
}

if ($uri[2] != "ajax") {
  echo "
      </body>
    </html>
  ";
}

function showHome(): void
{
  $homeController = new HomeController();
  $homeController->showHomePage();
}

function showDestination(): void
{
  $destinationController = new DestinationController();
  $destinationController->showDestinationPage();
}

function showCrew(): void
{
  $crewController = new CrewController();
  $crewController->showCrewPage();
}

/**
 * @param string $title
 * @param string $message
 * @param string $link
 */
function showError($title, $message, $link): void
{
  $errorController = new ErrorController($title, $message, $link);
  $errorController->showErrorPage();
}
