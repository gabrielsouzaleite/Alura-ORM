<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student($argv[1]);
$student->addPhone(new Phone('(11) 99999-8888'));
$student->addPhone(new Phone('(11) 97777-7777'));

$entityManager->persist($student);
$entityManager->flush();
