<table class="table table-responsive" id="subcategorias-table">
    <thead>
        <th>Id Categoria</th>
        <th>Nome</th>
        <th>Alias</th>
        <th>Palavras Chave</th>
        <th>Follow</th>
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
    @foreach($subcategorias as $subcategoria)
        <tr>
            <td>{!! $subcategoria->id_categoria !!}</td>
            <td>{!! $subcategoria->nome !!}</td>
            <td>{!! $subcategoria->alias !!}</td>
            <td>{!! $subcategoria->palavras_chave !!}</td>
            <td>{!! $subcategoria->follow !!}</td>
            <td>{!! $subcategoria->indexar !!}</td>
            <td>{!! $subcategoria->visivel !!}</td>
            <td>{!! $subcategoria->menu_superior !!}</td>
            <td>{!! $subcategoria->menu_lateral !!}</td>
            <td>{!! $subcategoria->data_atualizado !!}</td>
            <td>{!! $subcategoria->data_criado !!}</td>
            <td>{!! $subcategoria->data_deletado !!}</td>
            <td>
                {!! Form::open(['route' => ['subcategorias.destroy', $subcategoria->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('subcategorias.show', [$subcategoria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('subcategorias.edit', [$subcategoria->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>