<?php
 ini_set('display_errors', 1);


function debug($variable)
{

    echo '<pre>';
    print_r($variable); 
    echo '</pre>';
}


function str_random($length)
{
    $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
    $random_string = substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    return $random_string;
}

function logged_only()
{
    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['danger'] ="Vous n'avez pas le droit d'acceder à cette page";
        header('Location: login.php');
        exit();
    }
}

function reconnect_cookies()
{

    if(session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_COOKIE['remember']) && !isset($_SESSION['auth'])) {
        require_once 'db.php';
        if(!isset($pdo)) {
            global $pdo;
        }
        $remember_token = $_COOKIE['remember'];
        $parts = explode('==', $remember_token);
        $user_id = $parts[0];
        $req = $pdo->prepare('SELECT * FROM utilisateurconnecte WHERE idUser = ?');
        $req->execute([$user_id]);
        $user = $req->fetch();
        if($user) {
            $expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonlaveurs');
            if($expected == $remember_token) {
                session_start();
                $_SESSION['auth'] = $user;
                setcookie('remember', $remember_token, time() + 60 * 60 * 24 * 7);
            } else {
                setcookie('remember', null, -1);
            }
        } else {
            setcookie('remember', null, -1);
        }
    }
}

