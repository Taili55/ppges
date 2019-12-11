<?php
session_start();



include_once ("php/conect.php");
ini_set( 'default_charset', 'utf-8');
header("Content-type: text/html; charset=utf-8"); 

$sql="SELECT * from ciclo ";
$obj=mysqli_query ($conn, $sql);



?>

<!DOCTYPE>
<html>
    <head>
        <title>Palestras e Seminários</title>
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
                        
                        <a class="nav-link" style="color:  #000;"  href="index.html">Home</a>
                      
                        <a class="nav-link" style="color:  #000;"  href="informes.html">Informes</a>
                     
                        <a class="nav-link" style="color:  #000;"  href="coord.html">Coordenação</a>
                      
                        <a class="nav-link" style="color:  #000;"  href="prof.html">Professores Orientadores</a>
                                            
                        <a class="nav-link" style="color:  #000;"  href="eventos.html">Eventos</a>
                       
                        <a class="nav-link" style="color:  #000;"  href="ciclo.html">Ciclo de Seminários e Palestras</a>
                    
                        <a class="nav-link" style="color:  #000;"  href="disc.html">Disciplinas do Mestrado</a>
                        
                        <a class="nav-link" style="color:  #000;"  href="aluno.html">Alunos</a>
                      
                        <a class="nav-link" style="color:  #000;" href="publi.html">Publicações </a>
                        
                </nav>
            </div>
        </nav>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white"  id="navbar-example3" style="max-width: 16.5rem; float:right; margin-top: 3%; margin-right:2%; border-radius: none;  "   >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporteContent" aria-controls="navbarSupporteContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupporteContent">
                <nav class="nav flex-column">
                    <a  class="card-header bg-transparent border-success">SEMINÁRIOS E PALESTRAS</a>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="color: black;">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="color: black; border-radius: none;">Palestras</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color: black;  border-radius: none;">Seminários</a>
                    </div>
                </nav>
            </div>
        </nav>
        
         <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
            <div class="container" style="max-width: 51.5%;  margin-left: 25.7%; padding-top: 2%; margin-bottom: 3%;" >
                <div class="row">
                    <div class="col">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <table class="table">
                                   
                                        <tr  >
                                          <th  id="item-1">Palestras</th>
                                        </tr>
                                   
                                    <tbody >
                                        <tr>
                                            <td > 
                                               <div class="card text-center" style="width: 100%; margin-left: 1%; margin-top: 3%; border: none; ">
                                                <div class="card-header" style="border-bottom: 1px solid rgba(45, 132, 45, 0.31); background-color: white;">
                                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #2d842d">Palestra</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #2d842d">Descrição</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color: #2d842d">Informações</a>
                                                        </li>
                                                    </ul>
                                                </div>
            
                                                    <div class="card-body">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                                <h5 class="card-title" style="text-align: justify;">Palestras do PPGES 2019/01</h5>
                                                                <p class="card-text" style=" text-align: justify;">O Programa de Pós-Graduação em Engenharia de Software (PPGES), integrado com o projeto de extensão UniHacker.club, divulga para os interessados uma sequência palestras sobre temas de pesquisa conduzidos pelos alunos do curso de mestrado profissional em Engenharia de Software, vinculado com a Universidade Federal do Pampa (Unipampa), no campus de Alegrete-RS. O seminário irá ocorrer na mesma semana das defesas de TCC e de estágio dos cursos de Ciência da Computação e Engenharia de Software. As palestras ocorrerão pela parte da tarde, entre os dias 24/06 e 28/06, no DTIC Sala 201. As apresentações são abertas ao público externo e caracterizam uma oportunidade para a comunidade conhecer os projetos de pesquisa conduzidos pelos orientadores. Também serão entregues certificados para os participantes.</p>



                                                            </div>
                                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                                <p style="text-align: justify;" class="text recuo">  A agricultura desempenha um papel importante na sociedade, sendo uma das principais fontes de alimentos do mundo. Com a população aumentando cada vez mais, se faz necessário aumentar a produtividade e a exportação de alimentos agrícolas. Para auxiliar a produção e o rendimento das lavouras, a agricultura de precisão faz uso de tecnologias para apoiar o produtor, tendo como objetivo maior produtividade e qualidade das mercadorias agrícolas. Essas tecnologias incluem sensoriamento remoto, na qual utiliza-se satélites, drones, veículos aéreos não tripulados, assim como robôs automatizados, câmeras digitais e smartphones. Um dos problemas encontrados pelos agricultores são as doenças que afetam plantas, a não detecção precoce dessas doenças pode resultar em pequenos ou grandes danos na produção final de uma plantação. Neste trabalho, apresentamos uma revisão de estudos que utilizam processamento digital de imagens e redes neurais para a detecção de doenças em plantas.
                                                                </p>
                                                            </div>
                                                            <div style="text-align: justify;" class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                                <span class="oi oi-person"></span> <b>Palestrante: </b> Luiz Daniel Garay Trindade. 
                                                                <br><br>
                                                                <span class="oi oi-people"></span> <b> Orientador:</b> Fábio Paulo Basso 
                                                                <br><br>
                                                                <span class="oi oi-pie-chart"></span> <b>Área da Pesquisa: </b> Processamento de Imagens 
                                                                <br><br>
                                                                <span class="oi oi-pin"></span><b>Tema da Pesquisa: </b> Processamento de imagens na agricultura de precisão
                                                                <br><br>
                                                                <span class="oi oi-calendar"></span> <b>Hora e Data:</b>  Segunda-feira dia 24/06, às 17:30
                                                                <br><br>
                                                                <span class="oi oi-map-marker"></span><b> Local:</b> DTIC, Sala 201
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                 <div class="card text-center" style="width: 100%; margin-left: 1%; margin-top: 3%; border: none; ">
                                                <div class="card-header" style="border-bottom: 1px solid rgba(45, 132, 45, 0.31); background-color: white;">
                                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home1-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" style="color: #2d842d">Palestra</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile1-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" style="color: #2d842d">Descrição</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false" style="color: #2d842d">Informações</a>
                                                        </li>
                                                    </ul>
                                                </div>
            
                                                    <div class="card-body">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home1-tab">
                                                                <h5 class="card-title" style="text-align: justify;">Palestras do PPGES 2019/01</h5>
                                                                <p class="card-text" style=" text-align: justify;">O Programa de Pós-Graduação em Engenharia de Software (PPGES), integrado com o projeto de extensão UniHacker.club, divulga para os interessados uma sequência palestras sobre temas de pesquisa conduzidos pelos alunos do curso de mestrado profissional em Engenharia de Software, vinculado com a Universidade Federal do Pampa (Unipampa), no campus de Alegrete-RS. O seminário irá ocorrer na mesma semana das defesas de TCC e de estágio dos cursos de Ciência da Computação e Engenharia de Software. As palestras ocorrerão pela parte da tarde, entre os dias 24/06 e 28/06, no DTIC Sala 201. As apresentações são abertas ao público externo e caracterizam uma oportunidade para a comunidade conhecer os projetos de pesquisa conduzidos pelos orientadores. Também serão entregues certificados para os participantes.</p>



                                                            </div>
                                                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
                                                                <p style="text-align: justify;" class="text recuo">  A agricultura desempenha um papel importante na sociedade, sendo uma das principais fontes de alimentos do mundo. Com a população aumentando cada vez mais, se faz necessário aumentar a produtividade e a exportação de alimentos agrícolas. Para auxiliar a produção e o rendimento das lavouras, a agricultura de precisão faz uso de tecnologias para apoiar o produtor, tendo como objetivo maior produtividade e qualidade das mercadorias agrícolas. Essas tecnologias incluem sensoriamento remoto, na qual utiliza-se satélites, drones, veículos aéreos não tripulados, assim como robôs automatizados, câmeras digitais e smartphones. Um dos problemas encontrados pelos agricultores são as doenças que afetam plantas, a não detecção precoce dessas doenças pode resultar em pequenos ou grandes danos na produção final de uma plantação. Neste trabalho, apresentamos uma revisão de estudos que utilizam processamento digital de imagens e redes neurais para a detecção de doenças em plantas.
                                                                </p>
                                                            </div>
                                                            <div style="text-align: justify;" class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
                                                                <span class="oi oi-person"></span> <b>Palestrante: </b> Luiz Daniel Garay Trindade. 
                                                                <br><br>
                                                                <span class="oi oi-people"></span> <b> Orientador:</b> Fábio Paulo Basso 
                                                                <br><br>
                                                                <span class="oi oi-pie-chart"></span> <b>Área da Pesquisa: </b> Processamento de Imagens 
                                                                <br><br>
                                                                <span class="oi oi-pin"></span><b>Tema da Pesquisa: </b> Processamento de imagens na agricultura de precisão
                                                                <br><br>
                                                                <span class="oi oi-calendar"></span> <b>Hora e Data:</b>  Segunda-feira dia 24/06, às 17:30
                                                                <br><br>
                                                                <span class="oi oi-map-marker"></span><b>Local:</b> DTIC, Sala 201
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                 <div class="card text-center" style="width: 100%; margin-left: 1%; margin-top: 3%; border: none; ">
                                                <div class="card-header" style="border-bottom: 1px solid rgba(45, 132, 45, 0.31); background-color: white;">
                                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true" style="color: #2d842d">Palestra</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false" style="color: #2d842d">Descrição</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false" style="color: #2d842d">Informações</a>
                                                        </li>
                                                    </ul>
                                                </div>
            
                                                    <div class="card-body">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                                                                <h5 class="card-title" style="text-align: justify;">Palestras do PPGES 2019/01</h5>
                                                                <p class="card-text" style=" text-align: justify;">O Programa de Pós-Graduação em Engenharia de Software (PPGES), integrado com o projeto de extensão UniHacker.club, divulga para os interessados uma sequência palestras sobre temas de pesquisa conduzidos pelos alunos do curso de mestrado profissional em Engenharia de Software, vinculado com a Universidade Federal do Pampa (Unipampa), no campus de Alegrete-RS. O seminário irá ocorrer na mesma semana das defesas de TCC e de estágio dos cursos de Ciência da Computação e Engenharia de Software. As palestras ocorrerão pela parte da tarde, entre os dias 24/06 e 28/06, no DTIC Sala 201. As apresentações são abertas ao público externo e caracterizam uma oportunidade para a comunidade conhecer os projetos de pesquisa conduzidos pelos orientadores. Também serão entregues certificados para os participantes.</p>



                                                            </div>
                                                            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                                                                <p style="text-align: justify;" class="text recuo">  A agricultura desempenha um papel importante na sociedade, sendo uma das principais fontes de alimentos do mundo. Com a população aumentando cada vez mais, se faz necessário aumentar a produtividade e a exportação de alimentos agrícolas. Para auxiliar a produção e o rendimento das lavouras, a agricultura de precisão faz uso de tecnologias para apoiar o produtor, tendo como objetivo maior produtividade e qualidade das mercadorias agrícolas. Essas tecnologias incluem sensoriamento remoto, na qual utiliza-se satélites, drones, veículos aéreos não tripulados, assim como robôs automatizados, câmeras digitais e smartphones. Um dos problemas encontrados pelos agricultores são as doenças que afetam plantas, a não detecção precoce dessas doenças pode resultar em pequenos ou grandes danos na produção final de uma plantação. Neste trabalho, apresentamos uma revisão de estudos que utilizam processamento digital de imagens e redes neurais para a detecção de doenças em plantas.
                                                                </p>
                                                            </div>
                                                            <div style="text-align: justify;" class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                                                                <span class="oi oi-person"></span> <b>Palestrante: </b> Luiz Daniel Garay Trindade. 
                                                                <br><br>
                                                                <span class="oi oi-people"></span> <b> Orientador:</b> Fábio Paulo Basso 
                                                                <br><br>
                                                                <span class="oi oi-pie-chart"></span> <b>Área da Pesquisa: </b> Processamento de Imagens 
                                                                <br><br>
                                                                <span class="oi oi-pin"></span><b>Tema da Pesquisa: </b> Processamento de imagens na agricultura de precisão
                                                                <br><br>
                                                                <span class="oi oi-calendar"></span> <b>Hora e Data:</b>  Segunda-feira dia 24/06, às 17:30
                                                                <br><br>
                                                                <span class="oi oi-map-marker"></span><b>Local:</b> DTIC, Sala 201
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <table class="table">
                                   
                                        <tr  >
                                          <th  id="item-1">Seminários</th>
                                        </tr>
                                   
                                    <tbody >
                                        <tr>
                                            <td > 
                                                <div class="card text-center" style="width: 100%; margin-left: 1%; margin-top: 3%; border: none; ">
                                                <div class="card-header" style="border-bottom: 1px solid rgba(45, 132, 45, 0.31); background-color: white;">
                                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color: #2d842d">Seminário</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color: #2d842d">Descrição</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color: #2d842d">Informações</a>
                                                        </li>
                                                    </ul>
                                                </div>
            
                                                    <div class="card-body">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                                <h5 class="card-title" style="text-align: justify;">PPGES 2019/01</h5>
                                                                <p class="card-text" style=" text-align: justify;">O Programa de Pós-Graduação em Engenharia de Software (PPGES), integrado com o projeto de extensão UniHacker.club, divulga para os interessados uma sequência palestras sobre temas de pesquisa conduzidos pelos alunos do curso de mestrado profissional em Engenharia de Software, vinculado com a Universidade Federal do Pampa (Unipampa), no campus de Alegrete-RS. O seminário irá ocorrer na mesma semana das defesas de TCC e de estágio dos cursos de Ciência da Computação e Engenharia de Software. As palestras ocorrerão pela parte da tarde, entre os dias 24/06 e 28/06, no DTIC Sala 201. As apresentações são abertas ao público externo e caracterizam uma oportunidade para a comunidade conhecer os projetos de pesquisa conduzidos pelos orientadores. Também serão entregues certificados para os participantes.</p>



                                                            </div>
                                                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                                <p style="text-align: justify;" class="text recuo">  A agricultura desempenha um papel importante na sociedade, sendo uma das principais fontes de alimentos do mundo. Com a população aumentando cada vez mais, se faz necessário aumentar a produtividade e a exportação de alimentos agrícolas. Para auxiliar a produção e o rendimento das lavouras, a agricultura de precisão faz uso de tecnologias para apoiar o produtor, tendo como objetivo maior produtividade e qualidade das mercadorias agrícolas. Essas tecnologias incluem sensoriamento remoto, na qual utiliza-se satélites, drones, veículos aéreos não tripulados, assim como robôs automatizados, câmeras digitais e smartphones. Um dos problemas encontrados pelos agricultores são as doenças que afetam plantas, a não detecção precoce dessas doenças pode resultar em pequenos ou grandes danos na produção final de uma plantação. Neste trabalho, apresentamos uma revisão de estudos que utilizam processamento digital de imagens e redes neurais para a detecção de doenças em plantas.
                                                                </p>
                                                            </div>
                                                            <div style="text-align: justify;" class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                                                <span class="oi oi-person"></span> <b>Palestrante: </b> Luiz Daniel Garay Trindade. 
                                                                <br><br>
                                                                <span class="oi oi-people"></span> <b> Orientador:</b> Fábio Paulo Basso 
                                                                <br><br>
                                                                <span class="oi oi-pie-chart"></span> <b>Área da Pesquisa: </b> Processamento de Imagens 
                                                                <br><br>
                                                                <span class="oi oi-pin"></span><b>Tema da Pesquisa: </b> Processamento de imagens na agricultura de precisão
                                                                <br><br>
                                                                <span class="oi oi-calendar"></span> <b>Hora e Data:</b>  Segunda-feira dia 24/06, às 17:30
                                                                <br><br>
                                                                <span class="oi oi-map-marker"></span><b>Local:</b> DTIC, Sala 201
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                 <div class="card text-center" style="width: 100%; margin-left: 1%; margin-top: 3%; border: none; ">
                                                <div class="card-header" style="border-bottom: 1px solid rgba(45, 132, 45, 0.31); background-color: white;">
                                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home1-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true" style="color: #2d842d">Seminário</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile1-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile1" aria-selected="false" style="color: #2d842d">Descrição</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact1-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false" style="color: #2d842d">Informações</a>
                                                        </li>
                                                    </ul>
                                                </div>
            
                                                    <div class="card-body">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home1-tab">
                                                                <h5 class="card-title" style="text-align: justify;">PPGES 2019/01</h5>
                                                                <p class="card-text" style=" text-align: justify;">O Programa de Pós-Graduação em Engenharia de Software (PPGES), integrado com o projeto de extensão UniHacker.club, divulga para os interessados uma sequência palestras sobre temas de pesquisa conduzidos pelos alunos do curso de mestrado profissional em Engenharia de Software, vinculado com a Universidade Federal do Pampa (Unipampa), no campus de Alegrete-RS. O seminário irá ocorrer na mesma semana das defesas de TCC e de estágio dos cursos de Ciência da Computação e Engenharia de Software. As palestras ocorrerão pela parte da tarde, entre os dias 24/06 e 28/06, no DTIC Sala 201. As apresentações são abertas ao público externo e caracterizam uma oportunidade para a comunidade conhecer os projetos de pesquisa conduzidos pelos orientadores. Também serão entregues certificados para os participantes.</p>



                                                            </div>
                                                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile1-tab">
                                                                <p style="text-align: justify;" class="text recuo">  A agricultura desempenha um papel importante na sociedade, sendo uma das principais fontes de alimentos do mundo. Com a população aumentando cada vez mais, se faz necessário aumentar a produtividade e a exportação de alimentos agrícolas. Para auxiliar a produção e o rendimento das lavouras, a agricultura de precisão faz uso de tecnologias para apoiar o produtor, tendo como objetivo maior produtividade e qualidade das mercadorias agrícolas. Essas tecnologias incluem sensoriamento remoto, na qual utiliza-se satélites, drones, veículos aéreos não tripulados, assim como robôs automatizados, câmeras digitais e smartphones. Um dos problemas encontrados pelos agricultores são as doenças que afetam plantas, a não detecção precoce dessas doenças pode resultar em pequenos ou grandes danos na produção final de uma plantação. Neste trabalho, apresentamos uma revisão de estudos que utilizam processamento digital de imagens e redes neurais para a detecção de doenças em plantas.
                                                                </p>
                                                            </div>
                                                            <div style="text-align: justify;" class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact1-tab">
                                                                <span class="oi oi-person"></span> <b>Palestrante: </b> Luiz Daniel Garay Trindade. 
                                                                <br><br>
                                                                <span class="oi oi-people"></span> <b> Orientador:</b> Fábio Paulo Basso 
                                                                <br><br>
                                                                <span class="oi oi-pie-chart"></span> <b>Área da Pesquisa: </b> Processamento de Imagens 
                                                                <br><br>
                                                                <span class="oi oi-pin"></span><b>Tema da Pesquisa: </b> Processamento de imagens na agricultura de precisão
                                                                <br><br>
                                                                <span class="oi oi-calendar"></span> <b>Hora e Data:</b>  Segunda-feira dia 24/06, às 17:30
                                                                <br><br>
                                                                <span class="oi oi-map-marker"></span><b>Local:</b> DTIC, Sala 201
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                
                                                 <div class="card text-center" style="width: 100%; margin-left: 1%; margin-top: 3%; border: none; ">
                                                <div class="card-header" style="border-bottom: 1px solid rgba(45, 132, 45, 0.31); background-color: white;">
                                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="true" style="color: #2d842d">Seminário</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="profile2-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile2" aria-selected="false" style="color: #2d842d">Descrição</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" id="contact2-tab" data-toggle="tab" href="#contact2" role="tab" aria-controls="contact2" aria-selected="false" style="color: #2d842d">Informações</a>
                                                        </li>
                                                    </ul>
                                                </div>
            
                                                    <div class="card-body">
                                                        <div class="tab-content" id="myTabContent">
                                                            <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                                                                <h5 class="card-title" style="text-align: justify;"> PPGES 2019/01</h5>
                                                                <p class="card-text" style=" text-align: justify;">O Programa de Pós-Graduação em Engenharia de Software (PPGES), integrado com o projeto de extensão UniHacker.club, divulga para os interessados uma sequência palestras sobre temas de pesquisa conduzidos pelos alunos do curso de mestrado profissional em Engenharia de Software, vinculado com a Universidade Federal do Pampa (Unipampa), no campus de Alegrete-RS. O seminário irá ocorrer na mesma semana das defesas de TCC e de estágio dos cursos de Ciência da Computação e Engenharia de Software. As palestras ocorrerão pela parte da tarde, entre os dias 24/06 e 28/06, no DTIC Sala 201. As apresentações são abertas ao público externo e caracterizam uma oportunidade para a comunidade conhecer os projetos de pesquisa conduzidos pelos orientadores. Também serão entregues certificados para os participantes.</p>



                                                            </div>
                                                            <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile2-tab">
                                                                <p style="text-align: justify;" class="text recuo">  A agricultura desempenha um papel importante na sociedade, sendo uma das principais fontes de alimentos do mundo. Com a população aumentando cada vez mais, se faz necessário aumentar a produtividade e a exportação de alimentos agrícolas. Para auxiliar a produção e o rendimento das lavouras, a agricultura de precisão faz uso de tecnologias para apoiar o produtor, tendo como objetivo maior produtividade e qualidade das mercadorias agrícolas. Essas tecnologias incluem sensoriamento remoto, na qual utiliza-se satélites, drones, veículos aéreos não tripulados, assim como robôs automatizados, câmeras digitais e smartphones. Um dos problemas encontrados pelos agricultores são as doenças que afetam plantas, a não detecção precoce dessas doenças pode resultar em pequenos ou grandes danos na produção final de uma plantação. Neste trabalho, apresentamos uma revisão de estudos que utilizam processamento digital de imagens e redes neurais para a detecção de doenças em plantas.
                                                                </p>
                                                            </div>
                                                            <div style="text-align: justify;" class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact2-tab">
                                                                <span class="oi oi-person"></span> <b>Palestrante: </b> Luiz Daniel Garay Trindade. 
                                                                <br><br>
                                                                <span class="oi oi-people"></span> <b> Orientador:</b> Fábio Paulo Basso 
                                                                <br><br>
                                                                <span class="oi oi-pie-chart"></span> <b>Área da Pesquisa: </b> Processamento de Imagens 
                                                                <br><br>
                                                                <span class="oi oi-pin"></span><b>Tema da Pesquisa: </b> Processamento de imagens na agricultura de precisão
                                                                <br><br>
                                                                <span class="oi oi-calendar"></span> <b>Hora e Data:</b>  Segunda-feira dia 24/06, às 17:30
                                                                <br><br>
                                                                <span class="oi oi-map-marker"></span><b>Local:</b> DTIC, Sala 201
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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