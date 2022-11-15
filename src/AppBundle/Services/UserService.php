<?php 
namespace AppBundle\Services;

use AppBundle\Entity\User;
use Swift_Message;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Symfony\Component\Security\Core\Encoder\EncoderFactoryInterface;

class UserService
{
    protected $entity_manager;

    public function __construct($entity_manager)
    {
        $this->entity_manager = $entity_manager;
        
    }

    public function codeUserPassword(User $user, string $password, EncoderFactory $encoder){
        $userEncoded = $encoder->getEncoder($user); 
        $encodedPassword = $userEncoded->encodePassword($password, null); //POrque se usa bycrypt
        return $encodedPassword;
    }

    /**
     * Esta función se
     *
     * @param array $newUserInfo
     * @param \Symfony\Component\Security\Core\Encoder\EncoderFactory $encoder
     *
     * @return void
     * @author Alberto Cruz <alberto.cruz@eurotransportcar.com>
     */
    public function createNewUser(array $newUserInfo, EncoderFactory $encoder)
    {

        if(!empty($newUserInfo)){

            $user = new User();
            $user->setUsername($newUserInfo['username']);
            $user->setEmail($newUserInfo['email']); 
            $user->setPassword($this->codeUserPassword($user, $newUserInfo['password'], $encoder));
            $user->setRoles('ROLE_USER');
            

            $this->entity_manager->persist($user);
            $this->entity_manager->flush();

            $subject = 'New Account';
            $body = 'You have been signed up in the application succesfully!';
            
            $email = (new Swift_Message($subject))
                        ->setFrom('carlos.revuelto@kosaas.com')
                        ->setTo($newUserInfo['email'])
                        ->setBody($body);

            return $email;
        }

        return Response::HTTP_BAD_REQUEST;
    }


   public function updateUserInfo(User $userToUpdate,array $newCredentials, EncoderFactory $encoder)
   {
        if(!empty($newCredentials)){

            $userToUpdate->setUsername($newCredentials['username']);
            $userToUpdate->setEmail($newCredentials['email']);
            $newCredentials['password'] != '' ? $userToUpdate->setPassword($this->codeUserPassword($userToUpdate, $newCredentials['password'], $encoder)) : '';
            $this->entity_manager->persist($userToUpdate);
            $this->entity_manager->flush();
        }

        return Response::HTTP_BAD_REQUEST;
   }


   public function isAlreadyCreated(string $email) : bool
   {
    
    if(empty($email)){
        return false;
    }

    $userIsLogged = $this->entity_manager->getRepository('AppBundle:User')->findOneByEmail($email);
    return $userIsLogged != null ? true : false;

   }

   public function deleteSessionUser(User $userToRemove)
   {
        $this->entity_manager->remove($userToRemove);
        $this->entity_manager->flush();
   }
}

?>