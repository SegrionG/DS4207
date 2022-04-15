<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/index", name="index")
     */
    public function index(): Response
    {  

        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',]);  
        
    }

     /**
     * @Route("/nouvlogin", name="nouvlogin")
     */
    public function nouvlogin(Request $request, EntityManagerInterface $manager, SessionInterface $session): Response
    {
        return $this->render('security/nouvlogin.html.twig', [
            'controller_name' => 'SecurityController',]);  
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, EntityManagerInterface $manager, SessionInterface $session): Response
    {
        $cusername = $request -> request -> get("Cusername") ;
        $cpassword = $request -> request -> get("Cpassword") ;
        if (strcmp ($cpassword,'')==0)
            $nusername=NULL;
        elseif (strcmp ($cusername,'')==0)
            $nusername=NULL;
        else {
            $nusername = new User();
            $nusername->setNom($cusername);
            $nusername->setPassword($cpassword);
            $manager->persist($nusername);
            $manager->flush();
        }

        if($nusername==NULL){
            $message = "Le compte n'a pas été créé, ERROR !";
        }
        else{
            $message="Le compte a bien été crée.";
        }

        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController','login' => $cusername, 'mdp' => $cpassword, 'message' => $message,'profidd']);
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(Request $request, EntityManagerInterface $manager, SessionInterface $session): Response
    {
            $session -> set('numero', -1);
            $session -> set('user', -1);
            $session -> set('mdp', -1);
            $session -> clear();

        return $this->RedirectToRoute('login');
        
    }
    /**
     * @Route("/clogin", name="clogin")
     */
    public function clogin(Request $request, EntityManagerInterface $manager, SessionInterface $session): Response
    {
        $username = $request -> request -> get("username") ;
        $password = $request -> request -> get("password") ;
        $usernameV = $manager -> getRepository(User::class) -> findOneBy([ "Nom" => $username]);
        $passwordV = $manager -> getRepository(User::class) -> findOneBy([ "Password" => $password]);

        if ($usernameV==NULL){
            $msg = "Utilisateur inconnu";
            $profidd = "-1";
            $vuser= "-1";
            $vmdp= "-1";
        }
        elseif ($UsernameV = $username && $passwordV = $password){
            $msg = 'Le mdp et le user sont correctes';
            $profid = $usernameV->getId();
            $session -> set('numero', $profid);
            $session -> set('user', $username);
            $session -> set('mdp', $password);
            $profidd = $session -> get('numero');
            $vuser = $session -> get('user');
            $vmdp = $session -> get('mdp');
        }
        else {
            $msg = 'Le mdp  n\'est pas correct';
            $profidd = "-1";
            $vuser= "-1";
            $vmdp= "-1";
        }

        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController', 'vuser' => $vuser, 'vmdp' => $vmdp, 'vs' => $profidd,'profidd' => $profidd,'login' => $username,'message' => $msg, 'loginV' => $usernameV, 'mdp' => $password]);  
        
    }

}
