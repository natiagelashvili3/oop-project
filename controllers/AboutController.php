<?php

use config\Controller;
use Dompdf\Dompdf;

class AboutController extends Controller {

    public function index()
    {

        if(isset($_POST) && isset($_POST['pdf'])) {
            // instantiate and use the dompdf class
            $dompdf = new Dompdf();
            $dompdf->loadHtml('hello NATIA');

            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'landscape');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream();
        }

        $about = new About();
        
        $this->data['about'] = $about->getAboutData();
        $this->data['menu'] = $about->getMenu();
        
        $this->tpl = 'about';
    }

}