
<!DOCTYPE html>
<html lang="en">
<head>
  
  <?php
include "./php/head.php";
  ?> 
</head>
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
            <form class="w-full">
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
                  required
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
                  />
                </div>
              </div>

              <!-- genre et date de naissance -->

              <div class="flex flex-wrap -mx-3 mb-2">
                <!-- genre -->

                <div class="small md:w-1/2 px-3 mb-6 md:mb-0">
                  <label
                    for="countries"
                    class="block mb-2 text-sm font-bold text-gray-900 dark:text-white"
                    >Selectionner un genre</label
                  >

                  <select
                    id="countries"
                    class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  >
                    <option selected>Choisir un genre</option>

                    <option value="US">Femme</option>

                    <option value="CA">Homme</option>

                    <option value="FR">Autre</option>
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
                  />
                </div>
              </div>

              <!-- formation -->

              <div class=" flex flex-wrap mb-6">


                <label
                  for="countries"
                  class="block mb-2 text-sm font-bold text-gray-900 dark:text-white"
                  >Selectionner un genre</label
                >

                <select
                  id="countries"
                  class="border bg-gray-200 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full py-3 px-4 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                  <option selected>Plus haut niveau de formation obtenu</option>

                  <option value="Doc">Doctorat</option>

                  <option value="Ma">Master ou diplôme professionnel</option>

                  <option value="Sup">
                    Diplôme de premier cycle professionnel
                  </option>

                  <option value="Bac">Lycée / enseignement secondaire</option>

                  <option value="Col">
                    Collège / enseignement secondaire infèrieur
                  </option>

                  <option value="Aut">Autres ètudes</option>
                </select>
              </div>
              <!-- dernier emploi  -->
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
                      name="numero_ss"
                      class="bg-gray-200 mt-1 p-2 border rounded-md w-full"
                      placeholder="1 00 02 12 116 182 18"
                      pattern="\d{1}-\d{2}-\d{2}-\d{2}-\d{3}-\d{3}-\d{2}"
                      title="Format attendu: 1 00 02 12 116 182 18"
                    />
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
                      name="numero_tel"
                      class="bg-gray-200 mt-1 p-2 border rounded-md w-full"
                      placeholder="06 12 34 56 78"
                      pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}"
                      title="Format attendu: 06 12 34 56 78"
                    />
                  </div>
                </div>
              </div>
              <!-- checkbox-->
              <div>
                <p class="mb-2">Cochez les cases si:</p>

                <div class="flex flex-wrap -mx-3 mb-2">
                  <div class=" md:w-2/3 px-3 mb-6 md:mb-0">
                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                      <input
                        class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                        type="checkbox"
                        value=""
                        id="checkboxDefault"
                      />

                      <label
                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="checkboxDefault"
                      >
                        Vous etes inscrit à Pole Emploi
                      </label>
                    </div>

                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                      <input
                        class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                        type="checkbox"
                        value=""
                        id="checkboxDefault"
                      />

                      <label
                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="checkboxDefault"
                      >
                        Avoir le RSA
                      </label>
                    </div>

                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                      <input
                        class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                        type="checkbox"
                        value=""
                        id="checkboxDefault"
                      />

                      <label
                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="checkboxDefault"
                      >
                        vous etes allocataire minima sociaux
                      </label>
                    </div>
                  </div>

                  <div class=" md:w-1/3 px-3 mb-6 md:mb-0">
                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                      <input
                        class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                        type="checkbox"
                        value=""
                        id="checkboxDefault"
                      />

                      <label
                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="checkboxDefault"
                      >
                        Indemnité ARE
                      </label>
                    </div>

                    <div class="mb-[0.125rem] block min-h-[1.5rem] pl-[1.5rem]">
                      <input
                        class="relative float-left -ml-[1.5rem] mr-[6px] mt-[0.15rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:-mt-px checked:after:ml-[0.25rem] checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-l-0 checked:after:border-t-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:-mt-px checked:focus:after:ml-[0.25rem] checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-l-0 checked:focus:after:border-t-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                        type="checkbox"
                        value=""
                        id="checkboxDefault"
                      />

                      <label
                        class="inline-block pl-[0.15rem] hover:cursor-pointer"
                        for="checkboxDefault"
                      >
                        Travailleur handicapé
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- file input -->
              <div>
              <div>
                <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  for="multiple_files"
                  >Photo d'itentité recto-verso</label
                >

                <input
                  class="mb-10 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                  id="multiple_files"
                  type="file"
                  multiple
                />
              </div>
              <div>
                <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  for="multiple_files"
                  >Exemple 2</label
                >

                <input
                  class="mb-10 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                  id="multiple_files"
                  type="file"
                  multiple
                />
              </div>
              <div>
                <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                  for="multiple_files"
                  >Exemple 3</label
                >

                <input
                  class="mb-10 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                  id="multiple_files"
                  type="file"
                  multiple
                />
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

    