<div class="row">

    <?php foreach ($profiles as $profile) : ?>
        <div class="profile col-md-6 box">

                <img class="profile_image rounded float-left img-thumbnail" src="../assets/images/<?php echo $profile->profile_image; ?>">

            <span class="profile_name"> <?php echo $profile->profile_name; ?> </span>
            <p>Cena <?php echo $profile->profile_price; ?>e/h </p>


               <span class="description_short"> Description <?php echo substr($profile->profile_description, 0, 50) . "..."; ?>
                   <a class="read_more" href="view_single?id=<?php echo $profile->profile_id; ?>">Pogledaj profil</a></span>


        </div>


    <?php endforeach; ?>


</div>



