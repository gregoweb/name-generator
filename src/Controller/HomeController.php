<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $phoneme= ['zu','zo','dor','bi','ko','zan','mi','mo','mor','do','ri','po','pi','ka','chu','ar','di','ta','nia'];
        $phonemeMax = count($phoneme)-1;
        $nbPhoneme = rand (2, 4);
        $aleatName = '';
        while ($nbPhoneme > 0) {
            $nbPhoneme --;
            $aleatName .= $phoneme[random_int (0, $phonemeMax)];
        }
        $aleatName=ucfirst($aleatName);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'aleat_name' => $aleatName,
        ]);
    }
}
