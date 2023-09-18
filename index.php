
<?php
require_once './php/requireDoc.php';

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



    if (empty($_POST['nom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['nom'])) {
        $errors['nom'] = "Votre nom n'est pas valide (alphanuméric)";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE nom= ?');
        $req -> execute([$_POST['nom']]);
        $user = $req->fetch();
        if($user) {
            $errors['Nom'] ='Ce nom est déja pris';
        }
    }
    if (empty($_POST['prenom']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['prenom'])) {
        $errors['prenom'] = "Votre prenom n'est pas valide (alphanuméric)";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE prenom= ?');
        $req -> execute([$_POST['prenom']]);
        $user = $req->fetch();
        if($user) {
            $errors['prenom'] ='Ce prenom est déja pris';
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


    if (isset($_POST['genre']) && $_POST['genre'] !== 'nothing') {
        $genre = $_POST['genre'];
        if (!in_array($genre, ['Homme', 'Femme', 'Non_binaire'])) {
            $errors['genre'] = "Votre genre n'est pas valide";
        }
    } else {
        $errors['genre'] = "Veuillez sélectionner un genre valide";
    }

    if(empty($_POST['date_naissance'])) {
        $errors['date_naissance'] = "Vous n\'avez pas indiquez de date";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE date_naissance= ?');
        $req -> execute([$_POST['date_naissance']]);
        $user = $req->fetch();
        if($user) {
            $errors['date_naissance'] ='Vous n\'avez pas indiquez de date';
        }
    }


    if(empty($_POST['adresse'])) {
        $errors['adresse'] = "Vous n\'avais pas indiquez d\'adresse";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE adresse= ?');
        $req -> execute([$_POST['adresse']]);
        $user = $req->fetch();
        if($user) {
            $errors['pays'] ='Vous n\'avais pas indique pas indiquez d\'adresse';
        }
    }
    if(empty($_POST['ville'])) {
        $errors['ville'] = "Vous n\'avez pas indiquez de ville";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE ville= ?');
        $req -> execute([$_POST['ville']]);
        $user = $req->fetch();
        if($user) {
            $errors['ville'] ='Vous n\'avez pas indiquez de ville';
        }
    }

    if(empty($_POST['pays'])) {
        $errors['pays'] = "Vous n\'avais pas indiquez de pays";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE pays= ?');
        $req -> execute([$_POST['pays']]);
        $user = $req->fetch();
        if($user) {
            $errors['pays'] ='Vous n\'avais pas indique pas indiquez de pays ';
        }
    }
    if(empty($_POST['codePostal'])) {
        $errors['codePostal'] = "Vous n\'avais pas indiqué de code postal ";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE codePostal= ?');
        $req -> execute([$_POST['codePostal']]);
        $user = $req->fetch();
        if($user) {
            $errors['codePostal'] ='Vous n\'avais pas indiqué de code postal ';
        }
    }


    if (isset($_POST['niveauFormation']) && $_POST['niveauFormation'] !== 'nothing') {
        $genre = $_POST['niveauFormation'];
        if (!in_array($genre, ['Doctorat', 'Master', 'premier_Cycle','Lycee','College', 'Autre'])) {
            $errors['niveauFormation'] = "Pas de niveau de formation indiquez";
        }
    } else {
        $errors['niveauFormation'] = "Veuillez selectionnez un niveau de formation";
    }


    if(empty($_POST['telephone'])) {
        $errors['telephone'] = "Vous n\'avais pas indiqué de numéro de telephone";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE telephone= ?');
        $req -> execute([$_POST['telephone']]);
        $user = $req->fetch();
        if($user) {
            $errors['telephone'] ='Vous n\'avais pas indiqué de numéro de telephone';
        }
    }

    if(empty($_POST['numeroSecu'])) {
        $errors['numeroSecu'] = "Vous n\'avais pas indiqué de numéro de sécurité sociale";

    } else {
        $req = $pdo->prepare('SELECT idUser FROM UtilisateurConnecte WHERE numeroSecu= ?');
        $req -> execute([$_POST['numeroSecu']]);
        $user = $req->fetch();
        if($user) {
            $errors['numeroSecu'] ='Vous n\'avais pas indiqué de numéro de sécurité sociale 2';
        } else {

        }
    }

    if (empty($errors)) {

        $req = $pdo->prepare("INSERT INTO UtilisateurConnecte SET username = ?, nom = ?, prenom = ?, password = ?, email = ?, genre = ?, date_naissance = ?, adresse = ?, ville = ?,pays= ?, codePostal =?,niveauFormation=?,numeroSecu= ? ,telephone =?, confirmation_token = ?");
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $token = str_random(60);
        $req->execute([$_POST['Username'], $_POST['nom'], $_POST['prenom'], $password, $_POST['email'], $_POST['genre'],$_POST['date_naissance'], $_POST['adresse'] ,$_POST['ville'], $_POST['pays'], $_POST['codePostal'],$_POST['niveauFormation'],$_POST['numeroSecu'],$_POST['telephone'], $token]);
        $user_id = $pdo->lastInsertId();
        sendMailInscription($_POST['email'], $user_id, $token);
        $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
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
              
            <div class="small mb-6 ">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-first-name"
                  >
                    Pseudonyme
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name"
                    type="text"
                    placeholder="Jane"
                    name = "Username"

                  />
                </div>  
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
                    name = "prenom"

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
                  class="block mb-2 text-sm font-medium text-gray-900 "
                  >Email address</label
                >

                <input
                  type="email"
                  id="email"
                  class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
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
                    type ="ENUM"
                    class="block mb-2 text-sm font-bold text-gray-900 "
                    >Selectionner un genre</label
                  >

                  <select
                    
                    class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 "
                    name="genre"
                  >
                    <option selected value="nothing">Choisir un genre</option>

                    <option value="Femme">Femme</option>

                    <option value="Homme">Homme</option>

                    <option value="Non_binaire">Non binaire</option>
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
                    class="border bg-gray-200 border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 "
                  />
                </div>
              </div>
               <!-- 4 champs -->
<!-- adresse  -->
<div class="small mb-6 ">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-first-name"
                  >
                    Adresse
                  </label>

                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                    id="grid-first-name"
                    type="text"
                    placeholder="Rue des fleurs"
                    name = "adresse"

                  />
                </div>  
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
                    name="ville"
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
                    name="pays"
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
                    maxlength="5"
                  />
                </div>
              </div>

             
              <div class=" flex flex-wrap mb-6">


                <label
                  for="countries"
                  class="block mb-2 text-sm font-bold text-gray-900 "
                  >Selectionner un genre</label
                >

                <select

                  class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 "
                  name="niveauFormation"
                >
                  <option selected value="nothing">Plus haut niveau de formation obtenu</option>

                  <option value="Doctorat">Doctorat</option>

                  <option value="Master">Master ou diplôme professionnel</option>

                  <option value="premier_Cycle">
                    Diplôme de premier cycle professionnel
                  </option>

                  <option value="Lycee">Lycée / enseignement secondaire</option>

                  <option value="College">
                    Collège / enseignement secondaire infèrieur
                  </option>

                  <option value="Autre">Autres ètudes</option>
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
                    class="block mb-2 text-sm font-bold text-gray-900 "
                  >
                    Numéro de Sécurité Sociale
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
                      class="bg-gray-200 mt-1 p-2 border border-gray-200 rounded-md w-full"
                      placeholder="1 00 02 12 116 182 18"
                      pattern="[0-9]{15}"
                      maxlength="15"
                      required
                      /> 
<!--                       
                                            
                                            title="Format attendu: 1 00 02 12 116 182 18" -->
                  </div>
                </div>

                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <h1
                    class="block mb-2 text-sm font-bold text-gray-900 "
                  >
                    Numéro de Téléphone
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
                      class="bg-gray-200 mt-1 p-2 border border-gray-200  rounded-md w-full"
                      placeholder="06 12 34 56 78"
                      maxlength="10"
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
