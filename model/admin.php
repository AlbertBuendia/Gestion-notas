<?php 
    class Administrador {
        private $id_administrador;
        private $passwd_administrador;
        private $email_administrador;

        public function __construct($email_administrador,$passwd_administrador){
            $this->email_administrador=$email_administrador;
            $this->passwd_administrador=$passwd_administrador;
        }
        
     function getIdAdministrador()
    {
        return $this->id_administrador;
    }

    /**
     * @param mixed $id_administrador
     *
     * @return self
     */
    public function setIdAdministrador($id_administrador)
    {
        $this->id_administrador = $id_administrador;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPasswdAdministrador()
    {
        return $this->passwd_administrador;
    }

    /**
     * @param mixed $passwd_administrador
     *
     * @return self
     */
    public function setPasswdAdministrador($passwd_administrador)
    {
        $this->passwd_administrador = $passwd_administrador;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailAdministrador()
    {
        return $this->email_administrador;
    }

    /**
     * @param mixed $email_administrador
     *
     * @return self
     */
    public function setEmailAdministrador($email_administrador)
    {
        $this->email_administrador = $email_administrador;

        return $this;
    }
}