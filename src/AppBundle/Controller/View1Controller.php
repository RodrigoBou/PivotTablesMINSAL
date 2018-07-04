<?php

// src/AppBundle/Controller/View1.php

namespace AppBundle\Controller;

use AppBundle\Entity\View1;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class View1Controller extends Controller
{
    /**
     *@Route("/View1", name="View1")
     */
    public function listAction()
    {
        $conn = $this->getDoctrine()->getManager()->getConnection();
        $sql = 'SELECT * FROM view1';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $posts = $stmt->fetchAll();

        return $this->render(':Pivot:view1.html.twig', [
            'posts' => $posts
        ]);
    }
}