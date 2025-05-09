<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ToDoListController extends AbstractController
{
    /**
     * @Route("/", name="to_do_list")
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * @Route("/create", name="create_task", methods={"POST"})
     */
    public function createTask(): Response
    {
        exit('TODO: Create a new task!');
    }

    /**
     * @Route("/change-status/{id}", name="change_status")
     */
    public function changeTaskStatus(int $id): Response
    {
        exit(sprintf('TODO: Change status of task with ID: %d!', $id));
    }

    /**
     * @Route("/delete/{id}", name="delete_task")
     */
    public function deleteTask(int $id): Response
    {
        exit(sprintf('TODO: Delete task with ID: %d!', $id));
    }
}
