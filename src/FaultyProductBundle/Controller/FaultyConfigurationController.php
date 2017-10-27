<?php
/**
 * Created by PhpStorm.
 * User: Okaou
 * Date: 12/10/2017
 * Time: 16:42
 */

namespace FaultyProductBundle\Controller;

use FaultyProductBundle\Entity\FaultyMail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Faultymail controller.
 *
 * @Route("configuration")
 */
class FaultyConfigurationController extends Controller
{    
    /**
     *
     *
     * @Route("/", name="faultyconfig_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        return $this->render('@FaultyProduct/config/index.html.twig', array(

        ));
    }

    /**
     *
     * @Route("/view_refunded/{intervalle}", name="faulty_view_refunded")
     * @Template("@FaultyProduct/config/delete.html.twig")
     * @Method("GET")
     */

    public function indexRefundedByDateAction($intervalle)
    {
        $faulties = $this->get('faulty.repository.faulty')->findAllOldFaultyRefunded($intervalle);

        return array(
            'faulties' => $faulties,
            'intervalle' => $intervalle,
        );
    }

    /**
     * Deletes a faultyAction entity.
     *
     * @Route("/view_refunded_json/{intervalle}", name="faulty_view_refunded_json", options={"expose"=true})
     * @Method("GET")
     */
    public function JsonviewAction($intervalle){

        return new JsonResponse($this->generateUrl('device_list'));
    }

    /**
     * @Route("/delete_refunded/{intervalle}", name="faulty_delete_refunded")
     * @return RedirectResponse
     *
     */

    public function DeleteRefundedByDate($intervalle)
    {
        
        $faulties = $this->get('faulty.repository.faulty')->findAllOldFaultyRefunded($intervalle);
        $dir_path = "faulty"; //chemin du dossier des images
        $ouverture = opendir($dir_path);
        $lecture = readdir($ouverture);
        foreach ($faulties as $faulty){

            $productImages = $faulty->getProduct()->getProductImages();
            $productImageRepository = $this->get('faulty.repository.product_image');

            foreach ($productImages as $productImage) {
//                \Doctrine\Common\Util\Debug::dump($productImage);
                /* @var $productImage ProductImage */
                $path_file = $productImage->getPicture(); //récupére l'url de l'image
                $file_name = str_replace("http://tools.cadeau-maestro.com/faulty/","",$path_file);  //récupére le nom de l'image
                if($path_file == null){
                    $productImageRepository->delete($productImage); //suppression dans la base de donnée
                }              
                else {
                    $path = $dir_path ."/". $file_name; //forme le chemin complet de l'image
                    unlink($path); //suppression de l'image
                    $productImageRepository->delete($productImage); //suppression dans la base de donnée
                }
                
                
            }
            $this->get('faulty.repository.faulty')->delete($faulty); //suppression du defectueux lié
        }
        closedir($ouverture); // fermeture du dossier
        return $this->redirectToRoute('faulty_view_refunded');
    }
}
