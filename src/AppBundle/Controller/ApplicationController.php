<?php 
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationController extends Controller
{

    

    /**
     * @Route("/register/", name="registerAction")
     */
    public function getRegisterView($error = '')
    {
        return $this->render('default/register.html.twig', array(
            'errorRegister' => $error
        ));
    }

    /**
     * @Route("/user/index/", name="getIndexApplication")
     */
    public function getIndexApplicationView()
    {
        return $this->render('default/indexApplication.html.twig');
    }

    /**
     * @Route("/user/update", name="updateUserInfo")
     */
    public function getUpdateView()
    {
        return $this->render('default/updateInformationUser.html.twig');
    }

}


?>