<?php
    class Usuario extends Conectar {
        /* Insertar Correo Electronico en la Base de datos */
        public function insert_correo($usu_correo) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql="insert into tm_usuario (usu_correo,rol_id,fech_crea,est) values (?,1,now(),1)";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_correo);
            $sql->execute();
        }

        public function get_correo($usu_correo) {
            $conectar = parent::conexion();
            parent::set_names();
            $sql="select * from tm_usuario where usu_correo=?";
            $sql=$conectar->prepare($sql);
            $sql->bindValue(1, $usu_correo);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>