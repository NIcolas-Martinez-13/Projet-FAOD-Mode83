
<?php
require_once 'inc/functions.php';
require_once 'inc/db.php';
session_start();

if (!empty($_POST)) {
    $errors = array();

    if (empty($_POST['Username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['Username'])) {
        $errors['Username'] = "Vous pseudo n'est pas valide (alphanuméric)";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE Username= ?');
        $req -> execute([$_POST['Username']]);
        $user = $req->fetch();
        if($user) {
            $errors['Username'] ='Ce pseudo est déja pris';
        }
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Votre email n'est pas valide";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE email= ?');
        $req -> execute([$_POST['email']]);
        $user = $req->fetch();
        if($user) {
            $errors['email'] ='Cet email est déja pris';
        }
    }

    if(empty($_POST['password']) || $_POST['password']!= $_POST['confirm_password']) {
        $errors['password'] = "Vous devez rentrer un mot de passe valide";
    }

    if(empty($errors)) {

        $req = $pdo->prepare("INSERT INTO UtilisateurConnecte SET username = ? , password  = ? , email= ?, confirmation_token= ? ");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);

        $req->execute([$_POST['Username'], $password , $_POST['email'], $token]);
        $user_id = $pdo ->lastInsertId();
        mail($_POST['email'], "Confirmation de votre compte", "afin de valider votre compte, merci de cliquer sur ce lien \n \n http://localhost:8888/confirm.php?id=$user_id&token=$token");
        $_SESSION['flash']['success']= 'Un email de confirmation vous a été envoyé pour valider votre compte ';
        $_SESSION['auth'] = $user;
        header('location: inc/login.php');
        exit();
    }

}


require_once './php/head.php';
?>
   </head>
  <?php if(!empty($errors)): ?>
    <div class="alert" style="background-color:#eb7366">
      <p>
        Vous n'avez pas rempli le formulaire correctement
      </p>
      <ul>
        <?php foreach($errors as $error): ?>
          <li><?= $error; ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      <?php endif; ?>

  <body>
    <div class="flex justify-center items-center flex-col mb-6">
      <h1 class="font-bold text-7xl small-h1">Inscription</h1>
        <div class="md:w-1/2 text-center text-lg">
      <p>
        Vous souhaitez vous inscrire à une formation à Mode83 ?
        Voici le formulaire que vous devez remplir.

        Si vous voulez avoir accès uniquement à notre newsletters cliquez 
        <a href="../inc/newsletters.php" class="no-underline  border-blue text-red-500">Ici</a>
      </p>
        </div>
    </div>
    <div class="flex flex-row space-x-10 justify-center">
      <!-- formulaire inscription -->
          <!-- debut form  -->
          <div class="flex flex-col bg-white border border-gray-300 p-6 rounded-lg shadow-md">
            <form action="" method="POST" class="w-full">
              <div class="flex flex-wrap -mx-3 ">
                <!-- prenom -->

                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-first-name"
                  >
                    Prenom
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name"
                    type="text"
                    placeholder="Jane"
                    name = "Username"

                  />
                </div>

                <!-- nom -->
                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-last-name"
                  >
                    Nom
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-last-name"
                    type="text"
                    placeholder="Doe"
                    name="nom"
                  />
                </div>
              </div>

              <!-- email -->

              <div class="mb-6">
                <label
                  for="email"
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  >Email address</label
                >

                <input
                  type="email"
                  id="email"
                  class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="john.doe@company.com"
                  name="email"

                />
              </div>

              <!-- mdp -->

              <div class="flex flex-wrap -mx-3 mb-">
                <div class="w-full px-3">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-password"
                  >
                    Mot de passe
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-password"
                    type="password"
                    placeholder="******"
                    name="password"

                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-">
                <div class="w-full px-3">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-password"
                  >
                    Confirmez votre Mot de passe
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-password"
                    type="password"
                    placeholder="******"
                    name="confirm_password"

                  />
                </div>
              </div>

              <!-- genre et date de naissance -->

              <div class="flex flex-wrap -mx-3 mb-2">
                <!-- genre -->

                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <label
                    for="genre"
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-white"
                    >Selectionner un genre</label
                  >

                  <select
                    
                    class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="genre"
                  >
                    <option selected>Choisir un genre</option>

                    <option value="1">Femme</option>

                    <option value="2">Homme</option>

                    <option value="3">Non binaire</option>
                  </select>
                </div>

                <!--  date de naissance  -->

                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <label
                    for="date_naissance"
                    class="block mb-2 text-sm font-medium text-gray-700"
                    >Date de Naissance</label
                  >

                  <input
                    type="date"
                    id="date_naissance"
                    name="date_naissance"
                    class="border bg-gray-200 border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  />
                </div>
              </div>
               <!-- 3 champs -->

               <div class="flex flex-wrap -mx-3 mb-2">
                <!-- ville  -->

                <div class="small md:w-1/3 px-3 mb-6 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-city"
                  >
                    Ville
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-city"
                    type="text"
                    placeholder="Marseille"
                    name="communeNaissance"
                  />
                </div>

                <!-- pays  -->

                <div class="small md:w-1/3 px-3 mb-6 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-pays"
                  >
                    Pays
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-city"
                    type="text"
                    placeholder="France"
                    name="paysNaissance"
                  />
                </div>

                <!-- zip code   -->

                <div class="small md:w-1/3 px-3 mb-6 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-zip"
                  >
                    Code postal
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-zip"
                    type="text"
                    placeholder="13014"
                    name="codePostal"
                  />
                </div>
              </div>

             
              <div class=" flex flex-wrap mb-6">


                <label
                  for="countries"
                  class="block mb-2 text-sm font-bold text-gray-900 dark:text-white"
                  >Selectionner un genre</label
                >

                <select

                  class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  name="niveauFormation"
                >
                  <option selected>Plus haut niveau de formation obtenu</option>

                  <option value="6">Doctorat</option>

                  <option value="5">Master ou diplôme professionnel</option>

                  <option value="4">
                    Diplôme de premier cycle professionnel
                  </option>

                  <option value="3">Lycée / enseignement secondaire</option>

                  <option value="2">
                    Collège / enseignement secondaire infèrieur
                  </option>

                  <option value="1">Autres ètudes</option>
                </select>
              </div>

              <div class="flex flex-wrap mb-2 -mx-3 ">
              <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                <label
                  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                  for="grid-pays"
                >
                  dernier Emploi
                </label>

                <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                  id="grid-city"
                  type="text"
                  placeholder="Boulanger"
                  name="dernierEmploiOccupe"
                />
              </div>

              <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                <label
                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                for="grid-pays"
              >
                Quelle formation voulez-vous ? 
              </label>

                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                  <input type="search" id="default-search" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="La formation" required>
              </div>
            
            </div>
            <!-- numéro de tel et sécurité sociale -->

            <div class="flex flex-wrap -mx-3 mb-1">
                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <h1
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-white"
                  >
                    Champ de Numéro de Sécurité Sociale
                  </h1>

                  <div class="mb-4">
                    <label
                      for="numero_ss"
                      class="block text-sm font-medium text-gray-700"
                    ></label>

                    <input
                      type="text"
                      id="numero_ss"
                      name="numeroSecu"
                      class="bg-gray-200 mt-1 p-2 border rounded-md w-full"
                      placeholder="1 00 02 12 116 182 18"
                      />
