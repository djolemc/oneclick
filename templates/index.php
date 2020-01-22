<div class="row">

    <?php foreach ($profiles as $profile) : ?>
        <div class=" col-md-6 box">
            <div class="row profile">
                <div class="col-md-3">
                    <img class="profile_image rounded float-left img-thumbnail"
                         src="../assets/images/<?php echo $profile->profile_image; ?>">
                </div>
                <div class="col-md-9">
                    <span class="profile_name"> <?php echo $profile->profile_name; ?> </span>
                    <p>Cena <?php echo $profile->profile_price; ?>e/h </p>
                    <span class="description_short"><?php echo substr($profile->profile_description, 0, 50) . "..."; ?>
                   <a class="read_more"
                      href="view_single?id=<?php echo $profile->profile_id; ?>">Pogledaj profil</a></span>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



