<?php

namespace TrueApex\ExpenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('ExpenseBundle:Expense');

        $expense = $repo->findOneBy(array(
            'category' => 'Food and Drinks'
        ));

        $title = 'Expenses';
        return $this->render(
            'ExpenseBundle:Default:index.html.twig',
            array(
                'title' => $title,
                'expense' => $expense
            )
        );
    }
}
