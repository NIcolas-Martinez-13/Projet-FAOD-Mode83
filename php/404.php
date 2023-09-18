<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<style>
</style>


<section class="bg-white dark:bg-gray-700">
    <div class="container flex min-h-screen px-6 py-10 mx-auto">
        <div class="w-full max-w-md">

            <h1 style="color:#eb7366 "class="mt-3 text-2xl font-semibold  md:text-3xl">
                404 error - Page introuvable
            </h1>
            <p class="mt-4 text-gray-500 dark:text-white">
                <p class="font-bold dark:text-white">
                    Aucune page ne correspond à votre recherche
                <p class="dark:text-white">
                Désolé, l’article que vous recherchez est introuvable.<br><br>
                Faire une autre recherche ?
            </p>

            <div class="mt-3 mb-6">
                <div class="relative flex w-full items-stretch">
                    <input
                        type="search"
                        class="w-full pl-3 pr-12 py-2.5 text-base rounded-l border border-solid border-red-500 bg-transparent focus:ring ring-red-400 focus:border-red focus:outline-none dark:border-red-500 dark:text-white dark:placeholder-text-neutral-400"
                        placeholder="Search"
                        aria-label="Search"
                        aria-describedby="button-addon1" />

                    <button
                        class="flex items-center justify-center w-20 bg-black text-white rounded-r hover:bg-red-700 focus:ring focus:outline-none active:bg-red-800"
                        type="button"
                        id="button-addon1">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            class="h-6 w-6">
                            <path
                                fill-rule="evenodd"
                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="mt-6">
                <p class="font-bold dark:text-white">
                    Pour de meilleurs résultats de recherche, quelques suggestions :
                    <br>
                    <ul class="list-disc list-inside">
                        <li class="dark:text-white">Vérifiez bien votre saisie.</li>
                        <li class="dark:text-white">Utilisez des mots clés plus génériques.</li>
                        <li class="dark:text-white">Essayez d’utiliser plusieurs termes de recherche.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>

</body>
</html>