<?php

/* 
 * 
 * Class qui va nous permettre de donnée la requete afin d'inserer dans la base de donnée
 * 
 */

class contact {
    
    //initialisation des atributs
    protected $id;
    protected $nom;
    protected $prenom;
    protected $email;
    protected $objet;
    protected $message;
    
    public function getId(){
        //Role: retourne l'atribut $id
        
        return $this->id;
    }
    public function getNom(){
        //Role: retourne l'atribut $nom
        
        return $this->nom;
    }
    public function getPrenom(){
        //Role: retourne l'atribut $prenom
        return $this->prenom;
    }
    public function getEmail(){
        //Role: retourne l'atribut $email
        
        return $this->email;
    }
    public function getObjet(){
        //Role: retourne l'atribut $objet
        
        return $this->objet;
    }
    public function getMessage(){
        //Role: retourne l'atribut $message
        return $this->message;
    }
    
    //SETTER
    
    public function setId($id){
        //Role: modifie l'attribut $id
        //Parametre:$id
        
        $this->id = $id;
    }
    public function setNom($nom){
        //Role: modifie l'attribut $nom
        //Parametre:$nom
        
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        //Role: modifie l'attribut $prenom
        //Parametre:$prenom
        
        $this->prenom = $prenom;
    }
    public function setEmail($email){
        //Role: modifie l'attribut $email
        //Parametre:$email
        $this->email = $email;
    }
    public function setObjet($objet){
        //Role: modifie l'attribut $objet
        //Parametre:
        $this->objet = $objet;
    }
    public function setMessage($message){
        //Role: modifie l'attribut $message
        //Parametre:$message
        $this->message = $message;
    }
    
    public function loadFromTable($tab){
        //Role: tableau contenant des valeur de l'attribut a modifier
        //Retour: true si tous se passe bien, sinon false
        //Parametre: $tab
        
        $cpt = 0;
        
        foreach(["id","nom","prenom","email","objet","message"] as $champ){
            if(isset($tab[$champ])){
                $setter = "set" .ucfirst($champ);
                if(!$this->$setter($tab[$champ])){
                    $cpt++;
                }
            }
          
        }
        if($cpt === 0) {
            return true;
        }else{
            return false;
        }
    }
    
    public function insert(){
        //Role: Insert les atribut dans la base de données
        //Retour: true si ok, false si error
        //Parametre: neant
        
        global $bdd;
        
        $sql = "INSERT INTO `contact` SET `nom` = :nom, `prenom` = :prenom, `email` = :email, `objet` = :objet, `message` = :message";
        $req = $bdd->prepare($sql);
        if($req->execute([":nom" => $this->nom,":prenom" => $this->prenom,":email" => $this->email,":objet" => $this->objet,":message" => $this->message])){
            
        };
        if(isset($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['objet'],$_POST['message']) && !empty($_POST['nom'])&& !empty($_POST['prenom'])&& !empty($_POST['email']) && !empty($_POST['objet']) && !empty($_POST['message'])){
            echo"<span class='sucess'>merci pour votre message</span>";
        }else{
            echo "<span class='error'>error</span>";
        }
    }
}