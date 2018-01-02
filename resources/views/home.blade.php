@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Administrativo</div>

                <div class="panel-body">
                    <p>
                        {{ $productos->total() }} Registros |
                        página {{ $productos->currentPage() }}
                        de {{ $productos->lastPage() }}
                    </p>
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th>Nombre del Producto</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $item)
                                <tr>
                                    <td width="20px">{{ $item->id }}</td>
                                    <td>{{ $item->nombre }}</td>
                                    <td width="20px"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $productos->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
