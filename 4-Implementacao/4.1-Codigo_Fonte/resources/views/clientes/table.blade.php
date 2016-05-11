<table class="table table-responsive" id="clientes-table">
    <thead>
        <th>Profissional</th>
        <th>Parceiro</th>
        <th>Tipo</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Cpf</th>
        <th>Rg</th>
        <th>Nome Fantasia</th>
        <th>Razao Social</th>
        <th>Cnpj</th>
        <th>Ie</th>
        <th>Telefone</th>
        <th>Celular</th>
        <th>Data Nascimento</th>
        <th>Sexo</th>
        <th>Receber Informativos</th>
        <th>Receber Email</th>
        <th>Ativado</th>
        <th>Receber Sms</th>
        <th>Data Atualizado</th>
        <th>Data Criado</th>
        <th>Data Deletado</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($clientes as $cliente)
        <tr>
            <td>{!! $cliente->profissional !!}</td>
            <td>{!! $cliente->parceiro !!}</td>
            <td>{!! $cliente->tipo !!}</td>
            <td>{!! $cliente->nome !!}</td>
            <td>{!! $cliente->email !!}</td>
            <td>{!! $cliente->senha !!}</td>
            <td>{!! $cliente->cpf !!}</td>
            <td>{!! $cliente->rg !!}</td>
            <td>{!! $cliente->nome_fantasia !!}</td>
            <td>{!! $cliente->razao_social !!}</td>
            <td>{!! $cliente->cnpj !!}</td>
            <td>{!! $cliente->ie !!}</td>
            <td>{!! $cliente->telefone !!}</td>
            <td>{!! $cliente->celular !!}</td>
            <td>{!! $cliente->data_nascimento !!}</td>
            <td>{!! $cliente->sexo !!}</td>
            <td>{!! $cliente->receber_informativos !!}</td>
            <td>{!! $cliente->receber_email !!}</td>
            <td>{!! $cliente->ativado !!}</td>
            <td>{!! $cliente->receber_sms !!}</td>
            <td>{!! $cliente->data_atualizado !!}</td>
            <td>{!! $cliente->data_criado !!}</td>
            <td>{!! $cliente->data_deletado !!}</td>
            <td>
                {!! Form::open(['route' => ['clientes.destroy', $cliente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('clientes.show', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('clientes.edit', [$cliente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>