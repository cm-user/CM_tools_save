<?php

namespace PictureCrawlerBundle\Controller;


use PictureCrawlerBundle\Crawler\CrawlerAvantGardiste;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AvantGardisteController extends Controller
{
    public static function indexAction($url){
        $crawlerAvantGardiste = CrawlerAvantGardiste::init($url);
        
        return new JsonResponse(array('data' => $crawlerAvantGardiste));
    }
}