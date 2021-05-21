<?php
require_once "../config.php";
    require_once '../Model/utilisateur.php';


class utilisateurC
{
    function ajouterutilisateur($Utilisateur){
        $sql="INSERT INTO Compte (nom,prenom,email,login,password,adresse,tel,role) 
            VALUES (:nom,:prenom,:email,:login,:password,:adresse,:tel,:role)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $Utilisateur->getNom(),
                'prenom' => $Utilisateur->getPrenom(),
                'email' => $Utilisateur->getEmail(),
                'login' => $Utilisateur->getLogin(),
                'password' => $Utilisateur->getPassword(),
                'adresse' => $Utilisateur->getAdresse(),
                'tel' => $Utilisateur->getTel(),
                'role'=>$Utilisateur->getrole()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    public function afficherCompteDetail(int $rech1)
    {
        $sql="select * from Compte where idClient=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    

    function afficherutilisateur()
    {
        $sql = "SELECT * FROM Compte";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficherutilisateur1()
    {
        $sql = "SELECT * FROM Compte limit 1";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function afficherprofil($email)
    {
        $sql = "SELECT FROM Compte where email=:email";
         $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':email',$email);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }


    function supprimerutilisateur($idClient){
        $sql="DELETE FROM Compte WHERE idClient= :idClient";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':idClient',$idClient);
        try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierutilisateur($utilisateur,$idClient){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE Compte SET                      nom = :nom,
                    prenom = :prenom,
                    email = :email,
                    login = :login,
                    password = :password,
                    adresse = :adresse,
                    tel = :tel
                        
                    WHERE idClient = :idClient'
            );
            $query->execute([
                'nom' => $utilisateur->getNom(),
                'prenom' => $utilisateur->getPrenom(),
                'email' => $utilisateur->getEmail(),
                'login' => $utilisateur->getLogin(),
            'password' => $utilisateur->getPassword(),
                'adresse' => $utilisateur->getAdresse(),
                'tel' => $utilisateur->getTel(),
                'idClient' => $idClient

            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            echo "Echeeeec";
            $e->getMessage();
        }
    }

    function recupererutilisateur($idClient)
    {
        $sql="SELECT * from Compte where idClient=:idClient";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'idClient'=> $idClient
                ]
            );

            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function recupererrole($idClient)
    {
        $sql = "SELECT * from Compte where email= :idClient";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'idClient' => $idClient
            ]);

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function connexionUser($email,$password)
    {
        $sql = "SELECT * FROM Compte WHERE Email='" . $email . "' and Password = '" . $password . "'";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $count = $query->rowCount();
            if ($count == 0) {
                $message = "pseudo ou le mot de passe est incorrect";
            } else {
                $x = $query->fetch();
                $message = $x['role'];
            }
        } catch (Exception $e) {
            $message = " " . $e->getMessage();
        }
        return $message;
    }
    function recuperercompte($email)
    {
       $sql="SELECT * from Compte where email=:email";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'email'=> $email
                ]
            );

            $user = $query->fetch(PDO::FETCH_OBJ);
            return $user;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}