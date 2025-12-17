<?php 

class ctrUsuario {

    static public function ctrMostrarUsuario($item, $valor){

        $tabla = "usuarios";

        $respuesta = ModeloUsuario::mdlMostrarUsuario($tabla, $item, $valor);

        return $respuesta;
    }

    static public function ctrCrearUsuario(){

        if(isset($_POST["nuevo-Nombre"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevo-Nombre"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevo-usuario"]) &&
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevo-password"])){

                $tabla = "usuarios";

                $datos = array("nombre" => $_POST["nuevo-nombre"],
                               "usuario" => $_POST["nuevo-usuario"],
                               "password" => $_POST["nuevo-password"],
                               "rol" => $_POST["nuevo-rol"]);

                $respuesta = ModeloUsuario::mdlIngresarUsuario($tabla, $datos);

                if($respuesta == "ok"){

                    echo'<script>

                    swal.fire({
                          title: "¡OK!",
                          text: "El usuario ha sido guardado correctamente",
                          icon: "success",
                          confirmButtonText: "Cerrar"
                    }).then((result) => {
                        if (result.value) {
                            window.location = "usuarios";
                        }
                    });

                    </script>';

                }

            }else{

                echo'<script>

                swal.fire({
                      title: "¡Error!",
                      text: "¡El usuario no puede ir vacío o llevar caracteres especiales!",
                      icon: "error",
                      confirmButtonText: "Cerrar"
                });

                </script>';

            }

        }
    }

}












?>