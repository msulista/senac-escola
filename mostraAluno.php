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
			require("conecta.inc");	
			
			  $link = conecta_bd() or die("Não é possivel conectar-se ao servidor");
                    
              $resultado = mysqli_query($link, "Select * from alunos order by nome;");            		
		?>
    	
         <div class="container-fluid">
          <div class="row-fluid">
            <div class="span2">
              <!--conteúdo da lateral-->
            </div>
            <div class="span10">
              <!--conteúdo do corpo-->
              <div class="hero-unit">
              
                <h2>Mostra Alunos Cadastrados</h2>                
              	<br>
                    <table class="table table-condensed">
                        <tr>
                            <td>Matrícula</td>
                            <td>Nome</td>
                            <td>Email</td>
                            <td>curso</td>                           
                            <td>Alterar</td>
                            <td>Deletar</td>
                        </tr>
                      
                   <?PHP                  
                    
                    while($linha= mysqli_fetch_array($resultado)){                       
                        
                        $matri = $linha["matricula"];
                        $nome = $linha["nome"];
                        $email = $linha["email"];
                        $curso = $linha["curso"];                        	
                ?>	                
                        <tr>
                            <td><?PHP echo($matri);?></td>
                            <td><?PHP echo($nome);?></td>
                            <td><?PHP echo($email);?></td>
                            <td><?PHP echo($curso);?></td>                                
                        	<td><?PHP echo("<a href='alteraAluno.php?matri=$matri'>Alterar</a>");?></td>
                            <td><?PHP echo("<a href='deletaAluno.php?matri=$matri'>Deletar</a>");?></td>                            
                        </tr>    
                 <?PHP
                    }
                 ?>
                    </table>                
                
              </div>
            </div>
          </div>
        </div>    	
    </body>
</html>