<?php
class Pdfgenerator {

  public function generate($html, $filename){
    define('DOMPDF_ENABLE_AUTOLOAD', false);
    define('DOMPDF_ENABLE_REMOTE', false);
    require_once './vendor/dompdf/dompdf/dompdf_config.inc.php';

    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->set_paper('A4','portrait');
    $dompdf->render();
    $dompdf->stream($filename.".pdf", array("Attachment" => 0));
  }
}
?>