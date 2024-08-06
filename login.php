<?php 

    require 'includes/config/database.php';
    $db = conectarDB();
    //Autenticar el usuario

    $errores = [];

    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = mysqli_real_escape_string( $db, filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL) );

        $password = mysqli_real_escape_string($db, $_POST['password'] ) ;

        if(!$email) {
            $errores[] = "Coloca un email valido";
        }

        if(!$password) {
            $errores[] = "Coloca un password valido";
        }

        if(empty($errores)) {

            //Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE correo = '${email}'";
            $resultado = mysqli_query($db, $query);

            if($resultado -> num_rows) {
                //Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                //Verificar si el password es correcto o no
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    //El usuario esta autenticado
                    session_start();

                    //LLenar el arreglo de sesion
                    $_SESSION['usuario'] = $usuario['correo'];
                    $_SESSION['login'] = true;
                    
                    header('location: /admin');
                    exit;

                } else {
                    $errores[] = "El password es incorrecto";
                }
            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }

    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor iniciar-sesion">
        <h1>Iniciar sesion</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php endforeach; ?>

        <form method="POST" class="form" action="">
            <label for="email">Email:</label>
            <input name="email" type="email" placeholder="Tu email" id="email" >

            <label for="password">Password</label>
            <input name="password" type="password" placeholder="Tu password" id="password" >

            <input  type="submit" value="Iniciar sesion" class="boton-verde-block">
        </form>
    </main>

<?php
    incluirTemplate('footer');
?>