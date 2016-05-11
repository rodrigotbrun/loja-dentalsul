<table class="table table-responsive" id="enderecos-table">
    <thead>
        <th>Id Cliente</th>
        <th>Principal</th>
        <th>Entrega</th>
        <th>Cep</th>
        <th>Rua</th>
        <th>Complemento</th>
        <th>Numero</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Uf</th>
        <th>Ponto Referencia</th>
        <th>Data Deletado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($enderecos as $endereco)
        <tr>
            <td>{!! $endereco->id_cliente !!}</td>
            <td>{!! $endereco->principal !!}</td>
            <td>{!! $endereco->entrega !!}</td>
            <td>{!! $endereco->cep !!}</td>
            <td>{!! $endereco->rua !!}</td>
            <td>{!! $endereco->complemento !!}</td>
            <td>{!! $endereco->numero !!}</td>
            <td>{!! $endereco->bairro !!}</td>
            <td>{!! $endereco->cidade !!}</td>
            <td>{!! $endereco->uf !!}</td>
            <td>{!! $endereco->ponto_referencia !!}</td>
            <td>{!! $endereco->data_deletado !!}</td>
            <td>
                {!! Form::open(['route' => ['enderecos.destroy', $endereco->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('enderecos.show', [$endereco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('enderecos.edit', [$endereco->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>