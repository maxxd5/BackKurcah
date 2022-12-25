<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}

?>


<?php require('Auto_salon.php')?>



</body>
</html>