<html>
	<head>
		<title>Informacao do Membro</title>
		
		<style type="text/css">

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
	.wrapper{

		width: 70%;
		height: 90%;
		margin: 0 auto;
	}

    .header{

    	font-family: sans-serif;
    	font-size: 20px;
    	text-align: center;
    }

     table tr td{

     	border: 5px solid;
     	height: 25px;
     }

     table{
     	width: 100%;
     	font-size: 8px;
     	box-shadow: 0px 2px 50px gray;
     	border-collapse: collapse;


     }

     table,  td
{
border: 1px solid black;
padding:15px;
}

#novo{
	text-align: left;
	font-family: sans-serif;

}

     body{
     	font-size: 12px;
     	font-family: sans-serif;
     }

     thead th {

     	height: 40px;
     	background: #455555;
     	color:white;
     	border:5px solid black;
     	text-align: left;
     	table-layout: fixed;
     	overflow: hidden;
     	//padding:15px;
     	border:1px solid black;
     }

     table tr:hover{
     	background: green;
     	cursor: pointer;
     	color: white;

     }

     .scroll{
     	height: 100%;
     	overflow: auto;
     }

     a{
     	font-weight: bold;
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
	<p>Listas dos membros</p>
</div>	

<HR>
<h1> <p id="novo"> <a href="{!!URL::to('membro/create')!!}">Novo Membro</a> </p> </h1>
<HR>

<div class="scroll">
	<table>
		
	<thead>
		
		<th> Membro_ID</th>
		<th> Nome de Membro</th>
		<th> Idade</th>
		<th> Sexo</th>
		<th> departamento </th>
		<th>Cargo</th>
		<th> Grau Academico</th>
			<th>Provincia</th>
			<th>Telefone</th>
			<th> Cidade</th>
		     <th> Email</th>
	         <th> Accao</th>
		<tbody>
			
		@foreach ($membros as $key => $value)
		<tr>
			<td>{!! $value->id !!}</td>
			<td>{!! $value->nome!!}</td>
			<td>{!! $value->idade!!}</td>

			<td>
				@if ($value->sexo==1)
				Masculino
				@else
				Femenino
				@endif
			</td>
			<td>{!! $value->departamento!!}</td>
			<td>{!! $value->cargo!!}</td>
			<td>{!! $value->grauAcademico!!}</td>
			<td>{!! $value->provincia!!}</td>
			<td>{!! $value->telefone!!}</td>
			<td>{!! $value->cidade!!}</td>
			<td>{!! $value->email!!}</td>
			<td>
				<a href="{{URL::to('edit',array($value->id))}}"> Editar </a>

				<a href="{{URL::to('destroy',array($value->id))}}"> Deletar </a>
			</td>


		</tr>

		@endforeach
		</tbody> 
	</thead>

	</table>
    </div>

    </div>

    </body>

</html>

 
			

