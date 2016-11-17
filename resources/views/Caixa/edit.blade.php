<html>
	<head>
		<title>Editar a caixa de mensagem</title>
		
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
	Edicao da caixa de mensagem
</div>	

<HR>
<a href="{!!URL::to('/')!!}">Back</a>
<HR>
<form action="{{URL::to('update/')}}" method="post">

<div class="scroll">
<input type="hidden" value="{{$caixas->id}}" id="id" name="id">
	<table>
		
	<tr> 
		
		<td> Email</td>
		<td> <input type="email" id="email" name="email"  value="{!!$caixas->email!!}"></td>
		<td> Assunto</td>
		<td> <input type="text" id="assunto" name="assunto" value="{!!$caixas->assunto!!}"></td>
	</tr>



     <tr>
     <td>Mensagem</td>
     <td><input type="mensagem" name="mensagem" id="mensagem" value="{!!$caixas->mensagem!!}"></td>
     
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