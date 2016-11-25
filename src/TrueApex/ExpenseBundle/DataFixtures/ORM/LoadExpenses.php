<?php

// src/AppBundle/DataFixtures/ORM/LoadUserData.php

namespace TrueApex\ExpenseBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TrueApex\ExpenseBundle\Entity\Expense;

class LoadExpense implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $expense1 = new Expense();
        $expense1->setCategory('Food and Drinks');
        $expense1->setDate(new \DateTime('tomorrow noon'));
        $expense1->setAmount(11000);
        $expense1->setNote('Lunch');
        $expense1->setCreated(new \DateTime('today'));
        $manager->persist($expense1);

        $expense2 = new Expense();
        $expense2->setCategory('Food and Drinks');
        $expense2->setDate(new \DateTime('tomorrow noon'));
        $expense2->setAmount(11000);
        $expense2->setNote('Dinner');
        $expense2->setCreated(new \DateTime('today'));
        $manager->persist($expense2);

        $manager->flush();
    }
}
