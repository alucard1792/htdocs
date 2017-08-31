<?php if (isset($_GET['error'])==1) { ?>
	<script>
		document.addEventListener('DOMContentLoaded', mostrarDialogos("<?php echo $_SESSION['dialogTitle']; ?>", "<?php echo $_SESSION['dialogContent']; ?>"));
	</script>
	<?php
	}
	if (isset($_SESSION['dialogTitle']) && isset($_SESSION['dialogContent'])) {
		session_unset($_SESSION['dialogTitle']);
		session_unset($_SESSION['dialogContent']);
	}
	?>