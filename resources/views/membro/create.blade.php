</body>
</html>
<html>
	<head>
		<title>Informacao do membro</title>
		
		<style type="text/css">


	.wrapper{

		width: 80%;
		height: 90%;
		margin: 0 auto;
	}

    .header{
   text-align: center;
    	font-family: sans-serif;
    	font-size: 40px;
    }

    footer{

      text-align: center;
      font-family: sans-serif;
      font-size: 40px;
    }

 

     table{
     	width: 100%;
        margin: 0 auto;
     }


     body{
     	font-size: 12px;
     	font-family: sans-serif;
      //background-color:blue;
     }


  input[type='text']{

     width: 100%;
     height: 25px;

      }

   input[type='date']{
   	height: 25px;
   }

     .scroll{
     	height: 100%;
     	overflow: auto;
     }

     a{
     	font-weight: bold;
     }

     select{
     	height: 25px;
     }

     input[type='email']{
     	height: 25px;
     	width: 300px;
     }

ul
{
list-style-type:none;
margin:0;
padding:0;
}
li
{
display:inline;
}


		</style>

        </head>

 <body>
        	
<div class="wrapper">

<div class="header">

<ul>
<li><a href="{!!URL::to('/')!!}">Home</a></li>
<li><a href="{!!URL::to('membro/')!!}">Membro</a></li>
<li><a href="{!!URL::to('projecto/')!!}">Projecto</a></li>
<li><a href="{!!URL::to('tarefa/')!!}">Tarefa</a></li>
</ul>

<br>
<br>
	Registo de Membro 
</div>	

<HR>
<h1><a href="{!!URL::to('membro/')!!}">Listar Membros</a></h1>
<HR>



<form action="{{URL::to('membro')}}" method="post">

<div class="scroll">
	<table>
		
	<tr> 
		
		<td> Nome</td>
		<td> <input type="text" id="nome" name="nome" placeholder="nome"></td>
		<td>Idade</td>
     <td><input type="text" id="idade" name="idade" placeholder="idade"></td>
	</tr>

 <tr>
 <td> Genero</td><td>
 <select id="sexo" name="sexo">
 <option value="Masculino">Masculino</option>
 <option value="Feminino">Femenino</option>
 </select></td>
 	<td>Departamento</td>
  <td><input type="text" id="departamento" name="departamento" placeholder="departamento"></td>
 	</tr>

 	<tr>
	<td>Cargo</td>
   <td><input type="text" id="cargo" name="cargo" placeholder="cargo"></td>
    <td>Grau Academico</td>
   <td><input type="text" id="grauAcademico" name="grauAcademico" placeholder="teu ultimo nivel"></td> 
  </tr>

  <tr>
  <td>Provincia</td>
   <td><input type="text" id="provincia" name="provincia" placeholder="provincia"></td>
    <td>Cidade</td>
   <td><input type="text" id="cidade" name="cidade" placeholder="cidade"></td> 
  </tr>


  
     <tr>
     <td> Email</td>
     <td><input type="email" name="email" id="email" placeholder="example@gmail.com"></td>
     <td> Telefone</td>
     <td><input type="text" name="telefone" id="telefone" placeholder="numero de telefone"></td>
     </tr>
      
  </table>
  <div>
  	<input type="hidden" name="_token" value="{{ csrf_token()}}"> 
  	<input type="submit" name="save" class="btn btn-primary">
  </div>
  </form>
</div>
</form>
<div class="footer">
<a href="ndoveluis84@gmail.com">ndoveluis84@gmail.com</a>
</div>
</div>
</body>

</html>


          
        
    
        