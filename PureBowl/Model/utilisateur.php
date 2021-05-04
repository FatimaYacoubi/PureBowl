<?php
    class utilisateur{
        private  $idClient = null;
        private  $nom = null;
        private  $prenom = null;
        private  $email = null;
        private  $login = null;
        private  $password = null;
        private  $adresse = null;
        private  $tel = null;
        private  $role = 'client';

    function __construct( string $nom, string $prenom, string $email, string $login, string $password, string $adresse, string $tel){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->login=$login;
        $this->password=$password;
        $this->adresse=$adresse;
        $this->tel=$tel;
         

    }

    public function getidClient()
    {
        return $this->idClient;
    }

    public function setidClient($idClient)
    {
        $this->idClient = $idClient;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getPrenom()
    {
            return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getTel()
    {
        return $this->tel;
    }

    public function setTel($tel)
    {
        $this->tel = $tel;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }


    }
