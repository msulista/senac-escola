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
			
			$matri = $_GET['matri'];
			require("conecta.inc");
			
			$link = conecta_bd() or die("Não é possivel conectar-se ao servidor");                    
            $resultado = mysqli_query($link, "Select * from alunos where matricula = '$matri';") or die("Não é possível retornar dados do aluno.");
			$linha= mysqli_fetch_array($resultado); 
			                     
            $matri = $linha["matricula"];
            $nome = $linha["nome"];
            $email = $linha["email"];
            $curso = $linha["curso"]; 			
			           		
		?>
    	
         <div class="container-fluid">
          <div class="row-fluid">
            <div class="span2">
              <!--conteúdo da lateral-->
            </div>
            <div class="span10">
              <!--conteúdo do corpo-->
              <div class="hero-unit">
              
                <h2>Mostra Aluno Cadastrado:</h2>                
              	<br>               	                
                        <h3>Alterando dados do Aluno:</h3>
                        <br>
                        <dl class="dl-horizontal">
                            <form action="confirmAlterAluno.php" method="post">
                                            		<input type="hidden" name="matri_alter" value="<?PHP echo($matri)?>">
                               <dt>Nome:</dt>		<dd><input type="text" name="nome_alter" value="<?PHP echo($nome)?>"></dd>
                               <dt>E-Email:</dt>	<dd><input type="text" name="email_alter" value="<?PHP echo($email)?>"></dd>
                               <dt>Curso:</dt>		<dd><input type="text" name="curso_alter" value="<?PHP echo($curso)?>"></dd>
                                           			<dd><input class="btn btn-inverse" type="submit" value="Altera">
                          							<input class="btn btn-inverse" type="reset" value="Limpa"></dd>                       
                            </form>
                        </dl>        
              </div>
            </div>
          </div>
        </div>    	
    </body>
</html>