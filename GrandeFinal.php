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


if(isset($_POST['PlayGrande'])){
    $_SESSION['GrandefinaleA']=$_POST['indiceGrande1'];
    $_SESSION['GrandefinaleB']=$_POST['indiceGrande2'];
    $_SESSION['statutmatch15']=true;


}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>GrandeFinal</title>
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

  <!-- Grande Final -->

  <div class="milieu1">

  <div  class="grp">
            <table class="tableau-style">
                <thead>
                    <tr>
                        <th>Final</th>
                        <th>Affiche</th>
                        <th>Score</th>
                        <th>Jouer</th>
                    </tr>
                </thead>

                <tbody>
                    <form action="" method="POST">
                    <tr>
                        <td>Match 16</td>
                        <td><?php echo $_SESSION['GRQlf1']." VS ". $_SESSION['GRQlf2'] ?></td>
                        <td>
                        <?php if($_SESSION['statutmatch15']==false){ ?>
                             <select name="indiceGrande1" id="" >
                                    <?php option(); ?>
                                </select>
                                <?php }
                                else{
                                    echo $_SESSION['GrandefinaleA']." VS ". $_SESSION['GrandefinaleB'];

                                }
                                ?>
                                <?php if($_SESSION['statutmatch15']==false){ ?>
                                 VS 
                                <select name="indiceGrande2" id="" >
                                    <?php option(); ?>
                                </select> 
                            <?php } ?>
                        </td>
                        <td><input type="submit" name="PlayGrande" value="Play" <?php if($_SESSION['statutmatch15']) { ?> 
                         disabled <?php } ?>>
                        </td>
                    </tr>

                
<?php 
                    
if($_SESSION['statutmatch15'])
{
    if($_SESSION['GrandefinaleA']>$_SESSION['GrandefinaleB'])
    {  ?>
        
        <table class="tableau-style">
                                    <tr>
                                        <th>Resultat de la Grande finale</th>
                                        <th>1eme Position </th>
                                        <th>2eme Position </th>
                                    </tr>
                                       <tr>
                                           <td></td>
                                           <td> <?php  echo $_SESSION['GRQlf1']. " Champions de la coupe 3eme info " ?></td>
                                           <td> <?php  echo $_SESSION['GRQlf2']. " termine en 2e place "?></td>

                                       </tr>
       
                            </table>
   
  <?php  }
    elseif( $_SESSION['GrandefinaleA'] < $_SESSION['GrandefinaleB'] )
    {  ?>

           <table class="tableau-style">
                                    <tr>
                                        <th>Resultat de la Grande finale</th>
                                        <th>1eme Position </th>
                                        <th>2eme Position </th>
                                    </tr>
                                       <tr>
                                           <td></td>
                                           <td> <?php   echo $_SESSION['GRQlf2']. " Champions de la coupe 3eme info" ?></td>
                                           <td> <?php   echo $_SESSION['GRQlf1']. " termine en 2e place "?></td>

                                       </tr>
       
                            </table>

      
   
  <?php  }
    else{
        $champion=rand(0,1);
        if($champion==0)
        { ?>
           <table class="tableau-style">
                                    <tr>
                                        <th>Resultat de la Grande finale</th>
                                        <th>1eme Position </th>
                                        <th>2eme Position </th>
                                    </tr>
                                       <tr>
                                           <td></td>
                                           <td> <?php  echo $_SESSION['GRQlf1']. " Champions de la coupe 3eme info " ?></td>
                                           <td> <?php    echo $_SESSION['GRQlf2']. " termine en 2e place "?></td>

                                       </tr>
       
                            </table>

            
          
            <?php  }
            else{  ?>
            <table class="tableau-style">
                                        <tr>
                                        <th>Resultat de la Grande finale</th>
                                        <th>1eme Position </th>
                                        <th>2eme Position </th>
                                    </tr>
                                       <tr>
                                           <td></td>
                                           <td> <?php   echo $_SESSION['GRQlf2']. " Champions de la coupe 3eme info" ?></td>
                                           <td> <?php    echo $_SESSION['GRQlf1']. " termine en 2e place "?></td>

                                       </tr>
       
                            </table>
          
           
           
                    <?php  }
                    
                    }
                }

                ?>

                </tbody>
                </form>
            </table>

       </div>
</div>




    
</body>
</html>