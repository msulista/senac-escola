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
              	
                	 <h2>Cadastro Professor:</h2>
              		 <dl class="dl-horizontal">
                     	<form action="insereProfessor.php" method="post">                     
                          <dt>Nome:</dt>				<dd><input type="text" name="nome" placeholder="Digite o nome do professor"></dd>
                          <dt>Data Admissão:</dt>		<dd><input type="date" name="data"></dd>
                          <dt>Disciplina:</dt>			<dd><input type="text" name="disciplina" placeholder="Digite o nome da disciplina"></dd>
                         								<dd><input class="btn btn-inverse" type="submit" value="Cadastra">
                          									<input class="btn btn-inverse" type="reset" value="Limpa"></dd>
                       </form>
                     </dl>               
                
              </div>
            </div>
          </div>
        </div>    	
    </body>
</html>