<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "newsletter_db";

// Se genera la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Después se verifica
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Aquí se captura el email
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $conn->real_escape_string($_POST["email"]);

    // Aquí se revisa que no esté vacío
    if (!empty($email)) {
        $sql = "INSERT INTO suscribers (email) VALUES ('$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Suscripción exitosa.";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "El campo de correo no puede estar vacío.";
    }
}

// Se finaliza la conexión
$conn->close();
?>
