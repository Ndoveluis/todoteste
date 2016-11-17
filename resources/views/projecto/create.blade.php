</body>
</html>
<html>
	<head>
		<title>Informacao do Projecto</title>
		
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
	Registo de Projectos
</div>	

<HR>
<h1><a href="{!!URL::to('projecto')!!}">Listar Projectos</a></h1>
<HR>



<form action="{{URL::to('projecto')}}" method="post">

<div class="scroll">
	<table>
		
	<tr> 
		
		<td> Nome</td>
		<td> <input type="text" id="nome" name="nome"></td>
		<td> Membro</td>
    <td> {!! Form::select('member_id', $membros)!!}</td>
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
