<?php

namespace PictureCrawlerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use \ZipArchive;
use PictureCrawlerBundle\Entity\SearchCsv;
use PictureCrawlerBundle\Form\SearchCsvType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Search controller.
 * @Route("cadeau-maestro-zip")
 */
class ZipCadeauMaestroController extends Controller
{
    /**
     * @Route("/", name="picture_crawler_cm_zip_index")
     */
    public function indexAction(Request $request)
    {

        $searchCsv = new SearchCsv();

        $form = $this->createForm(SearchCsvType::class, $searchCsv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $searchCsv->getSearch();

            $fileName = "fichier_csv.csv";

            $file->move(
                $this->getParameter('picturecrawler'),
                $fileName
            );

            $row = 1;
            $array_lien = [];
            $array_nom = [];
            if (($handle = fopen("picturecrawler/fichier_csv.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    for ($c=0; $c < $num; $c++) {
                        if($c == 0){ 
                            $array_nom[] = $data[$c];
                        }
                        if($c == 1){
                            $array_lien[] = $data[$c];
                        }
                    }

                    $row++;

                }
                fclose($handle);
            }

            $array_lien_thumbs = [];
            $array_nom_thumbs = [];
            $array = [];
            for($i=0;$i<count($array_lien);$i++) {
                $temp_array = CadeauMaestroController::indexAction($array_lien[$i]);
                foreach ($temp_array as $string) {
                    $array_nom_thumbs[] = $array_nom[$i];
                    $array[] = $string;
                }
            }
          
                for($j=0;$j<count($array);$j++){
                    $array_lien_thumbs[] = $array[$j];
                }
            



            $zip = new ZipArchive();           
            if($zip->open('picturecrawler/Image_Cadeau_Maestro.zip') == TRUE)
                if($zip->open('picturecrawler/Image_Cadeau_Maestro.zip', ZipArchive::CREATE) === true)
                {
//                    for($j=0;$j<count($array_nom);$j++){
//                        $zip->addEmptyDir($array_nom[$j]); //Creation dossier
//                    }                  
                    
                    for($i=0;$i<count($array_lien_thumbs);$i++){
                        if(self::get_http_response_code($array_lien_thumbs[$i]) != "200"){ //verifie que la requete http fonctionne
//                            $file = $array_nom_thumbs[$i] . "-" . $i .'.txt'; //nom du fichier
//                            $zip->addFile($array_nom_thumbs[$i]."/".$file); //Ajout du fichier au ZIP dans un dossier
//                            $zip->addFromString($array_nom_thumbs[$i]."/".$file, 'emplacement de l\'image incorrect ! lien :'.$array_lien_thumbs[$i]);
                        }else{
                            $current = file_get_contents($array_lien_thumbs[$i]);
                            $file = $array_nom_thumbs[$i] . "-" . $i .'.png'; //nom du fichier
                            $folder_file = "picturecrawler/". $file; // nommage du fichier + son extension et choix du repertoire
                            file_put_contents($folder_file, $current); //creation du fichier au bon repertoire
                            $zip->addFile("picturecrawler/" .$file, $array_nom_thumbs[$i]."/".$file); //Ajout du fichier au ZIP dans un dossier
                        }                       
                    }

                    // Et on referme l'archive.
                    $zip->close();
                }
                else
                {
                    echo 'Impossible d&#039;ouvrir &quot;Zip.zip&quot;';
                    // Traitement des erreurs avec un switch(), par exemple.
                }

        }

        return $this->render('PictureCrawlerBundle:Search:search-zip-cadeau-maestro.html.twig',array (
            'form' => $form->createView(),
        ));

    }

    /**
     * @Route("/download", name="download_image")
     */
    public function download1Action()
    {
//        chmod("picturecrawler/". $date . '-Zip.zip', 0777);
        $fichier = 'Image_Cadeau_Maestro.zip' ;
        $chemin = "picturecrawler/"; // emplacement de votre fichier .pdf

        $response = new Response();
        $response->setContent(file_get_contents($chemin.$fichier));
        $response->headers->set('Content-Type', 'application/zip'); // modification du content-type pour forcer le téléchargement (sinon le navigateur internet essaie d'afficher le document)
        $response->headers->set('Content-Transfer-Encoding', 'Binary');
        $response->headers->set('Content-Length', filesize($chemin.$fichier));
        $response->headers->set('Content-disposition', 'filename='. $fichier);
        ob_end_clean();
        self::clearFolder("picturecrawler/");

        return $response;

    }
    /**
     * Supprime le contenu d'un dossier
     * sans supprimer le dossier lui-même
     */
    private function clearFolder($folder)
    {
        // 1 ouvrir le dossier
        $dossier=opendir($folder);
        //2)Tant que le dossier est pas vide
        while ($fichier = readdir($dossier))
        {
            //3) Sans compter . et ..
            if ($fichier != "." && $fichier != "..")
            {
                //On selectionne le fichier et on le supprime
                $Vidage= $folder.$fichier;
                unlink($Vidage);
            }
        }
        //Fermer le dossier vide
        closedir($dossier);
    }

    private function get_http_response_code($url) {
        $headers = get_headers($url);
        return substr($headers[0], 9, 3);
    }

    /**
     * @Route("/form")
     */
    public function formAction(Request $request)
    {

        $searchCsv = new SearchCsv();

        $form = $this->createForm(SearchCsvType::class, $searchCsv);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $searchCsv->getSearch();

            $fileName = "fichier_csv.csv";

            $file->move(
                $this->getParameter('picturecrawler'),
                $fileName
            );

            $row = 1;
            $array_lien = [];
            if (($handle = fopen("picturecrawler/fichier_csv.csv", "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    for ($c=0; $c < $num; $c++) {
                        $array_lien[] = $data[$c];
                    }

                    $row++;

                }
                fclose($handle);
            }

            $zip = new ZipArchive();
            if($zip->open('picturecrawler/Image_Cadeau_Maestro.zip') == TRUE)
                if($zip->open('picturecrawler/Image_Cadeau_Maestro.zip', ZipArchive::CREATE) === true)
                {
                    for($i=0;$i<count($array_lien);$i++){
                        $current = file_get_contents($array_lien[$i]); //recupere contenu du fichier
                        $folder_file = "picturecrawler/img" . $i .'.png'; // nommage du fichier + son extension et choix du repertoire
                        file_put_contents($folder_file, $current); //creation du fichier au bon repertoire
                        $file = 'img' . $i .'.png';
                        $zip->addFile('picturecrawler/' . $file, $file); //Ajout du fichier au ZIP
                    }

                    // Et on referme l'archive.
                    $zip->close();
                }
                else
                {
                    echo 'Impossible d&#039;ouvrir &quot;Zip.zip&quot;';
                    // Traitement des erreurs avec un switch(), par exemple.
                }



        }

        return $this->render('PictureCrawlerBundle:Search:search-zip-cadeau-maestro.html.twig',array (
            'form' => $form->createView(),
        ));
    }


}
