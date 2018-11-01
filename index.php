<?php include 'database.php';?>

<?php 
//create select query
$query = "SELECT * FROM shouts ORDER BY ID asc";

//stores the output
$shouts = mysqli_query($con,$query);

?>





<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
    <title>Shout it</title>
    <link rel="stylesheet" typr="text/css" href="css/style.css"/>
</head>
    <body>
    <div id="container">
    <header>
        <h1>Shout it!</h1>
    </header>
    <div id="shouts">
            <ul>
                <?php while($row=mysqli_fetch_assoc($shouts)) :?>
                <li class="shout"> <span> <?php echo $row['TIME'] ?> - </span><STRONG><?php echo $row['USER']?></STRONG> : <?php echo $row['MESSAGE'] ?></li>

                <?php  endwhile; ?>
   
            </ul>
    </div>

    <div id="inputs">

        <?php if(isset($_GET['error'])) :?>
        <div class="error"> <?php echo $_GET['error']; ?> </div>
    <?php endif; ?>


    <form method="post" action="process.php">
    <input type="text" name="user" placeholder="enter your name: "/>
    <input type="text" name="message" placeholder="enter your message: "/>
    <br/>
    <input  class="shout-btn" type="submit" name="submit" value="shout it out">

    </form>

    </div>

    </div>
    </body>
</html>