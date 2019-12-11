<?php

    include "API/vendor/autoload.php";
    use Stichoza\GoogleTranslate\GoogleTranslate;
    function language(){   
        if(isset($_GET['idioma']) && $_GET['idioma'] == 'en'){     
            $shortname = "en";
        }else{
            $shortname = "pt";
        }
        return $shortname;
    }

    $idioma = language();
    $tr = new GoogleTranslate($idioma);
session_start();



include_once ("php/conect.php");
ini_set( 'default_charset', 'utf-8');
header("Content-type: text/html; charset=utf-8"); 

$sql="SELECT * from home WHERE idhome=1";
$obj=mysqli_query ($conn, $sql);

$sqlt="SELECT * from trabalhos";
$trab=mysqli_query ($conn, $sqlt);

$sqlv="SELECT * from informes";
$avi=mysqli_query ($conn, $sqlv);

?>
<!DOCTYPE html>


<!DOCTYPE>
<html>
    <head>
        <title>Prog</title>
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
        </script>
    </head>
    
    <body>
        <div class="menu">
            <a  href="index.html"> <img src="icone.png" class="img-fluid" style="width: 40%; height: auto; margin-left: 3%; margin-top: 3%; margin-bottom: 1%;"> </a> 
            <a  href="index.html"> <img src="uni.png"  style="width: 13%; height: auto; margin-right: 5%;" class="rounded float-right" class="img-fluid"> </a> 
            
        </div> 
       
        <nav class="navbar navbar-expand-lg navbar-light bg-white" class="row-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
              <?php while ($rows_obj=mysqli_fetch_assoc($obj))  {?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">                
                    <li class="nav-item">
                        <a class="nav-link" href="informes.php"><?php echo $tr->translate('Informes');?></a>
                    </li>
                     
                    <li class="nav-item">
                        <a class="nav-link" href="coord.php"><?php echo $tr->translate('Coordenação');?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="prof.php"><?php echo $tr->translate('Professores Orientadores');?></a>
                    </li>
                     
                    <li class="nav-item">
                        <a class="nav-link" href="eventos.html"><?php echo $tr->translate('Eventos');?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="ciclo.html"><?php echo $tr->translate('Seminários e Palestras');?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="disc.html"><?php echo $tr->translate('Disciplinas');?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="aluno.php"><?php echo $tr->translate('Alunos');?></a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="publi.php"><?php echo $tr->translate('Publicações');?></a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white"  id="navbar-example3" style="max-width: 14rem; float:left; margin-top: 3%; margin-left: 3%; border-radius: none;  "   >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporte" aria-controls="navbarSupporte" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupporte">
                <nav class="nav flex-column">
                   
                    <a  class="card-header bg-transparent border-"><b><?php echo $tr->translate('Últimas Publicações');?></b></a>
                      <?php while ($rows_trab=mysqli_fetch_assoc($trab))  {?>
                        <a  class="card-header bg-transparent border-"style="color: #2d842d;" href="<?php echo $rows_trab['download']; ?>"> <?php echo $rows_trab['titulo'];?> </a>
                     <?php }?>
                        
            
                    <a  class="card-header bg-transparent border-"><b><?php echo $tr->translate('Avisos');?></b></a>
                      <?php while ($rows_avi=mysqli_fetch_assoc($avi))  {?>
                        <a  class="card-header bg-transparent border-"style="color: #2d842d;" href="<?php echo $rows_avi['download']; ?>"> <?php echo $rows_avi['titulo'];?> </a>
                     <?php }?>
                        
                        
                </nav>
             </div>
        </nav>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white"  id="navbar-example3" style="max-width: 14.5rem; float:right; margin-top: 3%; margin-right:2%; border-radius: none;  "   >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporteContent" aria-controls="navbarSupporteContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: white;">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupporteContent">
                <nav class="nav flex-column">
                    <a  class="card-header bg-transparent border-success"><?php echo $tr->translate('Mestrado Acadêmico');?></a>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="color: black;">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: black; border-radius: none;"><?php echo $tr->translate('Apresentação');?></a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color: black;  border-radius: none;"><?php echo $tr->translate('Sobre o Curso');?></a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false" style="color: black; border-radius: none;"><?php echo $tr->translate('Objetivo');?></a>
                    </div>
                </nav>
            </div>
        </nav>
        
        <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
            <div class="container" style="max-width: 59%;  margin-left: 20.7%; padding-top: 2%; margin-bottom: 3%;" >
                <div class="row">
                    <div class="col">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col" id="item-1"><?php echo $tr->translate('Apresentação');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <?php $texto = addslashes(strip_tags($rows_obj['apresentacao'])); ?>
                                                <p  class="text recuo">  <?php echo $tr->translate($texto);?></p>   
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col" id="item-1"><?php echo $tr->translate('Sobre o Curso');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <?php $texto = addslashes(strip_tags($rows_obj['sobre'])); ?>
                                                <p  class="text recuo">  <?php echo $tr->translate($texto);?></p>   
                                               
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col" id="item-4" ><?php echo $tr->translate('Objetivo');?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 
                                                <?php $texto = addslashes(strip_tags($rows_obj['objetivo'])); ?>
                                                <p  class="text recuo">  <?php echo $tr->translate($texto);?></p>   
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        
        <a id="subirTopo">
              <span class="oi oi-chevron-top"></span> TOPO <br> 
        </a>
        <div class="rodape">
            <nav class="navbar navbar-white bg-white">
                <span class="navbar">© 2014 Universidade Federal do Pampa - UNIPAMPA</span>
                <div style="color: #000; float: rigth; text-decoration:none;">
                    <a href="index.php?idioma=en" style="text-decoration:none; color: #000;">Inglês |</a>
                    <a href="index.php?idioma=pt" style="text-decoration:none; color: #000">Português</a>
                </div>
            </nav>
            
        </div>
    </body>
</html>

