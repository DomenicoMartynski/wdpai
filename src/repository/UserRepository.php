<?php 
require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare("
            SELECT * FROM public.users WHERE email = :email //TODO
        ");
        $stmt->blindParam(':email',$email,PDO::PARAM_STR);
        $stmt->execute();
        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user == false){
            return null; //metoda zwracajaca exception ze nie zostal znaleziony w bazie.
        }
        return new User(
            $user['email'],
            $user['password']
        );
    }
}