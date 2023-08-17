<?php

require "../conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        session_start();
        
        $row = $result->fetch_assoc();

        $_SESSION['usuario_logado'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['sobrenome'] = $row['sobrenome'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['senha'] = $row['senha'];

        if ($row['tipo'] == 'tae') {
            echo '<script>window.location.href="../../pages/tae"</script>';
        } elseif ($row['tipo'] == 'aee') {
            echo '<script>window.location.href="../../pages/aee"</script>';
        } elseif ($row['tipo'] == 'educador') {
            echo '<script>window.location.href="../../pages/educador"</script>';
        } else {
            echo '<script>window.location.href="../../pages/admin"</script>';
        }

    } else {;
        echo '<script>window.location.href="../../login/?msg=E-mail ou senha incorretos! Verifique e tente novamente."</script>';
    }
}

$conn->close();

?>