<!DOCTYPE html>
  <html>
 <head>
	  <link rel="shortcut icon" href="img/pestana.png">

	  <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	  <!-- Compiled and minified JavaScript -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	          
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
	  <style type="text/css">
	  	.loginDiv{
	  		top: 5vh;
	  		position: relative;
	  		background-color: #F5EBDC;
	  		width: 100%;
	  		height: auto;
	  	}
	  	.loginTitle{
	  		text-align: center;
	  	}
	  	.loginTitle h5{
	  		text-align: center;
	  		font-weight: bold;
	  		color: #502314;
	  		padding-top: 20px;
	  	}
	  	.loginTitle img{
	  		text-align: center;
	  		font-weight: bold;
	  		color: #502314;
	  		padding-top: 40px;
	  	}
	  	.modifyInput{
	  		color: #D62300;
	  		height: 45px;
	  		margin-top: 20px;
	  		background-color: white;
	  	}	
	  	.modifyInput input{
	  		position: relative;
	  		padding-left: 30px;
	  		border-style: none;
	  		background-color: transparent;
	  		outline: none;
	  		height: auto;
	  	}
	  	.modifyInput i{
	  		position: absolute;
	  		z-index: 999;
	  	}
	  	.button{
	  		width: 60%;
	  		text-align: center;
	  	}
	  	.centrar{
	  		text-align: center;
	  	}
	  	.select{
	  		width: 100%;
	  	}
	  	.encabezado{
	  		width: 100%;
	  		height: 100px;
	  		background-color: #502314;
	  		color: white;
	  		align-items: center;
	  	}
	  	.img-l{
	  		position: relative;
	  		width: 77px;
	  		height: 87px;
	  		padding-top: 10px;
	  	}
	  	.letras{
	  		font-family: DIN;
	  	}
	  	.centrado{
	  		display: flex;
				justify-content: center;
	  	}
	  	input.hola{
	  		width: 500px;
	  	}
	  	.h form {
	  		background-color: #ffffff4d;
	  		backdrop-filter: blur(3px);
	  		-webkit-backdrop-filter: blur(3px);
	  	}
	  </style>

  </head>

	<body>
    	<div class="row">
	    		<div class="col s12 encabezado">
	    			<div class="col s5"></div>	
		    		<div class="col s2 centrado">
			    		<img class="img-l" src="img/logo.png">
			    	</div>
			    	<div class="col s5"></div>					
	    		</div>
	    	</div>	
	    <form action="php/login_variables.php" method="POST" class="h">
    	<div class="container letras">	    	
    		<div class="row">	    			
    			<div class="col s3"></div>
	    		<div class="col s6 m6 l6  loginDiv"><p></p>	    			
	    			<div class="loginTitle">
	    				<img src="img/avatar.png">
	    			</div>
	    			<div class="row">
	    				<div class="col s1"></div>
	    				<div class="col s10 modifyInput">
	    					<div class="input-field inline">
		    					<i class="material-icons">person</i>
		    					<input outofocus type="text" name="usuario" id="usuario" placeholder="usuario" autocomplete="off" class="browser-default hola">
	    					</div>	
	    				</div>
	    				<div class="col s1"></div>
	    			</div>
	    			<div class="row">
	    				<div class="col s1"></div>
	    				<div class="col s10 modifyInput">
	    					<div class="input-field inline">
		    					<i class="material-icons">lock</i>
		    					<input type="password" name="contra" id="contra" placeholder="clave" autocomplete="off" class="browser-default hola">
	    					</div>	
	    				</div>
	    				<div class="col s1"></div>
	    			</div>
	    			<br><br><br>
	    			<div class="row">
	    				<div class="col s1"></div>
	    				<div class="col s10">
	    					<div class="centrar">
		    					<button class="btn waves-effect red button" onclick="location.href='php/login_variables.php'"><i class="material-icons left">input</i>Sign In</button>
	    					</div>	
	    				</div>
	    				<div class="col s1"></div>
	    			</div>
	    		<div class="col s3"></div>	
	    		</div>		    				
	    	</div>	
    	</div>
    </form>
    </body>
  </html>