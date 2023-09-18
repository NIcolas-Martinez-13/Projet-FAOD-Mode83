

<?php
require_once '../php/requireDoc.php';


if (!empty($_POST) && !empty($_POST['Username']) && !empty($_POST['password'])) {




    $req = $pdo->prepare('SELECT * FROM utilisateurconnecte WHERE Username = :Username OR email = :Username AND confirmed_at IS NOT NULL ');
    $req->execute(['Username' => $_POST['Username']]);
    $user = $req->fetch();

    if(password_verify($_POST['password'], $user->password)) {
        session_start();
        $_SESSION['auth'] = $user;
        $_SESSION['flash']['success'] = 'Vous etes mantenant connecté';
        if($_POST['remember']) {
            $remember_token = str_random(250);
            $pdo->prepare('UPDATE utilisateurconnecte SET remember_token = ? WHERE idUser = ?')
                ->execute([$remember_token, $user->idUser]);
            setcookie('remember', $user->id.'=='.$remember_token. sha1($user->id.'ratonlaveurs'), time() + 60*60*24*7);
        }



        header('Location: account.php');
        exit();
    } else {
        $_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrect';
    }
}
?> 
<?php
require('../php/head.php'); ?> 


<div class="flex justify-center items-center h-screen">
  <div class="w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md  ">
    <div class="px-6 py-4">
        <div class="flex justify-center mx-auto">
            <img class="w-auto h-20 sm:h-2O" src="../images/logo-mode83.webp" alt="">
        </div>

        <h3 class="mt-3 text-xl font-medium text-center text-gray-600 ">Bonjour</h3>

        <p class="mt-1 text-center text-gray-500 ">Connexion</p>

        <form method="post">
            <div class="w-full mt-4">
                <input name="Username"class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" placeholder="Pseudo ou Email" aria-label="Adresse Mail" />
            </div>

            <div class="w-full mt-4">
                <input name="password"class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-lg  focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="password" placeholder="Mot de passe" aria-label="Mot de passe" />
            </div>

            <div class="w-full mt-4">
<label >
    <input type="checkbox" name="remember" id="" value="1"> Se souvenir de moi
</label>
            </div>
            <div class="flex items-center justify-between mt-4">
                <a href="forget.php" class="text-sm text-gray-600  hover:text-gray-500">Mot de passe oublié ?</a>

                <button class="px-6 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-500 rounded-lg hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    Connexion
                </button>
            </div>
        </form>
    </div>

    <div class="flex items-center justify-center py-4 text-center bg-gray-50 ">
        <span class="text-sm text-gray-600 ">Vous n'avez pas de compte ? </span>

        <a href="../index.php" class="mx-2 text-sm font-bold text-blue-500  hover:underline">Inscription</a>
    </div>
</div>

</div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>

