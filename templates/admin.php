<p>Admin stranica</p>


<div class="msg">
    <?php if ($msg != '') {
        echo $msg;
    }
    ?>
</div>




<p>Dodavanje novog profila:</p>

<form action="admin.php" method="post">

    Cena:
    <input type="text" name="price">
    <br/>
    Opis:
    <textarea  name="description"></textarea>
    <br/>
    <input type="submit" value="Pošalji" name="insert_profile">

</form>

   <table>
<?php

   foreach ($profiles as $profile) : ?>
        <div>
             ID: <?php echo $profile->profile_id; ?>
             Description  <?php echo substr($profile->profile_description, 0,50)."..."; ?>
            <button onclick="return confirm('Da li ste sigurni da želite da obrišete ovaj profil?')" class="delete" value="<?php echo $profile->profile_id?>">Obriši</button>
            <a href='update.php?id=<?php echo $profile->profile_id?>'>Izmeni </a>
             <a href="delete.php"> Obriši</a>
        </div>
   <br>


    <?php endforeach;  ?>
   </table>


