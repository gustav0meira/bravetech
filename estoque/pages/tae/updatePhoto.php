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
        $uploadError = $_FILES["profile_pp"]["error"];
        $uploadErrors = array(
            UPLOAD_ERR_OK => "Sem erro.",
            UPLOAD_ERR_INI_SIZE => "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
            UPLOAD_ERR_FORM_SIZE => "O arquivo enviado excede o limite definido no formulário HTML.",
            UPLOAD_ERR_PARTIAL => "O upload do arquivo foi feito parcialmente.",
            UPLOAD_ERR_NO_FILE => "Nenhum arquivo foi enviado.",
            UPLOAD_ERR_NO_TMP_DIR => "Falta uma pasta temporária.",
            UPLOAD_ERR_CANT_WRITE => "Falha ao escrever o arquivo em disco.",
            UPLOAD_ERR_EXTENSION => "Uma extensão PHP interrompeu o upload do arquivo."
        );

        $errorMessage = isset($uploadErrors[$uploadError]) ? $uploadErrors[$uploadError] : "Erro desconhecido no upload do arquivo.";

        echo "Ocorreu um erro ao fazer o upload do arquivo: $errorMessage";
    }
}
?>