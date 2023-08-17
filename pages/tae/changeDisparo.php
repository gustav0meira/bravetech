<?php 

	require "../../app/conn.php";

    $student_id = $_POST['student_id'];
    $student_check = $_POST['student_check'];

    if ($student_check == 1) { $student_check = 0; } else { $student_check = 1; }

    $sql = "UPDATE alunos SET disparo = $student_check WHERE id = $student_id";

    if ($conn->query($sql) === TRUE) {
    	// echo $student_id;
        echo "<script>window.location.href='./'</script>";
    } else { echo "<script>alert('Erro! Contacte o admin!'); window.location.href='./'</script>"; }

?>