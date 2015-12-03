<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{count}")
     */

    public function numberAction($count)
    {
        $numbers = array();
        for ($i=0; $i< $count; $i++) {
            $numbers[] = rand(0,100);
        }
        $numberList = implode(', ', $numbers);

        return $this->render(
            'lucky/number.html.twig',
            array('luckyNumberList' => $numberList)
        );

    }
}
