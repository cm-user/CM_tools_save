<?php
/**
 * Created by PhpStorm.
 * User: Okaou
 * Date: 06/06/2017
 * Time: 10:56
 */



namespace MailSignatureBundle\Controller;


use MailSignatureBundle\Entity\ImageCommande;
use MailSignatureBundle\Form\ImageCommandeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ImageCommandeController extends Controller
{

    /**
     * Affichage de l'image de fin de commande en cours + le formulaire pour le changer
     * @Route("/image-commande", name="image_fin_commande_index")
     * @Template("MailSignatureBundle:ImageCommande:index.html.twig")
     * @param Request $request
     * @return array
     */
    public function indexAction(Request $request){

        $imagecommande = new ImageCommande();

        $form = $this->createForm(ImageCommandeType::class, $imagecommande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $fs = new Filesystem();

            $file = $this->getParameter('folder_cm_base').'redirect_image_commande.php';
            $content = '<?php header(\'Location: '.$imagecommande->getUrl().'\'); ?>';

            if($fs->exists($file)){
                $fs->dumpFile($file, $content);
            }
            else {
                fopen($file, "w+");
                $fs->dumpFile($file, $content);
            }

            $fileName = 'fin-commande.gif';

            $file = $imagecommande->getFilePicture();
            if($file){  //si l'utilisateur a selectionné une image, on la met sur le serveur sinon on garde la même par défaut
                $file->move($this->getParameter('folder_img_base'), $fileName);
            }            
        }

        $finder = new Finder();
        $finder->files()->name('redirect_image_commande.php');
        $url = '';
        foreach ($finder->files()->in($this->getParameter('folder_cm_base')) as $file) {
            $content = $file->getContents();
            preg_match_all('#Location: (.*?)\'\);#is', $content, $m);
            $url = $m[1][0];
        }

        $img = $this->getParameter('url_base').'img/fin-commande.gif?r='.rand(0,9999999999);

        return array(
            'image_commande' => $imagecommande,
            'url_actuelle' => $url,
            'img_actuelle' => $img,
            'form' => $form->createView(),
        );
    }
}