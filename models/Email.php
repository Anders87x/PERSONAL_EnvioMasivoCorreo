<?php
require('class.phpmailer.php');
include("class.smtp.php");

class Email extends PHPMailer{
    protected $gCorreo="";//Correo Electronico 
    protected $gContrasena="";//Contraseña del la cuenta de correo

   


    public function email_bienvenida($usu_correo){
        $this->IsSMTP();
        $this->Host = 'smtp.office365.com';
        $this->Port = 587;
        $this->SMTPAuth = true;
        $this->Username = $this->gCorreo;
        $this->Password = $this->gContrasena;
        $this->From = $this->gCorreo;
        $this->FromName = "Bienvenido";
        $this->CharSet = 'UTF8';
        $this->addAddress($usu_correo);
        $this->WordWrap = 50;
        $this->IsHTML(true);
        $this->Subject = "Bienvenido";
        $cuerpo = file_get_contents('../public/Template_Bienvenida.html');
        $this->Body = $cuerpo;
        $this->AltBody = strip_tags("Descuentos");
        return $this->Send();
    }
}
?>