<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<title>Cesar / Davi</title>
						
	</head>
	<body>
				
			<form name="" method="post" action="">
				<label>Usuário: <input type="text" name="user" /></label><br /><br />
				<label>Senha: <input type="password" name="pass" /></label><br /><br />
            <input type="file" name="arq1"><br><br>
				<input type="submit" name="submit" value="Abrir arquivo" ><br /><br/>
			</form>
<?php

# Grupo: Cesar Vargas / Davi Marczal
# Linguagem de Programação Web
          
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				$user1 = 'cesar';
				$pass1 = '1234';
            
            $user2 = 'davi';
				$pass2 = '4321';	
				
				if($submit){	
					
					if($user == "" || $pass == ""){
						echo "<script:alert('Preencha todos os campos!');</script>";
					}
					
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['Login:']=$user;
							$_SESSION['Senha:']=$pass;
							

                     $file_handle = fopen("cadastro.txt", "r");

                     while (!feof($file_handle) ) {

                     $line_of_text = fgets($file_handle);
                     $parts = explode('/', $line_of_text);

                     print $parts[0]. $parts[1]. $parts[2]. $parts[3]. "<br>";

                     }

                     fclose($file_handle);
						}
						else{
							echo "<script>alert('Login e/ou senha incorreto! Tente novamente!');</script>";
						}
					}
				}
			?>
		</div>
	</body>
</html>	