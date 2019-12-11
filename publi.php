<?php
session_start();



include_once ("php/conect.php");
ini_set( 'default_charset', 'utf-8');
header("Content-type: text/html; charset=utf-8"); 

$sql="SELECT * from trabalhos ";
$obj=mysqli_query ($conn, $sql);



?>


<!DOCTYPE>
<html>
    <head>
        <title>Publicações</title>
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
        
        
        <div class="card text-center" style="width: 71%; margin-left: 25.7%; margin-top: 3%; ">
            <div class="card-header" style="border-bottom: 1px solid rgba(45, 132, 45, 0.31); ">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <?php while ($rows_obj=mysqli_fetch_assoc($obj))  {?>
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #2d842d">Trabalho</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #2d842d">Descrição</a>
                    </li>
                </ul>
            </div>
            
            <div class="card-body">
                <div class="tab-content" id="myTabContent" style="text-align: justify;">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h5 class="card-title" style="text-align: justify;"><?php echo $rows_obj['titulo'];?> </h5>
                        
                       <span class="oi oi-data-transfer-download"></span><a  class="card-header bg-transparent " style="color: #2d842d; border: none;" href="<?php echo $rows_obj['download'];?>"> <?php echo $rows_obj['titulo'];?>  </a>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p style="text-align: justify;" class="text recuo">  <?php echo $rows_obj['descricao'];?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br><br>
       <br>
       <br>
       <br><br>
       <br>
        
        
        <a id="subirTopo">
                ^ TOPO <br> 
        </a>
        <div class="rodape">
            <nav class="navbar navbar-white bg-white">
                <span class="navbar">© 2014 Universidade Federal do Pampa - UNIPAMPA</span>
            </nav>
        </div>
    </body>
</html>
