<?php
session_start();
session_unset();
session_destroy();
$la ='CN';

if(isset($_GET['lan'])){
    $la=$_GET['lan'];
}

session_start();
$_SESSION['lan'] = $la;

echo "
<script>
window.location.href='../../index.php';
</script>
";