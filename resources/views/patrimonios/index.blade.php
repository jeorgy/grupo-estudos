@extends('layouts.app')

@section('content')
    <div class="container">
        @can('ver_patrimonios')
            <div class="card">
                <div class="card-header">
                    <h3 class="title">
                        Lista de Patrimônios
                        @can('adicionar_patrimonios')
                            <button class="btn btn-primary">Novo</button>
                        @endcan
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead class="bg-dark text-light">
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Data Aquisição</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            @foreach ($patrimonios as $patrimonio)
                                <tr>
                                    <td>{{$patrimonio->nome}}</td>
                                    <td>{{$patrimonio->categoria}}</td>
                                    <td>{{$patrimonio->data_aquisicao}}</td>
                                    <td>
                                        @can('editar_patrimonios')
                                            <button class="btn btn-warning">Editar</button>
                                        @endcan
                                        @can('deletar_patrimonios')
                                            <button class="btn btn-danger">Excluir</button>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endcan
    </div>
@endsection