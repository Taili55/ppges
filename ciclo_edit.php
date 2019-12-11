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

$sql="SELECT * from palestra";
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
                      
                        <a class="nav-link" style="color:  #000;"  href="prof_edit.php">Professores Orientadores</a>
                                            
                        <a class="nav-link" style="color:  #000;"  href="event_edit.php">Eventos</a>
                       
                        <a class="nav-link" style="background-color:rgba(185, 182, 182, 0.42) ; color:  #000;"  href="ciclo_edit.php">Ciclo de Seminários e Palestras</a>
                    
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
                        <th>Título</th>
                        <th>Categoria</th>
                        <th>Opções </th>
                        <th> 
                            <button type="button" style="margin-left:30%;"  class="btn btn-success" data-toggle="modal" data-target="#confirm"><span class="oi oi-plus"> </span>  Adicionar</button> 
                            <div class="modal fade" id="confirm" role="dialog ">
                                <div class="modal-dialog modal-lg ">
                                    <div class="modal-content ">
                                        <div class="modal-body">
                                            <form method="POST" action="php/result_ciclo.php">
                                                <div class="form-group">                    
                                                    <label><b>Título: </b></label>
                                                    <input type="text" style="width:95%" name="titulo" placeholder="Digite o Título da Palestra/Seminário" class="form-control">
                                                    
                                                    <label><b>Palestrante: </b></label>
                                                    <input type="text" style="width:95%" name="palestrante" placeholder="Digite o nome do Palestrante" class="form-control">
                                                    
                                                    <label><b>Orientador: </b></label>
                                                    <input type="text" style="width:95%" name="orientador" placeholder="Digite o nome do Orientador" class="form-control">
                                                    
                                                    <label><b>Data/Horário: </b></label>
                                                    <input type="datetime-local" style="width:95%" name="data"  class="form-control">
                                                    
                                                    <label><b>Local: </b></label>
                                                    <input type="text" style="width:95%" name="local" placeholder="Digite o Local" class="form-control">
                                                    
                                                    <label><b>Área de Pesquisa: </b></label>
                                                    <textarea type="text"  name="area" id="apresentacao" placeholder="Digite a área de Pesquisa" class="form-control" ></textarea>
                                                    
                                                    <label><b>Tema: </b></label>
                                                    <textarea type="text"  name="tema" id="apresentacao" placeholder="Digite a descrição" class="form-control" ></textarea>
                                                    
                                                    <label><b>Categoria: </b></label>
                                                    <select name="categoria" style="width:98%"  class="form-control selectpicker" >
                                                        <option> ... </option>
                                                        <option value= "Palestra"> Palestra</option>
                                                        <option value= "Seminário"> Seminário  </option>
                                                        <br>
                                                    </select>
                                                    
                                                    <div class="form-group">
                                                        <label><b>Descrição: </b></label>
                                                        <textarea type="text"  name="descricao" id="descricao/" placeholder="Digite a descrição" class="form-control" name="tx_mensagem"class="formbutton" id="tx_mensagem"></textarea>	
                                                        <script>
                                                            CKEDITOR.replace( 'descricao' );
                                                        </script>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                            <label><b>Resumo: </b></label>
                                                            <textarea type="text"  name="resumo" id="resumo" placeholder="Digite a descrição" class="form-control" name="tx_mensagem"class="formbutton" id="tx_mensagem"></textarea>	
                                                            <script>
                                                                CKEDITOR.replace( 'resumo' );
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
                            <td><?php echo $rows_Home['titulo'];?></td>
                            <td><?php echo $rows_Home['categoria'];?></td>
                            <td>  
                                <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#confirm<?php echo $rows_Home['idpalestra']; ?>"><span class="oi oi-pencil"></span></button> 
                                                
                                <div class="modal fade" id="confirm<?php echo $rows_Home['idpalestra']; ?>" role="dialog ">
                                    <div class="modal-dialog modal-lg ">
                                        <div class="modal-content modal-lg">
                                            <div class="modal-body">
                                                <form method="POST" action="php/edit_Ciclo.php">
                                                    <div class="form-group">
                                                                    
                                                        <label><b>Título: </b></label>
                                                        <input type="text" style="width:95%" name="titulo" placeholder="Digite o Título da Palestra/Seminário" value="<?php echo $rows_Home['titulo']; ?>" class="form-control">
                                                    
                                                        <label><b>Palestrante: </b></label>
                                                        <input type="text" style="width:95%"    name="palestrante" placeholder="Digite o nome do Palestrante" value="<?php echo $rows_Home['palestrante']; ?>" class="form-control">

                                                        <label><b>Orientador: </b></label>
                                                        <input type="text" style="width:95%"    name="orientador" placeholder="Digite o nome do Orientador" value="<?php echo $rows_Home['orientador']; ?>" class="form-control">
                                                    
                                                        <label><b>Data: </b></label>
                                                        <input type="datetime-local" style="width:95%" name="data" value="<?php echo $rows_Home['data']; ?>" class="form-control">
                                                        
                                                        <label><b>Local: </b></label>
                                                        <input type="text" style="width:95%" name="local" placeholder="Digite o Local" value="<?php echo $rows_Home['local']; ?>" class="form-control">
                                                    
                                                        <label><b>Área de Pesquisa: </b></label>
                                                        <textarea type="text"  name="area" id="apresentacao" placeholder="Digite a área de Pesquisa" value="<?php echo $rows_Home['area']; ?>" class="form-control" ><?php echo $rows_Home['area']; ?></textarea>
                                                    
                                                        <label><b>Tema: </b></label>
                                                        <textarea type="text"  name="tema" id="apresentacao" placeholder="Digite a descrição" value="<?php echo $rows_Home['tema']; ?>" class="form-control" ><?php echo $rows_Home['area']; ?></textarea>
                                                    
                                                    
                                                        <label><b>Categoria: </b></label>
                                                        <select name="categoria" style="width:98%"  class="form-control selectpicker" >
                                                            <option value="<?php echo $rows_Home['categoria']; ?>"> <?php echo $rows_Home['categoria']; ?> </option>
                                                            <option value= "Palestra"> Palestra</option>
                                                            <option value= "Seminário"> Seminário  </option>
                                                            <br>
                                                        </select>
                                                    
                                                        <div class="form-group">
                                                            <label><b>Descrição: </b></label>
                                                            <textarea type="text"  name="descricao" id="descricao/" placeholder="Digite a descrição" class="form-control" name="tx_mensagem"class="formbutton" id="tx_mensagem"><?php echo $rows_Home['descricao']; ?></textarea>	
                                                            <script>
                                                                CKEDITOR.replace( 'descricao' );
                                                            </script>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label><b>Resumo: </b></label>
                                                            <textarea type="text"  name="resumo" id="resumo" placeholder="Digite a descrição" class="form-control" name="tx_mensagem"class="formbutton" id="tx_mensagem"><?php echo $rows_Home['resumo']; ?></textarea>	
                                                            <script>
                                                                CKEDITOR.replace( 'resumo' );
                                                            </script>
                                                        </div>
                                                    </div>
                                        
                                                    <br><br>
                                                    <center>
                                                        <input type="hidden" name="idpalestra" value="<?php echo $rows_Home['idpalestra']; ?>">
                                                                        
                                                        <input type="submit" value="Alterar " class="btn btn-success btn">
                                                              
                                                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                                    </center>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                                    	
                                <button type="button"  class="btn btn-default " data-toggle="modal" data-target="#confirma<?php echo $rows_Home['idpalestra']; ?>"><span class="oi oi-spreadsheet"></span></button> 
                                                
                                <div class="modal fade" id="confirma<?php echo $rows_Home['idpalestra']; ?>" role="dialog ">
                                    <div class="modal-dialog  modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h4>Título: </h4>
                                                <p><?php echo $rows_Home['titulo']; ?></p>      
                                                <h4>Palestrante: </h4>
                                                <p><?php echo $rows_Home['palestrante']; ?></p>
                                                <h4>Orientador: </h4>
                                                <p><?php echo $rows_Home['orientador']; ?></p>
                                                <h4>Data: </h4>
                                                <p><?php echo $rows_Home['data']; ?></p>
                                                <h4>Área de Pesquisa: </h4>
                                                <p><?php echo $rows_Home['area']; ?></p>
                                                <h4>Tema: </h4>
                                                <p><?php echo $rows_Home['tema']; ?></p>
                                                <h4>Categoria: </h4>
                                                <p><?php echo $rows_Home['data']; ?></p>
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
                                 
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirme<?php echo $rows_Home['idpalestra']; ?>  "><span class="oi oi-trash" ></span> </button>
                                <div class="modal fade" id="confirme<?php echo $rows_Home['idpalestra']; ?>" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p> Deseja realmente excluir <?php echo $rows_Home['titulo']; ?> ? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-sm"><a href="php/excluir_ciclo.php?idpalestra=<?php echo $rows_Home['idpalestra']; ?>" style="color:white"  >  Excluir</a></button>
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