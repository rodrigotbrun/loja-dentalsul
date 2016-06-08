<table class="table table-responsive" id="categorias-table">
    <thead>
        <th>Id Departamento</th>
        <th>Nome</th>
        <th>Alias</th>
        <th>Follow</th>
        <th>Palavras Chave</th>
        <th>Indexar</th>
        <th>Menu Superior</th>
        <th>Visivel</th>
        <th>Menu Lateral</th>
        <th>Data Atualizado</th>
        <th>Data Criado</th>
        <th>Data Deletado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{!! $categoria->id_departamento !!}</td>
            <td>{!! $categoria->nome !!}</td>
            <td>{!! $categoria->alias !!}</td>
            <td>{!! $categoria->follow !!}</td>
            <td>{!! $categoria->palavras_chave !!}</td>
            <td>{!! $categoria->indexar !!}</td>
            <td>{!! $categoria->menu_superior !!}</td>
            <td>{!! $categoria->visivel !!}</td>
            <td>{!! $categoria->menu_lateral !!}</td>
            <td>{!! $categoria->data_atualizado !!}</td>
            <td>{!! $categoria->data_criado !!}</td>
            <td>{!! $categoria->data_deletado !!}</td>
            <td>
                {!! Form::open(['route' => ['categorias.destroy', $categoria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('categorias.show', [$categoria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('categorias.edit', [$categoria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>