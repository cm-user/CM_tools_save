<?php
/**
 * Created by PhpStorm.
 * User: Okaou
 * Date: 06/06/2017
 * Time: 10:56
 */



namespace MailSignatureBundle\Controller;


//use MailSignatureBundle\Entity\MailSignature;
//use MailSignatureBundle\Form\MailSignatureType;
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

//        $mailSignature = new MailSignature();
//
//        $form = $this->createForm(MailSignatureType::class, $mailSignature);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//
//            $fs = new Filesystem();
//
//            $file = $this->getParameter('folder_cm_base').'redirect.php';
//            $content = '<?php header(\'Location: '.$mailSignature->getUrl().'\'); ?>';
        <?php
//
//            if($fs->exists($file)){
//                $fs->dumpFile($file, $content);
//            }
//
//            $fileName = 'actu-du-moment.gif';
//
//            $file = $mailSignature->getFilePicture();
//            $file->move($this->getParameter('folder_img_base'), $fileName);
//        }
//
//        $finder = new Finder();
//        $finder->files()->name('redirect.php');
//        $url = '';
//        foreach ($finder->files()->in($this->getParameter('folder_cm_base')) as $file) {
//            $content = $file->getContents();
//            preg_match_all('#Location: (.*?)\'\);#is', $content, $m);
//            $url = $m[1][0];
//        }
//
//        $img = $this->getParameter('url_base_bo').'img/actu-du-moment.gif?r='.rand(0,9999999999);

        return array(
//            'mail_signature' => $mailSignature,
//            'url_actuelle' => $url,
//            'img_actuelle' => $img,
//            'form' => $form->createView(),
        );
    }
}