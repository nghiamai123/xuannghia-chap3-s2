<?php include_once 'templates/header.php' // HEADER ?>
<ul class="list-group">
<?php
   // YOUR CODE HERE
?>
    <li class="list-group-item"><?php echo $_POST["name"]// name; ?></li>
    <li class="list-group-item"><?php echo $_POST["email"]// email; ?></li>
    <li class="list-group-item"><?php echo $_POST["pass"]// password; ?></li>
    <li class="list-group-item"><?php echo $_POST["number"]// number; ?></li>
    <li class="list-group-item"><?php echo $_POST["content"]// message; ?></li>

</ul>
<?php include_once 'templates/footer.php' // FOOTER ?>