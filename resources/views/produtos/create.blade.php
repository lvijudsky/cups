@extends('layouts.admin-master')

@section('content')
<form action="" class="flex-grow-1 w-auto m-5" method="post">
	<div class="form-group">
		<label for="nome">Nome</label>
		<input type="text" name="nome" class="form-control" id="nome" placeholder="Nome do produto">
	</div>
	<div class="form-group">
		<label for="categoria">Categoria</label>
		<select class="form-control" id="categoria" name="categoria">
			<option value="">Categoria 1</option>
			<option value="">Categoria 2</option>
			<option value="">Categoria 3</option>
			<option value="">Categoria 4</option>
			<option value="">Categoria 5</option>
		</select>
	</div>
	<div class="form-group">
		<label for="nome">Preço</label>
		<input type="number" step="0.01" class="form-control" name="preco" id="preco" placeholder="Preço">
	</div>
	<div class="form-group">
		<label for="qtde">Quantidade</label>
		<input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Quantidade">
	</div>
	<button class="btn btn-warning float-right w-25">Salvar</button>
</form>
@endsection