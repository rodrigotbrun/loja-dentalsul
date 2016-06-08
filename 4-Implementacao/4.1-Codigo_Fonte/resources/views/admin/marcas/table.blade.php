<table class="table table-responsive" id="marcas-table">
    <thead>
        <th>Nome</th>
        <th>Alias</th>
        <th>Diretorio</th>
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
    @foreach($marcas as $marca)
        <tr>
            <td>{!! $marca->nome !!}</td>
            <td>{!! $marca->alias !!}</td>
            <td>{!! $marca->diretorio !!}</td>
            <td>{!! $marca->follow !!}</td>
            <td>{!! $marca->palavras_chave !!}</td>
            <td>{!! $marca->indexar !!}</td>
            <td>{!! $marca->menu_superior !!}</td>
            <td>{!! $marca->visivel !!}</td>
            <td>{!! $marca->menu_lateral !!}</td>
            <td>{!! $marca->data_atualizado !!}</td>
            <td>{!! $marca->data_criado !!}</td>
            <td>{!! $marca->data_deletado !!}</td>
            <td>
                {!! Form::open(['route' => ['marcas.destroy', $marca->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('marcas.show', [$marca->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('marcas.edit', [$marca->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>