<?php
                // if (isset($_POST["Insert"])) {
                //      {
                //         //establecer conexion con mysql
                //             $servidor = "localhost";
                //             $usuario = "root";
                //             $password = "";
                //             $bd = "taskmanager";
                //             //crear conexión
                //             $enlace = mysqli_connect($servidor, $usuario, $password, $bd);
                //             //comprobar conexión
                //             if (!$enlace) {
                //                 die("No he podido conectar con el servidor: " . mysqli_connect_error());
                //             }

                //             $sentenciaS= "SELECT count(*) from User where Email= '" . $_POST["Email"] . "'";
                //             //se ejecuta la sentencia en el sistema gestor
                //             $resultS = mysqli_query($enlace, $sentenciaS);
                //             //recogemos el valor que nos devuelve la consulta
                //             $fila= mysqli_fetch_row($resultS);
                            
                //             // Contraseña original (sin encriptar)
                //             $password = $_POST["Password"];

                //             // Crear el hash de la contraseña usando bcrypt
                //             $hash_password = password_hash($password, PASSWORD_BCRYPT);


                //             if ($fila[0] == 1) {
                //                 echo "El registro está duplicado";
                //             } else {
                //                 //se crea la sentencia del registro a eliminar
                //                 $sentencia = "INSERT INTO User (Name, Email, Password, Phone_number)
                //                     VALUES ('" . $_POST["Name"] . "', '" . $_POST["Email"] . "', '" . $hash_password . "', '" . $_POST["Phone_number"] . "')";
                //                 //se ejecuta la sentencia en el sistema gestor
                //                 $result = mysqli_query($enlace, $sentencia);
                //                 if (!$result) {
                //                     echo "No se ha podido añadir el usuario";
                //                 } else {
                //                     echo "El usuario se ha añadido correctamente";
                //                 }

                //                 //cerrar conexión
                //                 mysqli_close($enlace);
                //                 header("Location: login.php");
                //                 exit();
                //             }
                //         }
                //     }
?>     