<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$pdo = Alura\Pdo\Infrastructure\Persistence\ConnectionCreator::createConnection();

$student = new Student(
	null,
	'João',
	new DateTimeImmutable('1990-02-03')
);

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);";

$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

$statement->execute();