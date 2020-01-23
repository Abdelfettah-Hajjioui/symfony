<?php
 namespace App\Controller;

use App\Repository\EtudiantsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
 use Symfony\Component\Routing\Annotation\Route;
 use Twig\Environment;

    class HomeController extends AbstractController{ 
        public $i=0;
        /**
         * @Route("/",methods={"GET"})
         */
        public function index()
        {
            return $this->render('welcome.html.twig');
        
        }
    /**
     * @Route("/login", name="app",methods={"GET"})
     */
    public function index1()
    {
        return $this->render('welcome.html.twig');
    }
    /**
     * @Route("/loginn", name="appqq",methods={"GET"})
     */
    public function index21()
    {
        return $this->render('Pages/home.html.twig');
    }


    /**
     * @Route("/login", name="home", methods={"POST"})
     */
    public function control_login(Request $request)
    {   
        $username=$request->get('login');
        $password=$request->get('pass');
        if($username=="ensah" && $password=="ensah")
            {   $i=1;
                return $this->render('Pages/home.html.twig');
            }
            return $this->render('error.html.twig');
        
    }

     /**
     * @Route("/logout", name="appa")
     */
    public function indexlog()
    {   
        $i=0; 
        return $this->render('welcome.html.twig');
    }
    }
 

//    , [
//         'Etudiants' =>$etudiants
//         ]

// $etudiants = $repository->findAll();

// * @param EtudiantsRepository $repository