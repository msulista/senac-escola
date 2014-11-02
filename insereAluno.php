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
                 
                 <h2>Insere novo Aluno:</h2>
					<?PHP 
                    
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $curso = $_POST['curso'];
                                                
                        if($nome =="" or $email =="" or $curso==""){
                            
                            print("<h3>Favor preencha todos os campos!!!</h3>");
					?>
                    		<form action="cadastraAluno.php">
                            	<input class="btn btn-large btn-inverse" type="submit" value="Voltar">
                            </form>
                    <?PHP
                        }else{                           
                            require("conecta.inc");
                            
                            $link = conecta_bd() or die("<h3>Não é possível conectar-se ao servidor.</h3>");
                           
                            mysqli_query($link, "insert into alunos (nome, email, curso) values ('$nome', '$email', '$curso');") 
								or die("<h3>Não foi posssível inserir novo aluno!!!</h3>");
                            print("<h3>Inserido contato com sussésso!!!</h3>");
					?>
                    		<form action="mostraAluno.php">
                            	<input class="btn btn-large btn-inverse" type="submit" value="Alunos">
                            </form>
                    <?PHP		
                        }			
                    ?>
              </div>
            </div>
          </div>
        </div>    	
    </body>
</html>