<html>
	<head>
		<title>Informacao do Membro</title>
		
		<style type="text/css">
	.wrapper{

		width: 80%;
		height: 90%;
		margin: 0 auto;
	}

    .header{

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

		</style>

        </head>

 <body>
        	
<div class="wrapper">
<div class="header">
	Registo de membro
</div>	

<HR>
<a href="{!!URL::to('/')!!}">Back</a>
<HR>
<form action="{{URL::to('update/')}}" method="post">

<div class="scroll">
<input type="hidden" value="{{$membros->id}}" id="id" name="id">
	<table>
		
	<tr> 
		
		<td> Nome</td>
		<td> <input type="text" id="nome" name="nome"  value="{!!$membros->nome!!}"></td>
		<td> Idade</td>
		<td> <input type="text" id="idade" name="idade" value="{!!$membros->idade!!}"></td>
	</tr>
 <tr>
 <td> Genero</td><td>
 <select id="sexo" name="sexo">
 <option value="{{$membros->sexo}}">Masculino</option>
 <option value="{{$membros->sexo}}">Femenino</option>
 </select></td>
 	<td>Departamento</td>
  <td><input type="departamento" id="departamento" name="departamento" value="{!!$membros->departamento!!}"></td>
 	</tr>

 	<tr>
 	<td>Cargo</td>
<td><input type="text" id="cargo" name="cargo" value="{!!$membros->cargo!!}"></td>
<td>GrauAcademico</td>
<td><input type="text" id="grauAcademico" name="grauAcademico" value="{!!$membros->grauAcademico!!}"></td>
  </tr>

  <tr>
  <td>Provincia</td>
   <td><input type="text" id="provincia" name="provincia" value="{!!$membros->provincia!!}"></td> 
    <td>Cidade</td>
     <td><input type="text" id="cidade" name="cidade" value="{!!$membros->cidade!!}"></td> 
     </tr>

     <tr>
     <td>Telefone</td>
     <td><input type="telefone" name="telefone" id="telefone" value="{!!$membros->telefone!!}"></td>
     <td> Email</td>
     <td><input type="email" name="email" id="email" value="{!!$membros->email!!}"></td>
     
     </tr>
      
  </table>
  <div>
  <hr>
  	<input type="hidden" name="_token" value="{{ csrf_token()}}"> 
  	
    <button type="submit" id="update" name="update">Actualizar</button>
  </div>
  </form>
  </div>
</body>

</html>
  
         
          
