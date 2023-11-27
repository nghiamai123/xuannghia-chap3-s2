<?php include_once 'templates/header.php';// HEADER ?>
<?php
// YOUR CODE HERE
?>
    <div class="card mb-3">
        <div class="card-header">Province</div>
        <div class="card-body">
            <h2 class="display-3"><?php echo $_POST["select"]// province ?></h2>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">Gender</div>
        <div class="card-body">
            <!-- YOUR CODE HERE [gender] -->
                <?php 
                    if ($_POST["check2"][0] == "Female"){
                ?>
                    <img src="images/female.png" alt="Female">
                <?php
                }
                    else{
                        ?>
                            <img src="images/male.png" alt="Male">
                        <?php
                }
            ?>
        </div>
    </div>
    <div class="card">
        <div class="card-header">Subject</div>
        <div class="card-body" style="gap: 10px;">
        <?php
        $a = $_POST["check"];
        foreach($a as $num){
        ?>
        <span style="background-color: blue;  padding: 5px; margin: 5px; border-radius: 20px;">
            <?php echo $num;?>
        </span>
        <?php
        };
        ?>
        </div>
        
    </div>

<?php include_once 'templates/footer.php';// FOOTER ?>