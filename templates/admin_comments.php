<p>Novi komentari koji nisu odobreni:</p>
<br>
<?php foreach ($comments as $comment) : ?>



    <?php if ($comment->is_enabled == 0) : ?>


       <div class="comment">
        <p><?php echo $comment->comment_text; ?></p>
        <form action="comments.php" method="post">

            <input type="hidden" name="comment_id" value="<?php echo $comment->comment_id ?>">
            <input type="hidden" name="profile_id" value="<?php echo $comment->profile_id ?>">
            <input type="submit" name="enable_comment" value="Odobri komentar">
        </form>
       </div>

    <?php endif; endforeach ?>


<?php


