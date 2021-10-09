<?php   

session_start();


function option()
{
    echo '
         <option value="0">0</option>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option> 
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
    
    ';
     
}


if(isset($_POST["Playptit2"])){
    $_SESSION['ptitfinaleA']=$_POST['indiceptit1'];
   $_SESSION['ptitfinaleB']=$_POST['indiceptit2'];
   $_SESSION['statutmatch14']=true;

   }
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>
<body>
      <!-- menu -->
      <header id="pri">
            
            <h1 class="logo">  Tournoi_2.0 </h1>
        
         <label class="hamburger" for="toggler">&#9776;</label>
         <input id="toggler" type="checkbox">
      
        <nav class="navbar">
            <ul>
                <li><a href="index.html" >Home</a></li>
                <li><a href="tirage.php">Tirage</a></li>
                <li><a href="Confrontation.php">Confrontation</a></li>
                <li><a href="Classement.php">Classement</a></li>
            </ul>
        </nav>
      </header>


        <!-- Petite final -->

        <div class="milieu1">

<div class="grp">
            <table class="tableau-style">
                <form action="" method="POST">
                <thead>
                    <tr>
                        <th>Troisieme Place</th>
                        <th>Affiche</th>
                        <th>Score</th>
                        <th>Jouer</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Match 15</td>
                        <td> <?php echo  $_SESSION['ptit1']. " VS " . $_SESSION['ptit2'] ?></td>

                        <td><?php if($_SESSION['statutmatch14']==false){ ?>
                             <select name="indiceptit1" id="" >
                                    <?php option(); ?>
                                </select>
                                <?php }
                                else{
                                    echo $_SESSION['ptitfinaleA']." VS ". $_SESSION['ptitfinaleB'];

                                }
                                ?>
                                <?php if($_SESSION['statutmatch14']==false){ ?>
                                 VS 
                                <select name="indiceptit2" id="" >
                                    <?php option(); ?>
                                </select> 
                            <?php } ?>
                        </td>
                        <td><input type="submit" name="Playptit2" value="Play" <?php if($_SESSION['statutmatch14']) { ?> 
                         disabled <?php } ?>></td>

                    </tr>


                    <?php 
                    
                     if($_SESSION['statutmatch14'])
                     {
                         if( $_SESSION['ptitfinaleA']>$_SESSION['ptitfinaleB'])
                         { ?>
                                <table class="tableau-style">
                                    <tr>
                                        <th>Resultat de la petite finale</th>
                                        <th>3eme Position </th>
                                        <th>4eme Position </th>
                                    </tr>
                                       <tr>
                                           <td></td>
                                           <td> <?php   echo $_SESSION['ptit1']." termine en 3e place " ?></td>
                                           <td> <?php   echo $_SESSION['ptit2']." termine en 4e place " ?></td>

                                       </tr>
                                            
                                           
                            </table>
                            
                      <?php   }  
                         elseif( $_SESSION['ptitfinaleA']<$_SESSION['ptitfinaleB'])
                         { ?>
                            <table class="tableau-style">
                                    <tr>
                                        <th>Resultat de la petite finale</th>
                                        <th>3eme Position </th>
                                        <th>4eme Position </th>
                                    </tr>
                                       <tr>
                                           <td></td>
                                           <td> <?php  echo $_SESSION['ptit2']." termine en 3e place " ?></td>
                                           <td> <?php  echo $_SESSION['ptit1']." termine en 4e place " ?></td>

                                       </tr>
                                            
                                           
                            </table>

                      <?php   } 
                         else{
                             $champion=rand(0,1);
                             if($champion==0)
                             { ?>
                                   <table class="tableau-style">
                                    <tr>
                                        <th>Resultat de la petite finale</th>
                                        <th>3eme Position </th>
                                        <th>4eme Position </th>
                                    </tr>
                                       <tr>
                                           <td><?php echo"classement" ?></td>
                                           <td> <?php   echo $_SESSION['ptit1']." termine en 3e place " ?></td>
                                           <td> <?php  echo $_SESSION['ptit2']." termine en 4e place "?></td>

                                       </tr>
                                            
                                           
                            </table>
          
                          <?php   } 
                             else{ ?>
                               <table class="tableau-style">
                                    <tr>
                                        <th>Resultat de la petite finale</th>
                                        <th>3eme Position </th>
                                        <th>4eme Position </th>
                                    </tr>
                                       <tr>
                                           <td></td>
                                           <td> <?php   echo $_SESSION['ptit2']." termine en 3e place " ?></td>
                                           <td> <?php   echo $_SESSION['ptit1']." termine en 4e place "?></td>

                                       </tr>
       
                            </table>

                          <?php   }
                            
                         }
                     }
                    ?>

                </tbody>
                </form>
            </table>  
        </div>

        <div class="envoie3">
        <a  class="champs" href="GrandeFinal.php">Grande Final</a>

        </div>

        </div>
   
    
</body>
</html>