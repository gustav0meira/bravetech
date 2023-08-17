<?php 

	require "../../app/conn.php";

	$student_id = $_GET['student_id'];

    $sql = "UPDATE alunos SET status = 0 WHERE id = $student_id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>window.location.href='./'</script>";
    } else { echo "<script>alert('Erro! Contacte o admin!');</script>"; }

?>