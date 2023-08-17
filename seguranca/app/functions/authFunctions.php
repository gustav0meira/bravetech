<?php 

	function ifSession() {
		if (session_status() === PHP_SESSION_NONE) { session_start(); }
	}

	function isLoged($id) {
		if (!isset($id)) {
			echo '<script>alert("Acesso Negado! Faça login e tente novamente!"); window.location.href="../login";</script>';
		}
	}

?>