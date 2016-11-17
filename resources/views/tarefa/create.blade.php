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
<h1><a href="{!!URL::to('membro')!!}">Listar Membros</a></h1>
<HR>



<form action="{{URL::to('save')}}" method="post">

<div class="scroll">
	<table>
		
	<tr> 
		
		<td> Nome</td>
		<td> <input type="text" id="fn" name="fn"></td>
		<td> Apelido</td>
		<td> <input type="text" id="ln" name="ln"></td>
	</tr>
 <tr>
 <td> Genero</td><td>
 <select id="gender" name="gender">
 <option value="1">Masculino</option>
 <option value="2">Femenino</option>
 </select></td>
 	<td>Data de Nascimento</td>
  <td><input type="date" id="birthday" name="birthday"></td>
 	</tr>

 	<tr>
 	<td>Telefone</td>
<td><input type="text" id="phone" name="phone"></td>
<td>Idade</td>
<td><input type="text" id="idade" name="idade"></td>
  </tr>

  <tr>
  <td>Grau Academico</td>
   <td><input type="text" id="GrauAcademico" name="GrauAcademico"></td> 

    <td>Cargo</td>
     <td><input type="text" id="cargo" name="cargo"></td> 
     </tr>

     <tr>
     <td> Email</td>
     <td><input type="email" name="email" id="email"></td>
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
