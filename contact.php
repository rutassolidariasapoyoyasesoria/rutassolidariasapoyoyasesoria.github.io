<!DOCTYPE HTML>
<html>
<head>
    <title>Contacto - RSAA</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <div id="main">
            <div class="inner">

                <!-- Header -->
                <header id="header">
                    <a href="index.html" class="logo"><strong>Contacto</strong></a>
                </header>

                <!-- Content -->
                <section>
                    <header class="main">
                        <h1>Contáctanos</h1>
                    </header>

                    <form method="post" action="contact.php">
                        <div class="fields">
                            <div class="field half">
                                <label for="name">Nombre</label>
                                <input type="text" name="name" id="name" required />
                            </div>
                            <div class="field half">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" name="email" id="email" required />
                            </div>
                            <div class="field">
                                <label for="message">Mensaje</label>
                                <textarea name="message" id="message" rows="6" required></textarea>
                            </div>
                        </div>
                        <ul class="actions">
                            <li><input type="submit" value="Enviar Mensaje" class="primary" /></li>
                        </ul>
                    </form>

                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $name = htmlspecialchars($_POST['name']);
                        $email = htmlspecialchars($_POST['email']);
                        $message = htmlspecialchars($_POST['message']);
                        
                        $to = "lau.ip.dev@gmail.com , direccion.rsaa@gmail.com , kenjy.alcas98@gmail.com , alexacorinad7@gmail.com";
                        $subject = "Nuevo Mensaje de Contacto RSAA";
                        $body = "Nombre: $name\nCorreo: $email\n\nMensaje:\n$message";
                        $headers = "From: $email";

                        if (mail($to, $subject, $body, $headers)) {
                            echo "<p>Gracias por contactarnos. Responderemos pronto.</p>";
                        } else {
                            echo "<p>Hubo un problema al enviar el mensaje. Inténtalo de nuevo más tarde.</p>";
                        }
                    }
                    ?>

                </section>
                
            </div>
        </div>

    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
