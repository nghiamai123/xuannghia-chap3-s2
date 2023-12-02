<?php require_once 'templates/header.php' ?>
<table class="table table-striped table-bordered">
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Number</th>
        <th>Message</th>
        <th>Provinces</th>
        <th>Gender</th>
        <th>Subject</th>
    </tr>
    <?php
  
    ?>
        <tr>
            <td><?php echo $_POST["name"]//name; ?></td>
            <td><?php echo $_POST["email"]//email; ?></td>
            <td><?php echo $_POST["pass"]//password; ?></td>
            <td><?php echo $_POST["number"]//number; ?></td>
            <td><?php echo $_POST["text"]//message; ?></td>
            <td><?php echo $_POST["select"]//province; ?></td>
            <td>
                <?php 
                   // subjects
                   echo implode(" | ", $_POST["check"]);
                ?>
            </td>
            <td><?php if (isset($_POST["gender"])){
                echo $_POST["gender"];
            }
                // gender ?>
                </td>
        </tr>
 
</table>
<?php require_once 'templates/footer.php' ?>