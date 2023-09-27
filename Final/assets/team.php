<?php
    define("TITLE", "Team Franklin's Fine Dining");

    include('includes/header.php');
?>

    <div id="team-members" class="cf">

        <h1>Our Team</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi iure, tempore, quisquam atque reiciendis nesciunt ipsam tenetur provident nam asperiores debitis ab! Incidunt nisi ipsa illum, ut aperiam consectetur. Tempora?<strong></strong></p>

        <hr>

        <?php
            foreach ($teamMembers as $member) {
        ?>

           <div class="member">

                <img src="img/<?php echo $member["img"]; ?>.png" alt="<?php echo $member["name"]; ?>">
                <h2><?php echo $member["name"]; ?></h2>
                <p><?php echo $member["bio"]; ?></p>
                
           </div>     

        <?php
             }
        ?>

    </div>

    <hr>

<?php include('includes/footer.php');?>