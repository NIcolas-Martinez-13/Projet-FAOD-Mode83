<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
} 
?> 
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"

    />

  <link rel="stylesheet" href="../style.css">
  
<!-- afficher le login ou l'inscrire si pas de donnée auth -->

<?php if(isset($_SESSION['flash'])) : ?>
    <?php foreach($_SESSION['flash'] as $type => $message) : ?>
     <div class="alert alert-<?= $type; ?>">

     <?= $message; ?>
       
     </div>
      <?php endforeach; ?>
      <?php unset($_SESSION['flash']); ?>
      <?php endif; ?>
  </div>
