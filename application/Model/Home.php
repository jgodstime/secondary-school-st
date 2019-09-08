<?php



namespace Mini\Model;

use Mini\Core\Model;
use PDO;


class Home extends Model
{

     
public function adminLogIn($email,$password){
    if(!empty($email) or !empty($password)){
        $query = $this->db->prepare("SELECT * FROM admin_tbl WHERE email=? LIMIT 1");
        $query -> execute(array($email));
        if ($query->rowCount()>0){
            $result = $query->fetch(PDO::FETCH_ASSOC); 
             $email= $result["email"];
             $adminId = $result["id"];
             $adminId = $result["id"];
             $passwordDb = $result["password"];
             

        
        $verify = password_verify($password,$passwordDb);
       
            if ($verify){
            
            $_SESSION["adminId"] = $adminId;

                header('location:'.URL.'register/staff');       
           
            }else{
                return $this->msg->error('Invalid username and password combination.', URL);
            }
      
        
        
    }else{
        return $this->msg->error('Invalid username and password combination.', URL);

    }
        
    }else{
        return $this->msg->error('Invalid username and password combination.', URL);
        
    }
    

}

    
}