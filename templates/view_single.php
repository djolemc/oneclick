

<img class="profile_image" src="../assets/images/<?php echo $profile->profile_image; ?>">
<p><?php echo $profile->profile_name; ?></p>
<p><?php echo $profile->profile_description?></p>
<p><?php echo $profile->profile_price; ?></p>


<?php if (isset($comments))  : ?>

    <?php foreach ($comments as $comment) : ?>

    <?php if ($comment->is_enabled == 1) : ?>

        <p><?php echo $comment->created;?></p>
        <p><?php echo $comment->comment_text;?></p>


    <?php endif; endforeach ?>



<?php endif ?>

<?php if (isset($_SESSION['msg'])) echo $_SESSION['msg'];
    unset($_SESSION['msg']);
    ?>

<form action="comments.php" method="post">

    <label for="comment">Dodaj komentar</label><br>
        <textarea  id="comment" cols="100" rows="5" name="comment_text"  required></textarea>

    <input type="hidden" name="profile_id" value="<?php echo $profile->profile_id ?>">
    <br>
    <input type="submit" name="dodaj_komentar" value="Dodaj komentar">
</form>
