<?php
//CODIGO QUE TRAE LA DATA DEL EXCEL

require __DIR__ . '/vendor/autoload.php';

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;


putenv('GOOGLE_APPLICATION_CREDENTIALS=' . __DIR__ . '/credentials.json');
$client = new Google_Client;
$client->useApplicationDefaultCredentials();

$client->setApplicationName("Something to do with my representatives");
$client->setScopes(['https://www.googleapis.com/auth/drive','https://spreadsheets.google.com/feeds']);

if ($client->isAccessTokenExpired()) {
    $client->refreshTokenWithAssertion();
}

$accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];
ServiceRequestFactory::setInstance(
    new DefaultServiceRequest($accessToken)
  

);

// Get our spreadsheet
$spreadsheet = (new Google\Spreadsheet\SpreadsheetService)
   ->getSpreadsheetFeed()
   ->getByTitle('girsu excel');

// Get the first worksheet (tab)
$worksheets = $spreadsheet->getWorksheetFeed()->getEntries();
$worksheet = $worksheets[0]; //hoja de acreditados
$worksheet2 = $worksheets[1]; //hoja de invitados

$listFeedAcreditados = $worksheet->getListFeed();
$listFeedInvitados = $worksheet2->getListFeed();

/* SCRIPT QUE TRAE LA LISTA DE ACREDITADOS DE EXCECL 

foreach ($listFeedAcreditados->getEntries() as $entry) {
    $representative = $entry->getValues();
    print_r($representative);
}
