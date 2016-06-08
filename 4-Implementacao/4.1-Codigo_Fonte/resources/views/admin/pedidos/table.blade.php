<table class="table table-responsive" id="pedidos-table">
    <thead>
        <th>Id Forma Pagamento</th>
        <th>Id Cliente</th>
        <th>Id Endereco Entrega</th>
        <th>Id Cupom Desconto</th>
        <th>Ip</th>
        <th>Navegador</th>
        <th>Sistema</th>
        <th>Preco Frete</th>
        <th>Peso</th>
        <th>Total Compra</th>
        <th>Vl Desconto</th>
        <th>Vl Desconto Cartao</th>
        <th>Vl Acrescimo</th>
        <th>Total Pagar</th>
        <th>Status</th>
        <th>Quantidade Parcelas</th>
        <th>Email Enviado</th>
        <th>Ligacao</th>
        <th>Sessao</th>
        <th>Data Criado</th>
        <th>Data Atualizado</th>
        <th>Data Finalizado</th>
        <th>Data Deletado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{!! $pedido->id_forma_pagamento !!}</td>
            <td>{!! $pedido->id_cliente !!}</td>
            <td>{!! $pedido->id_endereco_entrega !!}</td>
            <td>{!! $pedido->id_cupom_desconto !!}</td>
            <td>{!! $pedido->ip !!}</td>
            <td>{!! $pedido->navegador !!}</td>
            <td>{!! $pedido->sistema !!}</td>
            <td>{!! $pedido->preco_frete !!}</td>
            <td>{!! $pedido->peso !!}</td>
            <td>{!! $pedido->total_compra !!}</td>
            <td>{!! $pedido->vl_desconto !!}</td>
            <td>{!! $pedido->vl_desconto_cartao !!}</td>
            <td>{!! $pedido->vl_acrescimo !!}</td>
            <td>{!! $pedido->total_pagar !!}</td>
            <td>{!! $pedido->status !!}</td>
            <td>{!! $pedido->quantidade_parcelas !!}</td>
            <td>{!! $pedido->email_enviado !!}</td>
            <td>{!! $pedido->ligacao !!}</td>
            <td>{!! $pedido->sessao !!}</td>
            <td>{!! $pedido->data_criado !!}</td>
            <td>{!! $pedido->data_atualizado !!}</td>
            <td>{!! $pedido->data_finalizado !!}</td>
            <td>{!! $pedido->data_deletado !!}</td>
            <td>
                {!! Form::open(['route' => ['pedidos.destroy', $pedido->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pedidos.show', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pedidos.edit', [$pedido->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>