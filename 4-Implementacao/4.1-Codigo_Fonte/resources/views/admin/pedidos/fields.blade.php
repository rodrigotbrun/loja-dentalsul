<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Forma Pagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_forma_pagamento', 'Id Forma Pagamento:') !!}
    {!! Form::number('id_forma_pagamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cliente', 'Id Cliente:') !!}
    {!! Form::number('id_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Endereco Entrega Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_endereco_entrega', 'Id Endereco Entrega:') !!}
    {!! Form::number('id_endereco_entrega', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cupom Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cupom_desconto', 'Id Cupom Desconto:') !!}
    {!! Form::number('id_cupom_desconto', null, ['class' => 'form-control']) !!}
</div>

<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', 'Ip:') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Navegador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('navegador', 'Navegador:') !!}
    {!! Form::text('navegador', null, ['class' => 'form-control']) !!}
</div>

<!-- Sistema Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sistema', 'Sistema:') !!}
    {!! Form::text('sistema', null, ['class' => 'form-control']) !!}
</div>

<!-- Preco Frete Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco_frete', 'Preco Frete:') !!}
    {!! Form::number('preco_frete', null, ['class' => 'form-control']) !!}
</div>

<!-- Peso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('peso', 'Peso:') !!}
    {!! Form::number('peso', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Compra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_compra', 'Total Compra:') !!}
    {!! Form::number('total_compra', null, ['class' => 'form-control']) !!}
</div>

<!-- Vl Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vl_desconto', 'Vl Desconto:') !!}
    {!! Form::number('vl_desconto', null, ['class' => 'form-control']) !!}
</div>

<!-- Vl Desconto Cartao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vl_desconto_cartao', 'Vl Desconto Cartao:') !!}
    {!! Form::number('vl_desconto_cartao', null, ['class' => 'form-control']) !!}
</div>

<!-- Vl Acrescimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vl_acrescimo', 'Vl Acrescimo:') !!}
    {!! Form::number('vl_acrescimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Pagar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_pagar', 'Total Pagar:') !!}
    {!! Form::number('total_pagar', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Quantidade Parcelas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quantidade_parcelas', 'Quantidade Parcelas:') !!}
    {!! Form::number('quantidade_parcelas', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Enviado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_enviado', 'Email Enviado:') !!}
    {!! Form::text('email_enviado', null, ['class' => 'form-control']) !!}
</div>

<!-- Ligacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ligacao', 'Ligacao:') !!}
    {!! Form::text('ligacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Sessao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sessao', 'Sessao:') !!}
    {!! Form::text('sessao', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Criado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_criado', 'Data Criado:') !!}
    {!! Form::date('data_criado', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Atualizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_atualizado', 'Data Atualizado:') !!}
    {!! Form::date('data_atualizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Finalizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_finalizado', 'Data Finalizado:') !!}
    {!! Form::date('data_finalizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Deletado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_deletado', 'Data Deletado:') !!}
    {!! Form::date('data_deletado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pedidos.index') !!}" class="btn btn-default">Cancel</a>
</div>
