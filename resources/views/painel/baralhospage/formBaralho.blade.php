@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Adicionar Novo Baralho</h1>
@stop

@section('content')
    @if(session('msg'))
        <div class="col-md-8">
            <div class="alert alert-success">
                <p>{{session('msg')}}</p>
            </div>
        </div>
    @endif
   <div class="row">
   		 	<div class="col-md-5">
    		 <br /> 
    		 <br /> 
			<form action="{{route('cadastro.baralho')}}" method="POST" >
				{{csrf_field()}}
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                        <label for="exampleInputPassword3">Nome do Baralho</label>
                        <input required type="text" class="form-control" id="exampleInputPassword3" placeholder="" name="nome">
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-10">
                         <label for="exampleInputPassword3">Descrição (Opcional)</label>
                         <textarea name="descricao" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <br /> 
			  <button type="submit" class="btn btn-primary">Adicionar</button>
			</form>
    	</div>
   </div>
   <div class="row">
    <br /> 
    <br /> 
      <div class="col-md-9">
         @if(isset($baralhos))
            <div class="box">
            <div class="box-header">
              <h3 class="box-title">Baralhos Cadastrado</h3>
            </div>
           
            <div class="box-body">
              <table id="tabela" class="table tabela table-bordered table-hover" pageLength="5" aaSorting="1 asc">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>Descrição</th>
                </tr>
                </thead>
                <tbody>

                  @foreach($baralhos as $baralho)
                  <tr>
                    <td>{{$baralho->nome}}</td>
                    <td>{{ $baralho->descricao ? $baralho->descricao : 'Não há Descrição'}}</td>
                  </tr>
                @endforeach
           
                </tbody>
                <tfoot>
                <tr>
                </tr>
                </tfoot>
              </table>
            </div>
        
          </div>
      </div>
      @endif
   </div>
@stop