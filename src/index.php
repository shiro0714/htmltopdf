<?php
require __DIR__ . '/vendor/autoload.php';
 
use Dompdf\Dompdf;
 
$dompdf = new Dompdf();
 
// Jouw HTML
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PDF Export</title>
</head>
<body>
  <h1>Dit is een titel</h1>
  <p>En dit een alinea</p>
</body>
</html>
';
 
// HTML inladen
$dompdf->loadHtml($html);
 
// Papierformaat instellen
$dompdf->setPaper('A4', 'portrait');
 
// Renderen naar PDF
$dompdf->render();
 
// PDF in de browser tonen
$dompdf->stream("voorbeeld.pdf", ["Attachment" => false]);
 
 