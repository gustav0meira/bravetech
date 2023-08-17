<?php
require "../../app/conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uploadDirectory = "../../assets/pp/";
    $fileName = basename($_FILES["profile_pp"]["name"]);
    $targetPath = $uploadDirectory . $fileName;

    if (move_uploaded_file($_FILES["profile_pp"]["tmp_name"], $targetPath)) {
        $studentId = $_POST["student_id"];
        
        $sql = "UPDATE alunos SET profile_pp = '$fileName' WHERE id = $studentId";

        if ($conn->query($sql) === TRUE) {
            header("Location: ./edit.php?student=" . $studentId);
            exit();
        } else {
            echo "Erro ao atualizar o banco de dados: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Ocorreu um erro ao fazer o upload do arquivo.";
    }
}
?>