<!--                       
                       pattern="\d{1}-\d{2}-\d{2}-\d{2}-\d{3}-\d{3}-\d{2}"
                                            
                                            title="Format attendu: 1 00 02 12 116 182 18" -->
                  </div>
                </div>

                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <h1
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-white"
                  >
                    Champ de Numéro de Téléphone
                  </h1>

                  <div class="mb-4">
                    <label
                      for="numero_tel"
                      class="block text-sm font-medium text-gray-700"
                    ></label>

                    <input
                      type="tel"
                      id="numero_tel"
                      name="telephone"
                      class="bg-gray-200 mt-1 p-2 border rounded-md w-full"
                      placeholder="06 12 34 56 78"
                      />
                      <!-- pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"
                      title="Format attendu: 06 12 34 56 78" -->
                  </div>
                </div>
              </div>

              <!-- submit -->

              <button
                style="background-color: #eb7366"
                type="submit"
                class="w-full text-center py-3 rounded text-white hover:bg-green-dark focus:outline-none my-1"
                
              >
                Continuer
              </button>
            </form>
            <!-- conditions -->
            <div class="text-center text-sm text-grey-dark mt-4">
            En vous inscrivant vous acceptez les
              <a
                class="no-underline border-b border-grey-dark text-red-500"
                href="#"
              >
                Conditions d'utilisation 
              </a>
              et les
              <a
                class="no-underline border-b border-grey-dark text-red-500"
                href="#"
              >
              politiques de confidentialité
              </a>
            </div>

            <!-- loggin -->

            <div class="text-grey-dark mt-6 mx-auto">
            Vous avez déjà un compte ?

              <a
                class="no-underline border-b border-blue text-red-500"
                href="../inc/login.php"
              >
                Connexion </a
              >.
            </div>
          </div>
        </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
