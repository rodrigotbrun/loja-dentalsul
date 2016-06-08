<table class="table table-responsive" id="produtos-table">
    <thead>
        <th>Id Subcategoria</th>
        <th>Id Marca</th>
        <th>Nome</th>
        <th>Alias</th>
        <th>Nome Agregador</th>
        <th>Nome Busca</th>
        <th>Mostrar Busca</th>
        <th>Tipo Lista</th>
        <th>Disponibilidade</th>
        <th>Data Disponibilidade</th>
        <th>Qtd Dias Dispor</th>
        <th>Venda Sem Estoque</th>
        <th>Estoque Redutor Produto</th>
        <th>Codigo Referencia</th>
        <th>Preco</th>
        <th>Depreco</th>
        <th>Peso</th>
        <th>Descricao</th>
        <th>Visivel</th>
        <th>Estoque</th>
        <th>Mostrar Vitrine</th>
        <th>Flag</th>
        <th>Tipo Frete</th>
        <th>Atacado</th>
        <th>Lancamento</th>
        <th>Valor Frete</th>
        <th>Valor Frete Somar</th>
        <th>Frete Gratis</th>
        <th>Frete Gratis Regiao</th>
        <th>Comprimento</th>
        <th>Largura</th>
        <th>Altura</th>
        <th>Permite Amostra</th>
        <th>Permite Pac</th>
        <th>Permite Sedex</th>
        <th>Permite Esedex</th>
        <th>Permite Transportadora</th>
        <th>Codigo Mercadolivre</th>
        <th>Titulo Mercadolivre</th>
        <th>Subtitulo Mercadolivre</th>
        <th>Palavras Chave</th>
        <th>Follow</th>
        <th>Indexar</th>
        <th>Desconto Pessoa</th>
        <th>Frete Individual</th>
        <th>Codigo Todaoferta</th>
        <th>Titulo Todaoferta</th>
        <th>Categoria Todaoferta</th>
        <th>Subcategoria Todaoferta</th>
        <th>Codigo Buscape</th>
        <th>Data Criado</th>
        <th>Data Atualizado</th>
        <th>Data Deletado</th>
        <th>Tipo Estoque</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($produtos as $produto)
        <tr>
            <td>{!! $produto->id_subcategoria !!}</td>
            <td>{!! $produto->id_marca !!}</td>
            <td>{!! $produto->nome !!}</td>
            <td>{!! $produto->alias !!}</td>
            <td>{!! $produto->nome_agregador !!}</td>
            <td>{!! $produto->nome_busca !!}</td>
            <td>{!! $produto->mostrar_busca !!}</td>
            <td>{!! $produto->tipo_lista !!}</td>
            <td>{!! $produto->disponibilidade !!}</td>
            <td>{!! $produto->data_disponibilidade !!}</td>
            <td>{!! $produto->qtd_dias_dispor !!}</td>
            <td>{!! $produto->venda_sem_estoque !!}</td>
            <td>{!! $produto->estoque_redutor_produto !!}</td>
            <td>{!! $produto->codigo_referencia !!}</td>
            <td>{!! $produto->preco !!}</td>
            <td>{!! $produto->depreco !!}</td>
            <td>{!! $produto->peso !!}</td>
            <td>{!! $produto->descricao !!}</td>
            <td>{!! $produto->visivel !!}</td>
            <td>{!! $produto->estoque !!}</td>
            <td>{!! $produto->mostrar_vitrine !!}</td>
            <td>{!! $produto->flag !!}</td>
            <td>{!! $produto->tipo_frete !!}</td>
            <td>{!! $produto->atacado !!}</td>
            <td>{!! $produto->lancamento !!}</td>
            <td>{!! $produto->valor_frete !!}</td>
            <td>{!! $produto->valor_frete_somar !!}</td>
            <td>{!! $produto->frete_gratis !!}</td>
            <td>{!! $produto->frete_gratis_regiao !!}</td>
            <td>{!! $produto->comprimento !!}</td>
            <td>{!! $produto->largura !!}</td>
            <td>{!! $produto->altura !!}</td>
            <td>{!! $produto->permite_amostra !!}</td>
            <td>{!! $produto->permite_pac !!}</td>
            <td>{!! $produto->permite_sedex !!}</td>
            <td>{!! $produto->permite_esedex !!}</td>
            <td>{!! $produto->permite_transportadora !!}</td>
            <td>{!! $produto->codigo_mercadolivre !!}</td>
            <td>{!! $produto->titulo_mercadolivre !!}</td>
            <td>{!! $produto->subtitulo_mercadolivre !!}</td>
            <td>{!! $produto->palavras_chave !!}</td>
            <td>{!! $produto->follow !!}</td>
            <td>{!! $produto->indexar !!}</td>
            <td>{!! $produto->desconto_pessoa !!}</td>
            <td>{!! $produto->frete_individual !!}</td>
            <td>{!! $produto->codigo_todaoferta !!}</td>
            <td>{!! $produto->titulo_todaoferta !!}</td>
            <td>{!! $produto->categoria_todaoferta !!}</td>
            <td>{!! $produto->subcategoria_todaoferta !!}</td>
            <td>{!! $produto->codigo_buscape !!}</td>
            <td>{!! $produto->data_criado !!}</td>
            <td>{!! $produto->data_atualizado !!}</td>
            <td>{!! $produto->data_deletado !!}</td>
            <td>{!! $produto->tipo_estoque !!}</td>
            <td>
                {!! Form::open(['route' => ['produtos.destroy', $produto->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('produtos.show', [$produto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('produtos.edit', [$produto->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>