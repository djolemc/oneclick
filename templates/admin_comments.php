<br>
<h4>Novi komentari koji nisu odobreni:</h4>
<br>
<?php foreach ($comments as $comment) : ?>



    <?php if ($comment->is_enabled == 0) : ?>


       <div class="row comment">


        <form action="comments.php" method="post">
            <span class=""><?php echo $comment->comment_text; ?></span>
            <input type="hidden" name="comment_id" value="<?php echo $comment->comment_id ?>">
            <input type="hidden" name="profile_id" value="<?php echo $comment->profile_id ?>">
            <input class="btn btn-success" type="submit" name="enable_comment" value="Odobri komentar">
        </form>
       </div>

    <?php endif; endforeach ?>


<?php


