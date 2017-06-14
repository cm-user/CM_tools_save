<?php

namespace MarketingBundle\Controller;

use Hampe\Inky\Inky;
use MarketingBundle\Entity\NewsletterBlock;
use MarketingBundle\Entity\NewsletterMenu;
use MarketingBundle\Entity\Shop;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MarketingBundle\Entity\Newsletter;
use MarketingBundle\Form\NewsletterType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Newsletter controller.
 * @Route("/newsletter")
 */
class NewsletterController extends Controller
{
    /**
     * Liste de toutes les newsletters
     * @Route("/", name="newsletter_index")
     * @Template("@Marketing/newsletter/index.html.twig")
     * @return array
     */
    public function indexAction(Request $request)
    {
        $newsletters = $this->get('marketingbundle.repository.newsletter')->findAllOrderByDate();
        $shops = $this->get('marketingbundle.repository.shop')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $newsletters,
            $request->query->getInt('page', 1),
            10
        );

        return array(
            'newsletters' => $pagination,
            'shops' => $shops,
        );
    }

    /**
     * Créer une newsletter
     * @Route("/new", name="newsletter_new")
     * @Template("@Marketing/newsletter/new.html.twig")
     * @param Request $request
     * @return array
     */
    public function newAction(Request $request)
    {
        $newsletter = new Newsletter();

        /**
         * Ajout d'éléments prédéfinis
         */
        $menu = new NewsletterMenu();
        $menu->setTitle('Pour qui ?');
        $newsletter->getNewsletterMenu()->add($menu);

        $menu = new NewsletterMenu();
        $menu->setTitle('Nos meilleures ventes');
        $menu->setLink('https://www.cadeau-maestro.com/meilleures-ventes');
        $newsletter->getNewsletterMenu()->add($menu);

        $menu = new NewsletterMenu();
        $menu->setTitle('Trouver une idée cadeau');
        $menu->setLink('https://www.cadeau-maestro.com/idees-cadeaux');
        $newsletter->getNewsletterMenu()->add($menu);

        $block = new NewsletterBlock();
        $block->setTitle('Notre sélection du moment');
        $newsletter->getNewsletterBlock()->add($block);

        $block = new NewsletterBlock();
        $block->setTitle('Nos Promotions Du Moment');
        $block->setCssTitle('orange');
        $newsletter->getNewsletterBlock()->add($block);
        /**
         * Fin d'ajout d'éléments prédéfinis
         */

        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newsletter->setCreatedAt(new \DateTime());
            $this->get('marketingbundle.repository.newsletter')->save($newsletter);

            return $this->redirectToRoute('newsletter_index');
        }

        return array(
            'newsletter' => $newsletter,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/show", name="newsletter_show")
     * @Template("@Marketing/newsletter/show.html.twig")
     * @param Newsletter $newsletter
     * @return array
     */
    public function showAction(Newsletter $newsletter)
    {
        $deleteForm = $this->createDeleteForm($newsletter);

        return array(
            'newsletter' => $newsletter,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Modifier la newsletter
     * @Route("/{id}/edit", name="newsletter_edit")
     * @Template("@Marketing/newsletter/edit.html.twig")
     * @param Request $request
     * @param Newsletter $newsletter
     * @return array
     */
    public function editAction(Request $request, Newsletter $newsletter)
    {
        $deleteForm = $this->createDeleteForm($newsletter);
        $editForm = $this->createForm('MarketingBundle\Form\NewsletterType', $newsletter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get('marketingbundle.repository.newsletter')->save($newsletter);
            return $this->redirectToRoute('newsletter_index');
        }

        return array(
            'newsletter' => $newsletter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * @Route("/{id}/delete", name="newsletter_delete")
     * @param Request $request
     * @param Newsletter $newsletter
     * @return Route
     */
    public function deleteAction(Request $request, Newsletter $newsletter)
    {
        $form = $this->createDeleteForm($newsletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('marketingbundle.repository.newsletter')->delete($newsletter);
        }

        return $this->redirectToRoute('newsletter_index');
    }

    /**
     * Creates a form to delete a Newsletter entity.
     * @param Newsletter $newsletter The Newsletter entity
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Newsletter $newsletter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletter_delete', array('id' => $newsletter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Compilation et téléchargement de la newsletter
     * @Route("/{id}/{shop}/download", name="newsletter_download")
     * @param Newsletter $newsletter
     * @param Shop $shop
     * @return Response
     */
    public function downloadAction(Newsletter $newsletter, Shop $shop)
    {
        $newsletter->getModelNewsletter()->setShop($shop);

        /**
         * Création de l'afichage des produits
         */
        $products = '';
        if(sizeof($newsletter->getNewsletterBlock())>0){
            foreach ($newsletter->getNewsletterBlock() as $block) {
                $block->processPictureProduct($this->container);
                $products .= $this->get('twig')->render($block->getNewsletterBlockType()->getPath(), [
                    'block' => $block
                ]);
            }
        }

        /**
         * Création du menu si il existe
         */
        $menu = '';
        if(sizeof($newsletter->getNewsletterMenu())>0){
            $menu = $this->get('twig')->render('@Marketing/inky/menu.html', [
                'menus' => $newsletter->getNewsletterMenu()
            ]);
        }

        $newsletter->getNewsletterHeader()->processBanner($this->container);

        $cssFile = new SplFileInfo($newsletter->getModelNewsletter()->getPathCss(), '', '');

        /**
         * Compilsation final du template de la newsletter
         */
        $news = $this->get('twig')->render($newsletter->getModelNewsletter()->getPath(), [
            'header' => $newsletter->getNewsletterHeader(),
            'products' => $products,
            'menu' => $menu,
            'shop' => $newsletter->getModelNewsletter()->getShop(),
            'cssContent' => $cssFile->getContents()
        ]);

        $gridColumns = 12; //optional, default is 12
        $additionalComponentFactories = []; //optional
        $inky = new Inky($gridColumns, $additionalComponentFactories);
        $htmlModel = $inky->releaseTheKraken($news);

        /**
         * Permet de mettre en inline le CSS (dans les éléments directement)
         */
        $converter = $this->get('css_to_inline_email_converter');
        $converter->setHTML($htmlModel);
        $converter->setCSS($cssFile->getContents());
        $finalModel = $converter->generateStyledHTML();

        /**
         * Remplacement des variables en fonction du système d'expédition des newsletter : SendInBlue, MailChimp ...
         */
        $provider = $this->get('marketingbundle.repository.provider')->getDefault();
        $finalModel = str_replace([
            '##CSS##',
            '##PRENOM##',
            '##NAVIGATEUR##',
            '##DESINSCRIPTION##',
        ], [
            '<style>'.$cssFile->getContents().'</style>',
            $provider->getNewsletterProviderByName('##PRENOM##'),
            $provider->getNewsletterProviderByName('##NAVIGATEUR##'),
            $provider->getNewsletterProviderByName('##DESINSCRIPTION##'),
        ], $finalModel);

        $replaceVars = ['##IMG_TOP_1##', '##TXT_TOP_1##', '##IMG_TOP_2##', '##TXT_TOP_2##'];
        $originVars = ['http://www.cadeau-maestro.com/img/newsletter/fusee.png', 'LIVRAISON EN 24/48H', 'http://www.cadeau-maestro.com/img/newsletter/smile.png', 'LIVRAISON OFFERTE DÈS 40€*'];
        $sizeReplaceVars = sizeof($replaceVars);

        for($i=0;$i<$sizeReplaceVars;$i++){
            if($newVar = $newsletter->getModelNewsletter()->getShop()->getShopConfigurationByName($replaceVars[$i])){
                $finalModel = str_replace($replaceVars[$i], $newVar, $finalModel);
            }else{
                $finalModel = str_replace($replaceVars[$i], $originVars[$i], $finalModel);
            }
        }


        /**
         * Création de la réponse avec le téléchargement de la newsletter
         */
        $response = new Response();
        $response->setContent($finalModel);
        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition', 'filename="['.$newsletter->getModelNewsletter()->getShop()->getName().'] '.$newsletter->getTitle().'.html"');

        return $response;
    }
}
