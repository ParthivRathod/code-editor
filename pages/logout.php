<?php
session_start();
session_unset();
session_destroy();
?>
<!-- HTML fallback if header fails -->
<!-- <p>Logging you out...</p> -->
<script>
    // JavaScript redirect (equivalent to header("Location: ../index.php");)
    window.location.href = "../index.php";
</script>