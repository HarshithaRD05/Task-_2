

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style2.css">

                
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>
    <body>

        <?php session_start(); include('config.php');?>
<?php 
    if(isset($_SESSION["username"])){

    } else {
        echo '<div class="container main">
            <div class="row justify-content-center ">';
            echo "<div class='bx col-sm-4'>";
        echo'<div class="row justify-content-center">';
        echo ' <a href="index3.php">Go To Login page</a>';
        echo '</div>';
         echo'<div class="row justify-content-center">';
        die('You must be Logged in');
       
        echo '</div></div></div></div>';
    }
?>

             <div class="float-right">
                        <a href="logout.php">Log Out</a>
               </div>

                <div class="lo main container">
                        <label><b>Leaderboard</b></label>
               </div>
                
        



             <div class="container main">  
              
            <div class="row justify-content-center">
            <div class="bx col-sm-6">

<?php 


        echo '<div class="row mt-2 w-120 "><div class="col d-flex justify-content-center list">';
            echo "<label>User Name</label></div>";
            //echo '</div>';  
             echo '<div class="col d-flex justify-content-center list">';
            echo "<label>Score</label></div> <br>";
            echo '</div>';                     
      
        $getT = "SELECT * FROM users ORDER BY score DESC;";
        $res = mysqli_query($db,$getT);
        
        while($row = mysqli_fetch_assoc($res)){
            $val = $row["username"];
            $val2 = $row["score"];

            echo '<div class="row mt-2 w-120 "><div class="col d-flex justify-content-center list">';
            echo "<label>$val</label></div>";
            //echo '</div>';  
             echo '<div class="col d-flex justify-content-center list">';
            echo "<label>$val2</label></div> <br>";
            echo '</div>';                     
        }
        

    ?>



</div></div></div>

          
    
</body>
</html>