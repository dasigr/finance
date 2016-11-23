<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require __DIR__.'/app/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request', $request);


$em = $container->get('doctrine')->getManager();
$repo = $em->getRepository('ExpenseBundle:Expense');

$expense = $repo->findOneBy(array(
    'category' => 'Food and Drinks'
));

$templating = $container->get('templating');

echo $templating->render(
    'ExpenseBundle:Default:index.html.twig',
    array(
        'title' => 'Expenses',
        'expense' => $expense
    )
);

// use TrueApex\ExpenseBundle\Entity\Expense;

// $expense = new Expense;
// $expense->setCategory('Food and Drinks');
// $expense->setDate(new \DateTime('today'));
// $expense->setAmount(12000);
// $expense->setNote('A new expense!');
// $expense->setCreated(new \DateTime('today'));

// $em = $container->get('doctrine')->getManager();
// $em->persist($expense);
// $em->flush();
