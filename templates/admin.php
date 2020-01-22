<?php if ($msg != '') : ?>
    <div id='msg' class="row alert alert-success">
        <div class="col-md-6 offset-md-2 msg">
            <?php echo $msg; ?>
        </div>
    </div>
<?php endif ?>


<div class="card mt-5">
    <div class="card-body">
        <h5 class="card-title">Dodavanje novog profila:</h5>
        <div class="row">
            <div class="col md-6 offset-2">
                <form action="admin.php" method="post">
                    <div class="form-group">
                        <input type="text" placeholder="Unesite ime" class="form-control" name="name"
                               value="<?php if (isset($singleProfile)) echo $singleProfile->profile_name ?>" required>
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Unesite cenu po satu" name="price"
                               value="<?php if (isset($singleProfile)) echo $singleProfile->profile_price ?>" required>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" cols="30" rows="5" placeholder="Podaci o profilu"
                                  name="description"
                                  required><?php if (isset($singleProfile)) echo $singleProfile->profile_description ?></textarea>
                    </div>
                    <?php if (isset($singleProfile)) : ?>

                        <input type="hidden" name="profile_id" value="<?php echo $singleProfile->profile_id ?>">

                    <?php endif ?>

                    <input class="btn btn-primary" type="submit"
                           value="<?php if (isset($singleProfile)) echo 'Izmeni'; else echo 'Unesi' ?>"
                           name="<?php if (isset($singleProfile)) echo 'update_profile'; else echo 'insert_profile' ?>">

                </form>


            </div>
        </div>

    </div>
</div>


<div class="card mt-5">
    <div class="card-body">
        <h5 class="card-title">Profili u bazi:</h5>
        <?php
        foreach ($profiles as $profile) : ?>
            <div>

                <p class="profile_name"><?php echo $profile->profile_name; ?></p>
                <a class="btn btn-success" href='admin.php?id=<?php echo $profile->profile_id ?>&update'>Izmeni </a>
                <a class="btn btn-danger"
                   onclick="return confirm('Da li ste sigurni da želite da obrišete ovaj profil?')"
                   href='admin.php?id=<?php echo $profile->profile_id ?>&action=delete'>Obriši </a>
                <a class="btn btn-info" href='admin_comments.php?id=<?php echo $profile->profile_id ?>'>Pogledaj
                    komentare</a>
            </div>
            <br>
        <?php endforeach; ?>
        </table>


    </div>
</div>

