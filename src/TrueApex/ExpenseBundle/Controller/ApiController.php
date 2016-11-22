<?php

namespace TrueApex\ExpenseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function indexAction()
    {
        $response_data = array(
            'data' => array(
                array(
                    'category' => 'Food & Drinks',
                    'date' => 'Nov 23, 2016',
                    'amount' => 12000,
                    'notes' => 'Breakfast',
                ),
                array(
                    'category' => 'Food & Drinks',
                    'date' => 'Nov 23, 2016',
                    'amount' => 10000,
                    'notes' => 'Lunch',
                ),
                array(
                    'category' => 'Food & Drinks',
                    'date' => 'Nov 23, 2016',
                    'amount' => 11000,
                    'notes' => 'Dinner',
                ),
            ),
            'error' => false,
        );
        $json = json_encode($response_data);

        $response = new Response($json);
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}
