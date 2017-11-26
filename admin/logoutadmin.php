<?php
session_start();

unset($_SESSION['username']);

?>
<script>document.location.href="../index.php"
</script>
<?
include "../index.php";
?>