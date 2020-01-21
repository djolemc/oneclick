<p>Admin stranica</p>


<div class="msg">
    <?php if ($msg != '') {
        echo $msg;
    }
    ?>
</div>




<p>Dodavanje novog profila:</p>

<?php if (isset($singleProfile)) : ?>
    <form action="admin.php?edit" method="post">

        <?php else : ?>

<form action="admin.php" method="post">

    <?php endif; ?>
    Ime:
    <input type="text" name="name" value="<?php if (isset($singleProfile)) echo $singleProfile->profile_name ?>" required>
    <br/>
    Cena:
    <input type="text" name="price" value="<?php if (isset($singleProfile)) echo $singleProfile->profile_price ?>" required>
    <br/>
    Opis:
    <textarea  name="description"  required><?php if (isset($singleProfile)) echo $singleProfile->profile_description?></textarea>
    <br/>
    <input type="submit"  value="<?php if (isset($singleProfile))   echo 'Izmeni'; else echo  'Unesi'    ?>" name="insert_profile">

</form>

   <table>
<?php

   foreach ($profiles as $profile) : ?>
        <div>
             ID: <?php echo $profile->profile_id; ?>
             Description  <?php echo substr($profile->profile_description, 0,50)."..."; ?>




          <a href='admin.php?id=<?php echo $profile->profile_id?>&update'>Izmeni </a>
          <a onclick="return confirm('Da li ste sigurni da želite da obrišete ovaj profil?')"  href='admin.php?id=<?php echo $profile->profile_id?>&action=delete'>Obrisi </a>

        </div>
   <br>


    <?php endforeach;  ?>
   </table>


