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
			
			$cod = $_GET['cod'];
			require("conecta.inc");
			
			$link = conecta_bd() or die("Não é possivel conectar-se ao servidor");                    
            $resultado = mysqli_query($link, "Select * from professores where codigo = '$cod';") or die("Não é possível retornar dados do professor.");
			$linha= mysqli_fetch_array($resultado); 
			                     
            $cod = $linha["codigo"];
            $nome = $linha["nome"];
            $data = $linha["data_admissao"];
            $disciplina = $linha["disciplina"]; 
			
			$data = date("d/m/Y", strtotime($data));			
			           		
		?>
    	
         <div class="container-fluid">
          <div class="row-fluid">
            <div class="span2">
              <!--conteúdo da lateral-->
            </div>
            <div class="span10">
              <!--conteúdo do corpo-->
              <div class="hero-unit">
              
                <h2>Mostra Professor Cadastrado:</h2>                
              	<br>               	                
                        <h3>Alterando dados do Professor:</h3>
                        <br>
                        <dl class="dl-horizontal">
                            <form action="confirmAlterProf.php" method="post">
                                            			<input type="hidden" name="cod_alter" value="<?PHP echo($cod)?>">
                               <dt>Nome:</dt>			<dd><input type="text" name="nome_alter" value="<?PHP echo($nome)?>"></dd>
                               <dt>Data Admissão:</dt>	<dd><input type="date" name="data_alter" value="<?PHP echo($data)?>"></dd>
                               <dt>Disciplina:</dt>		<dd><input type="text" name="disci_alter" value="<?PHP echo($disciplina)?>"></dd>
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