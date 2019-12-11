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

$sqlp="SELECT * from professor";
$prof=mysqli_query ($conn, $sqlp); 


$sql="SELECT *,(SELECT nome FROM professor WHERE idProfessor=Professor_idProfessor) as 'orientador' from aluno";
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
                       
                        <a class="nav-link" style="color:  #000;"  href="ciclo_edit.php">Ciclo de Seminários e Palestras</a>
                    
                        <a class="nav-link" style="color:  #000;"  href="disc_edit.php">Disciplinas do Mestrado</a>
                        
                        <a class="nav-link" style="background-color:rgba(185, 182, 182, 0.42) ; color:  #000;"  href="aluno_edit.php">Alunos</a>
                      
                        <a class="nav-link" style="color:  #000;" href="publi_edit.php">Publicações </a>
                    
                        
                        
                </nav>
            </div>
        </nav>
        
        
        <div data-spy="scroll" data-target="#navbar-example3" data-offset="0">
            <div class="container" style="max-width: 72.5%;  margin-left: 25.7%; padding-top: 2%; margin-bottom: 3%;" > 
                <table class="table table-hover" >
                    <thead> 
						<th>Nome</th>
                        <th>Orientador</th>
                        <th>Semestre</th>
                        <th>Opções </th>
                        <th> 
                            <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#confirma"><span class="oi oi-plus"> </span>  Adicionar</button> 
                            <div class="modal fade" id="confirma" role="dialog ">
                                <div class="modal-dialog modal-lg ">
                                    <div class="modal-content ">
                                        <div class="modal-body">
                                            <form method="POST" action="php/result_aluno.php">
                                                <div class="form-group">                                            
                                                    <label><b>Nome: </b></label>
                                                    <input type="text"  name="nome" placeholder="Digite o nome o Aluno" class="form-control">
                                                    
                                                    <label><b>Semestre: </b></label>
                                                    <select name="semestre"   class="form-control selectpicker" >
                                                        <option value= "-"> - </option>
                                                        <option value= "1"> 1</option>
                                                        <option value= "2"> 2</option>
                                                        <option value= "3"> 3 </option>
                                                            <br>
                                                    </select>
                                                    
                                                    <label><b>Professor Orientador: </b></label>
                                                    <select name="Professor_idProfessor"  class="form-control selectpicker" >
                                                        <?php while ($rows_prof=mysqli_fetch_assoc($prof)) {?>
                                                        <option value= "<?php echo $rows_prof['idProfessor']; ?>"> <?php echo $rows_prof['nome']; ?></option>
                                                        <?php }?>
                                                        <br>
                                                    </select>
                                                      
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
                        
                        <tr>
                            <?php while ($rows_Home=mysqli_fetch_assoc($Home)) {?>
                            <td><?php echo mb_strimwidth($rows_Home['nome'], 0, 60,"...");?></td>
                            <td><?php echo mb_strimwidth($rows_Home['orientador'], 0, 60,"...");?></td>
                            <td><center><?php echo $rows_Home['semestre'];?></center></td>
                           
                            <td>
                            
                                <button type="button"  class="btn btn-success" data-toggle="modal" data-target="#confirm<?php echo $rows_Home['idaluno']; ?>"><span class="oi oi-pencil"></span></button> 
                                                
                                <div class="modal fade" id="confirm<?php echo $rows_Home['idaluno']; ?>" role="dialog ">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content modal-lg">
                                            <div class="modal-body">
                                                <form method="POST" action="php/edit_Aluno.php">
                                                    <div class="form-group">
                                                        
                                    

                                                        <label><b>Nome: </b></label>
                                                        <input type="text" value="<?php echo $rows_Home['nome']; ?>" name="nome" placeholder="Digite o Nome do Aluno" class="form-control">

                                                        
                                                        <label><b>Semestre: </b></label>
                                                        <select name="semestre"   class="form-control selectpicker" >
                                                            <option value="<?php echo $rows_Home['semestre']; ?>"> <?php echo $rows_Home['semestre']; ?> </option>
                                                            <option value= "1"> 1</option>
                                                            <option value= "2"> 2</option>
                                                            <option value= "3"> 3 </option>
                                                            <br>
                                                        </select>
                                                        
                                                        <label><b>Professor Orientador: </b></label>
                                                        <select name="Professor_idProfessor"  class="form-control selectpicker" >
                                                            <option value="<?php echo $rows_Home['Professor_idProfessor']; ?>"><?php echo $rows_Home['orientador']; ?></option>
                                                            <?php while ($rows_prof=mysqli_fetch_assoc($prof)) {?>
                                                            <option value= "<?php echo $rows_prof['idProfessor']; ?>"> <?php echo $rows_prof['nome']; ?></option>
                                                            <?php }?>
                                                           <br>
                                                        </select>
                                                    </div>
                                                    <br><br>
                                                    <center>
                                                        <input type="hidden" name="idaluno" value="<?php echo $rows_Home['idaluno']; ?>">
                                                                        
                                                        <input type="submit" value="Alterar " class="btn btn-success btn">
                                                              
                                                        <button type="button" data-dismiss="modal" class="btn btn-default">Cancelar</button>
                                                    </center>
                                                </form>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                                    	
                                
                                 
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirme<?php echo $rows_Home['idaluno']; ?>  "><span class="oi oi-trash" ></span> </button>
                                <div class="modal fade" id="confirme<?php echo $rows_Home['idaluno']; ?>" role="dialog">
                                    <div class="modal-dialog modal-md">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <p> Deseja realmente excluir <?php echo $rows_Home['nome']; ?> ? </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-sm"><a href="php/excluir_aluno.php?idaluno=<?php echo $rows_Home['idaluno']; ?>" style="color:white"  >  Excluir</a></button>
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
            
        
        
     
        
        <div class="rodape">
            <nav class="navbar navbar-white bg-white">
                <span class="navbar">© 2014 Universidade Federal do Pampa - UNIPAMPA</span>
            </nav>
        </div>
        
    </body>
</html>