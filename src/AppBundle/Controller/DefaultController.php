<?php

namespace AppBundle\Controller;

use AppBundle\Services\UserService;
use Error;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * @Route("/usuario")
 */
class DefaultController extends Controller
{   

    
    /**
     * @Route("/login", name="usuario_login")
     */
    public function loginAction()
    {
        $authUtils = $this->get('security.authentication_utils');
        return $this->render('default/login.html.twig', array(
            'last_username' => $authUtils->getLastUsername(),
            'error' => $authUtils->getLastAuthenticationError(),
        ));
    }


    /**
     * @Route("/login_check", name="usuario_login_check")
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route("/logout", name="usuario_logout")
     */
    public function logoutAction(){

    }


    /**
     * @Route("/newUser/", name="createNewUser")
     */
    public function createNewUser(Request $request)
    {
        if(empty($_POST['email'])){
            return new Response("No se ha podido obtener el email");
        }


        if (isset($_POST) && !empty($_POST)) {
            try {
                /** @var UserService $userService */
                $userService = $this->get('UserService');
                /*$userIsAlreadyCreated = $userService->isAlreadyCreated($_POST['email']);
                if($userIsAlreadyCreated) return $this->redirectToRoute('registerAction', array(
                    'errorRegister' => 'User Already exists',
                ));*/

                $encoder = $this->get('security.encoder_factory');
                $email = $userService->createNewUser($_POST, $encoder);
                $this->get('mailer')->send($email);

                return $this->redirectToRoute('usuario_login');
            } catch (Exception $error) {
                throw new Error($error);
            }
        }

        return Response::HTTP_BAD_REQUEST;
    }


    /**
     * @Route("/updateUser/", name="updateInfo")
     */
    public function updateUser(Request $request)
    {
        if(isset($_POST) && !empty($_POST)){

            $newCredentials = array (
                "username" => $_POST['username'],
                "email" => $_POST['email'],
                "password" => $_POST['password'],
            );

            try{
                $encoder = $this->get('security.encoder_factory');
                $userService = $this->get('UserService');
                $userToUpdate = $this->get('security.token_storage')->getToken()->getUser();
                $userService->updateUserInfo($userToUpdate, $newCredentials, $encoder);
                return $this->redirectToRoute('getIndexApplication');
            }catch(Exception $error){
                throw new Error($error);
            }
        }

        return Response::HTTP_BAD_REQUEST;
    }

    /**
     * @Route("/user/delete", name="deleteUser")
     */
    public function deleteUser()
    {
        try{
            $userService = $this->get('UserService');
            $userToRemove = $this->get('security.token_storage')->getToken()->getUser();
            $userService->deleteSessionUser($userToRemove);
            $this->get('security.token_storage')->setToken();
            return new Response('Usuario Borrado Correctamente',200);
        }catch(Exception $error){
            throw new Error($error);
        }      

    }

    /**
     * @Route("/user/validateEmail", name="validateUserEmail")
     */
    public function existEmail(Request $request)
    {
        
        if(isset($_GET['data']) && !empty($_GET['data']))
        {
            $userService = $this->get('UserService');
            $userAlreadyExits =  $userService->isAlreadyCreated($_GET['data']);
            return $userAlreadyExits ? new Response('Usuario existe',200) : new Response('Usuario No existe',200);
        }

        return new Response('Se ha producido un problema',400);
    }
}
