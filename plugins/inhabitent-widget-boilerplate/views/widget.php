<!-- This file is used to markup the public-facing widget. -->
<?php if(strlen (trim ($monday_friday)) > 0) :?>

<p>
    <span class= "day-of-the-week">Monday - Friday:</span> <?php echo $monday_friday; ?>
</p>
<?php endif; ?>

<?php if(strlen (trim ($monday_friday)) > 0) :?>

<p>
    <span class= "day-of-the-week">Saturday:</span> <?php echo $saturday; ?>
</p>
<?php endif; ?>

<?php if(strlen (trim ($monday_friday)) > 0) :?>

<p>
    <span class= "day-of-the-week">Sunday:</span> <?php echo $sunday; ?>
</p>
<?php endif; ?>
