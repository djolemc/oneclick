<div id="name" class="row">
    <div class="col-md-12">
        <p><?php echo $profile->profile_name; ?></p>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="col-sm-2">
            <img class="profile_image round" src="../assets/images/<?php echo $profile->profile_image; ?>">
        </div>
        <div class="col-sm-10">
            <p id="price"><?php echo $profile->profile_price; ?>e/h</p>
        </div>
    </div>
    <div class="col-md-6">
        <p><?php echo $profile->profile_description ?></p>
    </div>
</div>


<div class="row">
    <div class="col-md-10 offset-1">
        <p id="comment_title">Komentari:</p>
        <?php if (isset($comments))  : ?>
            <?php foreach ($comments as $comment) : ?>
                <?php if ($comment->is_enabled == 1) : ?>
                    <div class="comments">
                        <p class="date_created">Objavljeno: <?php echo $comment->created; ?></p>
                        <p class="comment_body"><?php echo $comment->comment_text; ?></p>
                    </div>
                <?php endif; endforeach ?>
        <?php endif ?>
    </div>
</div>


<div class="row">
    <div class="col-md-8 offset-2">
        <form action="comments.php" method="post">
            <div class="form-group">

                <textarea class="form-control" id="comment" placeholder="Komentar..." cols="100" rows="5"
                          name="comment_text" required></textarea>
            </div>
            <input type="hidden" name="profile_id" value="<?php echo $profile->profile_id ?>">
            <input type="submit" class="btn btn-primary" name="dodaj_komentar" value="Dodaj komentar">

        </form>
    </div>
</div>
<br>
<div id="msg" class="row">
    <div class="col-md-8 offset-2">
        <?php if (isset($_SESSION['msg'])) {
            echo "<span class='alert alert-success'>" . $_SESSION['msg'] . "</span>";
            unset($_SESSION['msg']);
        }
        ?>
    </div>
</div>