
<!-- ----- début signup -->
 
<?php 
require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
      include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
    ?> 
    
     <h2 class="text-info bg-white">Formulaire d'inscription</h2>
     <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
        
     <?php if (isset($user)): ?>
        <p style="color: blue;">Success sign up of user <?php echo htmlspecialchars($user); ?> go to login</p>
    <?php endif; ?>

    <form role="form" method='get' action='router1.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='personneInscription'>   
        <label class='w-25' for="id">Nom : </label><input type="text" name='nom' size='75' value='' required="true" > <br/>                          
        <label class='w-25' for="id">Prenom : </label><input type="text" name='prenom' value='' required="true" > <br/>         
        <label class='w-25' for="id">login : </label><input type="text" name='login' size='75' value='' required="true" > <br/>                          
        <label class='w-25' for="id">Password : </label><input type="password" name='pwd' value='' required="true" > <br/>         
      </div>
      <p/>
       <br/> 
      <button class="btn btn-primary" type="submit">Go</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

<!-- ----- fin signup -->
