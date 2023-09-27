<?php
    define("TITLE", "Menu Franklin's Fine Dining");

    include('includes/header.php');
?>

    <div id="menu=items">

        <h1>Available</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing &mdash; elit. Suscipit veniam mollitia molestias nam dignissimos. Nihil doloremque libero eligendi assumenda quaerat, rerum deleniti voluptate quidem quis, quos, dicta magni quibusdam. Voluptatibus?</p>
        <p><em></em></p>

        <hr>

        <ul>

            <?php foreach ($menuItems as $dish => $item) { ?>

            <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item["title"]; ?></a> <sup>$</sup><?php echo $item["price"]; ?></li>  
            
            <?php } ?>

        </ul>

    </div>


<?php include('includes/footer.php');?>