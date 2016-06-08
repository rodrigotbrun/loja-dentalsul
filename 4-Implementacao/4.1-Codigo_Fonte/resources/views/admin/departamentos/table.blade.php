<table class="table table-responsive" id="departamentos-table">
    <thead>
        <th>Nome</th>
        <th>Alias</th>
        <th>Follow</th>
        <th>Palavras Chave</th>
        <th>Indexar</th>
        <th>Visivel</th>
        <th>Menu Superior</th>
        <th>Menu Lateral</th>
        <th>Data Atualizado</th>
        <th>Data Criado</th>
        <th>Data Deletado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($departamentos as $departamento)
        <tr>
            <td>{!! $departamento->nome !!}</td>
            <td>{!! $departamento->alias !!}</td>
            <td>{!! $departamento->follow !!}</td>
            <td>{!! $departamento->palavras_chave !!}</td>
            <td>{!! $departamento->indexar !!}</td>
            <td>{!! $departamento->visivel !!}</td>
            <td>{!! $departamento->menu_superior !!}</td>
            <td>{!! $departamento->menu_lateral !!}</td>
            <td>{!! $departamento->data_atualizado !!}</td>
            <td>{!! $departamento->data_criado !!}</td>
            <td>{!! $departamento->data_deletado !!}</td>
            <td>
                {!! Form::open(['route' => ['departamentos.destroy', $departamento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('departamentos.show', [$departamento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('departamentos.edit', [$departamento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>