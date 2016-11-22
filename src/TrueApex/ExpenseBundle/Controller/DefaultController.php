<?php

namespace TrueApex\ExpenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExpenseBundle:Default:index.html.twig');
    }
}
