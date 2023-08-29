<!DOCTYPE html>
<html lang="en">
<head>
   
  <?php
include "../php/head.php";
  ?> 
</head>
<body>
    
</body>
</html>

<div class="flex justify-center items-center flex-col mb-6">
  <h1 class="font-bold text-4xl">Inscription</h1>
    <div class="md:w-1/2 text-center text-lg">
  <p>
    Vous souhaitez recevoir la newsletter de l'association Mode83 ?
    Voici le formulaire que vous devez remplir.

    Si vous voulez également vous inscrire à une de nos formations cliquez
    <a href="../index.php" class="no-underline  border-blue text-red-500">Ici</a>
  </p>
    </div>
</div>
<div class="flex justify-center items-center">

          <form class="bg-white border border-gray-300 p-6 rounded-lg shadow-md">
            <div class="flex flex-wrap -mx-3 mb-6">
            
                <!-- nom -->

              <div class="w-full px-3">
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
                />
              </div>
            </div>

              <div class="w-full mb-6 ">
                <h1
                  class="block mb-2 text-sm font-bold text-gray-900 "
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
                    name="numero_tel"
                    class="bg-gray-200 mt-1 p-2 border  border-gray-200 rounded-md w-full"
                    placeholder="06 12 34 56 78"
                    pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"
                    title="Format attendu: 06 12 34 56 78"
                  />
                </div>
              </div>
              

            <!-- email -->

            <div class="mb-6">
              <label
                for="email"
                class="block mb-2 text-sm font-bold text-gray-700 "
                >Email address</label
              >

              <input
                type="email"
                id="email"
                class="bg-gray-200 border border-gray-200 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                placeholder="john.doe@company.com"
                required
                
              />

              <!-- dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 -->
            </div>

            

            <!-- submit -->

            <button
              style="background-color: #eb7366"
              type="submit"
              class="w-full text-center py-3 rounded text-white hover:bg-green-dark focus:outline-none my-1"
            >
              S'inscrire
            </button>
          

          <!-- conditions -->

          <div class="text-center text-sm text-grey-dark mt-4">
          En vous inscrivant vous acceptez les

            <a
              class="no-underline border-b border-grey-dark text-red-500"
              href="#"
            >
             conditions d'utilisation
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

          <div class="flex text-grey-dark mt-6 justify-center ">
            <p>   Vous avez déjà un compte ?
            </p> 
            <a
              class="no-underline  border-blue text-red-500 "
              href="../inc/login.php"
             
            ><pre> Connexion </a
            > </pre>
            </form>
          </div>
        </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
  </html>
  