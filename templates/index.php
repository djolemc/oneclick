<?php

foreach ($profiles as $profile) : ?>
    <div>

        <img class="profile_image" src="../assets/images/<?php echo $profile->profile_image; ?>">

        Ime: <?php echo $profile->profile_name; ?>
        <?php echo $profile->profile_price; ?>


        Description  <?php echo substr($profile->profile_description, 0,50)."..."; ?>
        <a class="read_more" href="view_single?id=<?php echo $profile->profile_id; ?>">Pogledaj profil</a>





    </div>
    <br>


<?php endforeach;  ?>






