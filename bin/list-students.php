<?php

use Alura\Doctrine\Entity\Course;
use Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();
$studentRepository = $entityManager->getRepository(Student::class);

/**
 * @var Student[] $studentList
 */
$studentList = $studentRepository->findAll();

foreach ($studentList as $student) {
    echo "ID: $student->id\nNome: $student->name\n";
    echo "Telefones: ";
    echo implode(', ', $student->phones()
        ->map(fn (Phone $phone) => $phone->number)
        ->toArray());
    echo PHP_EOL;
    echo "Cursos: ";
    echo implode(', ', $student->courses()
        ->map(fn (Course $course) => $course->name)
        ->toArray());

    echo PHP_EOL . PHP_EOL;
}

echo $studentRepository->count([]);
