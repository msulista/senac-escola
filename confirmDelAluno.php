<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
 	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.css" rel="stylesheet">
    <title>Escola Tradicionalista da República Rio Grandense</title>   
    </head>    
    <body>
    	 <?PHP 		
			require('top.php');				     		
		?>   	
         <div class="container-fluid">
          <div class="row-fluid">
            <div class="span2">
              <!--conteúdo da lateral-->
            </div>
            <div class="span10">
              <!--conteúdo do corpo-->
              <div class="hero-unit">              
                                
              	<br>                    
                      
                   <?PHP 					
					$matri_del = $_POST['matri_del'];										
					require("conecta.inc");
					
					$link = conecta_bd() or die("Não é possivel conectar-se ao servidor");							
					$resultado = mysqli_query($link, "delete from alunos where matricula='$matri_del'") 
										or die ("Não foi possível deletar os dados do aluno.");
					
					print("<h3>Aluno matricula: $matri_del deletado com sucesso.</h3>");										
				?> 
                	<form action="mostraAluno.php">
                    	<input class="btn btn-inverse" type="submit" value="Voltar">                          							
                    </form>      
              </div>
            </div>
          </div>
        </div>    	
    </body>
</html>