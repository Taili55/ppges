<?php
session_start();

	if(!empty($_SESSION['idAdm'])){
		
	}
	else{
		
		$_SESSION['msg'] = "Email ou senha Incorretos";
		header("Location: login.php");	
	}
include_once ("php/conect.php");
header("Content-type: text/html; charset=utf-8"); 

$sql="SELECT * from professor";
$Home=mysqli_query ($conn, $sql);
?>

<!DOCTYPE>
<html>
    <head>
        <title>Adm Coord</title>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="open-iconic-master/font/css/open-iconic-bootstrap.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="ckeditor/ckeditor.js"></script>
        
    </head>
    
    <body>
        <div class="menu" style="height:10%">
            <br>
            <a  href="admin.php" style="font-size:24px; color: black; margin-left: 3%; text-decoration:none; "> PPGES ADMINISTRATIVO </a> 
            <a style="margin-left:65%; margin-top: -2%;" href="sair.php" class="btn btn-success " role="button"> <span class="oi oi-account-login"></span> Sair</a>
        </div> 
       
        
        <nav class="navbar navbar-expand-lg navbar-light bg-white"  id="navbar-example3" style="max-width: 18rem; float:left; margin-top: 3%; margin-left: 3%; border-radius: none;  "   >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupporteContent" aria-controls="navbarSupporteContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            
            <div class="collapse navbar-collapse" id="navbarSupporteContent">
                <nav class="nav flex-column">
                   
                        <a  class="card-header bg-transparent border-success" style="color:  #000;" >MENU</a>
                        
                        <a class="nav-link" style="color:  #000;"  href="admin.php">Home</a>
                      
                        <a class="nav-link" style="color:  #000;"  href="info_edit.php">Informes</a>
                     
                        <a class="nav-link" style="color:  #000;"  href="coord_edit.php">Coordenação</a>
                      
                        <a class="nav-link" style="background-color:rgba(185, 182, 182, 0.42) ; color:  #000;"  href="prof_edit.php">Professores Orientadores</a>
                                            
                        <a class="nav-link" style="color:  #000;"  href="event_edit.php">Eventos</a>
                       
                        <a class="nav-link" style="color:  #000;"  href="ciclo_edit.php">Ciclo de Seminários e Palestras</a>
                    
                        <a class="nav-link" style="color:  #000;"  href="disc_edit.php">Disciplinas do Mestrado</a>
                        
                        <a class="nav-link" style="color:  #000;"  href="aluno_edit.php">Alunos</a>
                      
                        <a class="nav-link" style="color:  #000;" href="publi_edit.php">Publicações </a>
                    
                        
                        
                </nav>
            </div>
        </nav>
        
        
        <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
            <div class="container" style="max-width: 72.5%;  margin-left: 25.7%; padding-top: 2%; margin-bottom: 3%;" > 
                <table class="table table-hover" >
                    <thead>
                        <th>#</th>  
						<th>Nome</th>
                        <th>Opções </th>
                        <th> 
                            <button type="button" style="margin-left:30%;"  class="btn btn-success" data-toggle="modal" data-target="#confirmas"><span class="oi oi-plus"> </span>  Adicionar</button> 
                            <div class="modal fade" id="confirmas" role="dialog ">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content modal-lg">
                                        <div class="modal-body">
                                            <form method="POST" action="php/result_prof.php">
                                                <div class="form-group">                    
                                                    <label><b>Nome: </b></label>
                                                    <input type="text" style="width:95%" name="nome" placeholder="Digite o nome do Professor" class="form-control">
                                                    
                                                    <label><b>Email: </b></label>
                                                    <input type="text" name="email" style="width:95%" placeholder="Digite o email do Professor" class="form-control">
                                                    
                                                    <label><b>Currículo Lattes: </b></label>
                                                    <input type="text" name="lattes" style="width:95%" placeholder="Digite o Currículo Lattes do Professor" class="form-control">
                                                    
                                                    
                                                    <label><b>Área de Pesquisa: </b></label>
                                                    <textarea type="text"  name="area"  style="width:95%" placeholder="Digite a Área" class="form-control"> </textarea>
                                                    
                                                    
                                                    <div class="form-group">
                                                            <label><b>Descrição: </b></label>
                                                            <textarea type="text"  style="width:95%"  name="descricao" id="apresentacao" placeholder="Digite a descrição" class="form-control" name="tx_mensagem"class="formbutton" id="tx_mensagem"></textarea>	
                                                            <script>
                                                                CKEDITOR.replace( 'descricao' );
                                                            </script>

                                                        </div>
                                                </div>
                                                
                                                <br><br>
                                                <center>
                                                    <input type="submit" name="btnCadUsuario" value="Cadastrar" class="btn btn-success"> 
                                                              
                                                    <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                                </center>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                                       
                        </th>
                    </thead>
                    
                    <tbody>
                        <?php while ($rows_Home=mysqli_fetch_assoc($Home)) {?>
                        <tr>
                            <td><?php echo $rows_Home['idProfessor'];?></td>
                            <td><?php echo $rows_Home['nome'];?></td>
                            <td>  
                                <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#confirm<?php echo $rows_Home['idProfessor']; ?>"><span class="oi oi-pencil"></span></button> 
                                                
                                <div class="modal fade" id="confirm<?php echo $rows_Home['idProfessor']; ?>" role="dialog ">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content ">
                                            <div class="modal-body">
                                                <form method="POST" action="php/edit_Prof.php">
                                                    <div class="form-group">
                                                                    
                                                        <label><b>Nome: </b></label>
                                                        <input type="text" style="width:95%" name="nome"   value="<?php echo $rows_Home['nome']; ?>" placeholder="Digite o nome do Professor" class="form-control">
                                                               
                                                                    
                                                        <label><b>Email: </b></label>
                                                        <input type="text" name="email" style="width:95%" value=" <?php echo $rows_Home['email']; ?>" placeholder="Digite o nome do Professor" class="form-control">
                                                        
                                                        <label><b>Curículo Lattes: </b></label>
                                                        <input type="text" name="lattes" style="width:95%" value=" <?php echo $rows_Home['lattes']; ?>" placeholder="Digite o nome do Professor" class="form-control">
                                                                
                                                                 
                                                        <div class="form-group">
                                                            <label><b>Área de Pesquisa: </b></label>
                                                            <textarea type="text"  name="area" id="apresentacao" placeholder="Digite a descrição" class="form-control" ><?php echo $rows_Home['area']; ?></textarea>	
                                                            

                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label><b>Descrição: </b></label>
                                                            <textarea type="text"  name="descricaoo" placeholder="Digite a descrição" class="form-control" name="tx_mensagem"class="formbutton" id="tx_mensagem"><?php echo $rows_Home['descricao']; ?></textarea>	
                                                            <script>
                                                                CKEDITOR.replace( 'descricaoo' );
                                                            </script>

                                                        </div>
                                                                        
                                                        
                                                    </div>
                                        
                                                    <br><br>
                                                    <center>
                                                        <input type="hidden" name="idProfessor" value="<?php echo $rows_Home['idProfessor']; ?>">
                                                                        
                                                        <input type="submit" value="Alterar " class="btn btn-success btn">
                                                              
                                                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                                    </center>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                              
                                <button type="button"  class="btn btn-default " data-toggle="modal" data-target="#confirma<?php echo $rows_Home['idProfessor']; ?>"><span class="oi oi-spreadsheet"></span></button> 
                                                
                                <div class="modal fade" id="confirma<?php echo $rows_Home['idProfessor']; ?>" role="dialog ">
                                    <div class="modal-dialog modal-lg ">
                                        <div class="modal-content modal-lg">
                                            <div class="modal-body">
                                                <h4>Nome: </h4>
                                                <p><?php echo $rows_Home['nome']; ?></p>      
                                                <h4>Email: </h4>
                                                <p><?php echo $rows_Home['email']; ?></p>
                                                <h4>Currículo Lattes: </h4>
                                                <p><?php echo $rows_Home['lattes']; ?></p>
                                                <h4>Área de Pesquisa: </h4>
                                                <p><?php echo $rows_Home['area']; ?></p>
                                                <h4>Descrição: </h4>
                                                <p><?php echo $rows_Home['descricao']; ?></p>
                                                <br><br>
                                                <center>
                                                                        
                                                    <button type="button" data-dismiss="modal" class="btn btn-  default">Voltar</button>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirme<?php echo $rows_Home['idProfessor']; ?>  "><span class="oi oi-trash" ></span> </button>
                                <div class="modal fade" id="confirme<?php echo $rows_Home['idProfessor']; ?>" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p> Deseja realmente excluir <?php echo $rows_Home['nome']; ?> ? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-sm"><a href="php/excluir_prof.php?idProfessor=<?php echo $rows_Home['idProfessor']; ?>" style="color:white"  >  Excluir</a></button>
                                                <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                                  
                            </td>
                            <td> </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>  
        </div>
            
        
     <br>   
     <br>   
     <br>   
     <br>   
     <br>   
     <br>   
     <br>   
     
        
        <div class="rodape">
            <nav class="navbar navbar-white bg-white">
                <span class="navbar">© 2014 Universidade Federal do Pampa - UNIPAMPA</span>
            </nav>
        </div>
        
    </body>
</html>