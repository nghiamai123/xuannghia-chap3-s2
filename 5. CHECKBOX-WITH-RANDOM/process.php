<?php require_once 'templates/header.php' ?>
<?php

// $colors = ['primary', 'danger', 'info', 'warning', 'success', 'secondary', 'dark'];
$colors = ['red', 'blue', 'white', 'yellowgreen', 'sandybrown', 'aqua', 'bisque'];
// CODE HERE

?>
    <div class="card">
        
        <div class="card-body">
            <?php
            // CODE HERE
            $a = $_POST["check"];
            foreach($a as $num){
                $rand =  $colors[array_rand($colors)];
            ?>
            <span style="background-color: <?php echo $rand; ?>;  padding: 5px; margin: 5px; border-radius: 5px;">
                <?php echo $num;?>
            </span>
            <?php
            };
            ?>
        </div>
    </div>


<?php require_once 'templates/footer.php' ?>