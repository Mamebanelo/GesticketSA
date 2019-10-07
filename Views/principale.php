<html>
    <head>
        <meta charset="utf-8">
    </head>

    <?php
if (extension_loaded ('PDO')) {
echo 'PDO OK'; 
} else {
echo 'PDO KO'; 
}
?>
    <body style='background:#fff;'>
        <div id="content">
            <!-- tester si l'utilisateur est connecté -->
            <?php
                session_start();
                if($_SESSION['uname'] !== ""){
                    $Login = $_SESSION['uname'];
                    // afficher un message
                    echo "Bonjour $user, vous êtes connecté";
                }
            ?>
            
        </div>
    </body>
</html>
