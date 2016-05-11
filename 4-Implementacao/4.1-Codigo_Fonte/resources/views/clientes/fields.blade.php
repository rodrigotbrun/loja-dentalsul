<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Profissional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profissional', 'Profissional:') !!}
    {!! Form::text('profissional', null, ['class' => 'form-control']) !!}
</div>

<!-- Parceiro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('parceiro', 'Parceiro:') !!}
    {!! Form::text('parceiro', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', 'Tipo:') !!}
    {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('senha', 'Senha:') !!}
    {!! Form::text('senha', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpf', 'Cpf:') !!}
    {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Rg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rg', 'Rg:') !!}
    {!! Form::text('rg', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Fantasia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome_fantasia', 'Nome Fantasia:') !!}
    {!! Form::text('nome_fantasia', null, ['class' => 'form-control']) !!}
</div>

<!-- Razao Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('razao_social', 'Razao Social:') !!}
    {!! Form::text('razao_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj', 'Cnpj:') !!}
    {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Ie Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ie', 'Ie:') !!}
    {!! Form::text('ie', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone', 'Telefone:') !!}
    {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Nascimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_nascimento', 'Data Nascimento:') !!}
    {!! Form::date('data_nascimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control']) !!}
</div>

<!-- Receber Informativos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_informativos', 'Receber Informativos:') !!}
    {!! Form::text('receber_informativos', null, ['class' => 'form-control']) !!}
</div>

<!-- Receber Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_email', 'Receber Email:') !!}
    {!! Form::text('receber_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Ativado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ativado', 'Ativado:') !!}
    {!! Form::text('ativado', null, ['class' => 'form-control']) !!}
</div>

<!-- Receber Sms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('receber_sms', 'Receber Sms:') !!}
    {!! Form::text('receber_sms', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Atualizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_atualizado', 'Data Atualizado:') !!}
    {!! Form::date('data_atualizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Criado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_criado', 'Data Criado:') !!}
    {!! Form::date('data_criado', null, ['class' => 'form-control']) !!}
</div>

<!-- Data Deletado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('data_deletado', 'Data Deletado:') !!}
    {!! Form::date('data_deletado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('clientes.index') !!}" class="btn btn-default">Cancel</a>
</div>
