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
              	
                	 <h2>Escolha ação desejada:</h2>
                     	<form action="cadastraProfessor.php">
                        	 <button class="btn btn-large btn-block btn-inverse" type="submit">Cadastro de Professor</button>
                        </form>
                        <form action="cadastraAluno.php">
                        	<button class="btn btn-large btn-block btn-inverse" type="submit">Cadastro de Aluno</button>
                        </form>
                                    
                
              </div>
            </div>
          </div>
        </div>    	
    </body>
</html>