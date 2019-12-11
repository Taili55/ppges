<?php
session_start();



include_once ("php/conect.php");
ini_set( 'default_charset', 'utf-8');
header("Content-type: text/html; charset=utf-8"); 

$sql="SELECT *,(SELECT nome FROM professor WHERE idProfessor=Professor_idProfessor) as 'orientador' from aluno WHERE semestre=2";
$obj=mysqli_query ($conn, $sql);

$sql1="SELECT *,(SELECT nome FROM professor WHERE idProfessor=Professor_idProfessor) as 'orientador' from aluno WHERE semestre=1";
$obj1=mysqli_query ($conn, $sql1);

?>

<!DOCTYPE>
<html>
    <head>
        <title>Alunos</title>
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
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white"  id="navbar-example3" style="max-width: 16.5rem; float:right; margin-top: 3%; margin-right:2%; border-radius: none;  "   >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporteContent" aria-controls="navbarSupporteContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupporteContent">
                <nav class="nav flex-column">
                    <a  class="card-header bg-transparent border-success">SEMESTRES</a>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="color: black;">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: black; border-radius: none;">1° Semestre</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color: black;  border-radius: none;">2° Semestre</a>
                        
                    </div>
                </nav>
            </div>
        </nav>
        
         <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
            <div class="container" style="max-width: 59%;  margin-left: 25.7%; padding-top: 2%; margin-bottom: 3%;" >
                <div class="row">
                    <div class="col">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <table class="table" style="border: none;" >
                                   
                                        <tr style="border: none;" >
                                          <th style="border: none;" id="item-1">1° Semestre</th>
                                        </tr>
                                   
                                    <tbody style="border: none;" >
                                        <tr>
                                            <td style="border: none;"> 
                                                <table class="table table-bordered">
                                                    <colgroup>
                                                        <col width="47">
                                                        <col width="291">
                                                        <col width="268">
                                                    </colgroup>
                                                    <tbody>
                                                        <tr>
                                                    
                                                            <?php while ($rows_obj1=mysqli_fetch_assoc($obj1))  {?>
                                                    
                                                            <td>
                                                                <p dir="ltr"><?php echo $rows_obj1['nome'];?></p>
                                                            </td>
                                                            <td>
                                                                <p dir="ltr"><?php echo $rows_obj1['orientador'];?></p>
                                                            </td>
                                                        </tr>
                                                    <?php }?>
                                                    </tbody>
                                                </table>  
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <table class="table">
                                    <thead>
                                        <tr style="border: none;">
                                          <th style="border: none;" scope="col" id="item-1">2° Semestre</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="border: none;"> 
                                                <table class="table table-bordered">
                                                    <colgroup>
                                                        <col width="47">
                                                        <col width="297">
                                                        <col width="262">
                                                    </colgroup>
                                                    <tbody>
                                                        <tr>
                                                            <?php while ($rows_obj=mysqli_fetch_assoc($obj))   {?>
                                                            <td>
                                                                <p dir="ltr"><?php echo $rows_obj['nome'];?></p>
                                                            </td>
                                                            <td>
                                                                <p dir="ltr"><?php echo $rows_obj['orientador'];?>  </p>
                                                            </td>
                                                        </tr>
                                                   
                                                    <?php }?>
                                                    </tbody>
                                                </table> 
                                            </td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        
        <br>
        <br>
        <br>
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
