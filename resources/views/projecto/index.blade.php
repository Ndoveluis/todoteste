<html>
	<head>
		<title>Informacao do Projecto</title>
		
		<style type="text/css">

	.wrapper{

		width: 70%;
		height: 90%;
		margin: 0 auto;
	}

    .header{

    	font-family: sans-serif;
    	font-size: 50px;
    	text-align: center;
    }

     table tr td{

     	border: 5px solid;
     	height: 25px;
     }

     table{
     	width: 90%;
     	font-size: 20px;
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
	<p>Listas dos Projectos</p>
</div>	

<HR>
<h1> <p id="novo"> <a href="{!!URL::to('novo')!!}">Novo Projecto</a> </p> </h1>
<HR>

<div class="scroll">
	<table>
		
	<thead>
		
		<th> Projecto_ID</th>
		<th> Nome do Projecto</th>
		<th> Nome do Membro</th>
	    <th> Accao</th>
		<tbody>
			
		@foreach ($projectos as $key => $value)
		<tr>
			<td>{!! $value->id !!}</td>
			<td>{!! $value->nome!!}</td>
			<td>{!! $value->member_id!!}</td>
        <td>
				<a href="{{URL::to('edit',array($value->id))}}"> Editar </a>


				<a href="{{URL::to('delete',array($value->id))}}"> Deletar </a>
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
