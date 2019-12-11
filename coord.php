<?php
session_start();
include_once ("php/conect.php");
ini_set( 'default_charset', 'utf-8');
header("Content-type: text/html; charset=utf-8"); 

$sql="SELECT * from coord WHERE cargo='Coordenador'";
$obj=mysqli_query ($conn, $sql);

$sql2="SELECT * from coord WHERE cargo='Coordenador Substituto'";
$obj2=mysqli_query ($conn, $sql2);

$sql3="SELECT * from coord WHERE cargo='Comissão de Pós-Graduação - Titular'";
$obj3=mysqli_query ($conn, $sql3);

$sql4="SELECT * from coord WHERE cargo='Comissão de Pós-Graduação - Suplente'";
$obj4=mysqli_query ($conn, $sql4);

$sql5="SELECT * from coord WHERE subcargo='Comissão de Bolsas'";
$obj5=mysqli_query ($conn, $sql5);

$sql6="SELECT * from coord WHERE subcargo='Comissão Acompanhamento da Produção Docente'";
$obj6=mysqli_query ($conn, $sql6);

$sql7="SELECT * from coord WHERE cargo='Secretário Acadêmico'";
$obj7=mysqli_query ($conn, $sql7);
?>
<!DOCTYPE>
<html>
    <head>
        <title>Coordenação</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript">
        jQuery(document).ready(function(){

        jQuery("#subirTopo").hide();

        jQuery('a#subirTopo').click(function () {
                 jQuery('body,html').animate({
                   scrollTop: 0
                 }, 800);
                return false;
           });

        jQuery(window).scroll(function () {
                 if (jQuery(this).scrollTop() > 1000) {
                    jQuery('#subirTopo').fadeIn();
                 } else {
                    jQuery('#subirTopo').fadeOut();
                 }
             });
        });
            
            
        function trocar(){
        var obj=document.getElementById('apresentacao');
        if(obj.className==''){
            obj.className='apresent';
        }
        }
        </script>
    </head>
    
    <body>
        <div class="menu">
            <a  href="index.html"> <img src="icone.png" class="img-fluid" style="width: 40%; height: auto; margin-left: 3%; margin-top: 3%; margin-bottom: 1%;"> </a> 
            <a  href="index.html"> <img src="uni.png"  style="width: 13%; height: auto; margin-right: 5%;" class="rounded float-right" class="img-fluid"> </a> 
            
        </div> 
       
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white"  id="navbar-example3" style="max-width: 18rem; float:left; margin-top: 3%; margin-left: 3%; border-radius: none;  "   >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporteContent" aria-controls="navbarSupporteContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupporteContent">
                <nav class="nav flex-column">
                   
                        <a  class="card-header bg-transparent border-success" style="color:  #000;" >MENU</a>
                        
                        <a class="nav-link" style="color:  #000;"  href="index.php">Home</a>
                      
                        <a class="nav-link" style="color:  #000;"  href="informes.php">Informes</a>
                     
                        <a class="nav-link" style="color:  #000;"  href="coord.html">Coordenação</a>
                      
                        <a class="nav-link" style="color:  #000;"  href="prof.php">Professores Orientadores</a>
                                            
                        <a class="nav-link" style="color:  #000;"  href="eventos.html">Eventos</a>
                       
                        <a class="nav-link" style="color:  #000;"  href="ciclo.php">Ciclo de Seminários e Palestras</a>
                    
                        <a class="nav-link" style="color:  #000;"  href="disc.html">Disciplinas do Mestrado</a>
                        
                        <a class="nav-link" style="color:  #000;"  href="aluno.php">Alunos</a>
                      
                        <a class="nav-link" style="color:  #000;" href="publi.php">Publicações </a>
                        
                        
                </nav>
            </div>
        </nav>
        

        <div class="card" style="width: 40%; float: left; margin-left: 1.3%; margin-right: 1%; margin-top: 3%;">
           <?php while ($rows_obj=mysqli_fetch_assoc($obj))  {?> 
            <div class="card-body">
                <h5 class="card-title">Coordenador: </h5>
                <ul class="card-text">
                    <li><?php echo $rows_obj['nome'];?> </li>
                </ul>  
                <hr>
                <p class="card-text" style="margin-left: 3%;"><span class="oi oi-paperclip"></span> E-mail: <?php echo $rows_obj['email'];?></p>
            </div>
        </div>
           <?php }?>
        <div class="card" style="width: 30%; float: none; margin-left: 2%; margin-top: 3%;" >
           <?php while ($rows_obj2=mysqli_fetch_assoc($obj2))  {?> 
            <div class="card-body">
                <h5 class="card-title">Coordenador Substituto:</h5>
                <ul class="card-text">
                    <li><?php echo $rows_obj2['nome'];?> </li>
                </ul>  
                <hr>
                <p class="card-text" style="margin-left: 3%;"><span class="oi oi-paperclip"></span> E-mail: <?php echo $rows_obj2['email'];?></p>
            </div>
        </div>
           <?php }?>
        <div class="card" style="width: 71%; margin-left: 25.7%; margin-top: 1%;" >
            <div class="card-body">
                <h5 class="card-title">Comissão de Pós-Graduação:</h5>
                <h6 class="card-subtitle mb-2 text-muted">Membros Titulares: </h6>
                <hr>
                <table class="table table-borderless">
                    <?php while ($rows_obj3=mysqli_fetch_assoc($obj3))  {?>
                        <tr>
                            <td>
                                <ul  class="card-text">
                                    <li><?php echo $rows_obj3['nome'];?> </li>
                                </ul> 
                            </td>
                            <td class="text recuo">
                                <span class="oi oi-paperclip"></span> E-mail: <?php echo $rows_obj3['email'];?> 
                            </td>
                        </tr>
                    <?php }?>
                </table>
                
                <br><br>
                <h6 class="card-subtitle mb-2 text-muted">Membros Suplentes: </h6>
                <hr>
                <table  class="table table-borderless">
                     <?php while ($rows_obj4=mysqli_fetch_assoc($obj4))  {?>
                    <tr>
                        <td>
                            <ul  class="card-text">
                                <li><?php echo $rows_obj4['nome'];?></li>
                            </ul> 
                        </td>
                        <td class="text recuo">
                            <span class="oi oi-paperclip"></span> E-mail: <?php echo $rows_obj4['email'];?> <br>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </div>
        </div>
          
        <div class="card" style="width: 30%; float: left; margin-left: 25.7%; margin-right: 1%; margin-top: 1%;" >
            <div class="card-body">
                <h5 class="card-title">Comissão de Bolsas:</h5>
                <hr>
                <?php while ($rows_obj5=mysqli_fetch_assoc($obj5))  {?>
                    <ul class="card-text">
                        <li><?php echo $rows_obj5['nome'];?></li>
                    </ul> 
                <?php }?>
            </div>
        </div>

        <div class="card" style="width: 40%; float: none; margin-left: 2%; margin-top: 1%;" >
            <div class="card-body">
                <h5 class="card-title">Comissão Acompanhamento da Produção Docente:</h5>
                <hr>
                <?php while ($rows_obj6=mysqli_fetch_assoc($obj6))  {?>
                    <ul class="card-text">
                        <li><?php echo $rows_obj6['nome'];?></li>
                    </ul> 
               <?php }?>
                    <ul class="card-text">
                      <br>
                    </ul> 
            </div>
        </div>
        <div class="card" style="width: 71%; float: none; margin-left: 25.7%; margin-top: 1%; margin-bottom: 3%; " >
                    <div class="card-body">
                        <h5 class="card-title">Secretário Acadêmico:</h5>
                        <?php while ($rows_obj7=mysqli_fetch_assoc($obj7))  {?>
                            <ul class="card-text">
                                <li><?php echo $rows_obj7['nome'];?> </li>
                            </ul>  
                            
                            <hr>
                            <p class="card-text" style="margin-left: 3%;"><span class="oi oi-paperclip"></span> E-mail: <?php echo $rows_obj7['email'];?> </p>
                        <?php }?>
                    </div>
        </div>
        
            
        
      
        <a id="subirTopo">
                ^ TOPO <br> 
        </a>
        <div class="rodape" style="z-index: 5000;">
            <nav class="navbar navbar-white bg-white">
                <span class="navbar">© 2014 Universidade Federal do Pampa - UNIPAMPA</span>
            </nav>
        </div>
    </body>
</html>