<?php

namespace App\Controller;

use App\Entity\Foo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Attribute\AsController;

#[AsController]
class FooController extends AbstractController
{

    public function __invoke(string $id)
    {
        return new Foo();
    }

}