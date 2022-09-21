<?php

use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Caba Telefonado');
$student->addPhone(new Phone('(11) 94321-1234'));
$student->addPhone(new Phone('(11) 91234-1234'));

$entityManager->persist($student);
$entityManager->flush();
