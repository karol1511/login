<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $NombreCompleto = $_POST['NombreCompleto'];
    $Email = $_POST['Email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $repetircontra = password_hash($_POST['repetircontra'], PASSWORD_BCRYPT);



    $sql = "INSERT INTO usuarios (username, password, NombreCompleto, Email,repetircontra) VALUES ('$username', '$password','$NombreCompleto','$Email','$repetircontra')";

    if ($conn->query($sql) === TRUE) {
        // Registro exitoso, redirigir a login.php con mensaje de éxito
        echo "<script>
                alert('Registro exitoso. Ya puedes iniciar sesión.');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
