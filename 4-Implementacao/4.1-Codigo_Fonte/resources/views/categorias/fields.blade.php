<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Departamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_departamento', 'Id Departamento:') !!}
    {!! Form::number('id_departamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nome', 'Nome:') !!}
    {!! Form::text('nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', 'Alias:') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Follow Field -->
<div class="form-group col-sm-6">
    {!! Form::label('follow', 'Follow:') !!}
    {!! Form::text('follow', null, ['class' => 'form-control']) !!}
</div>

<!-- Palavras Chave Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('palavras_chave', 'Palavras Chave:') !!}
    {!! Form::textarea('palavras_chave', null, ['class' => 'form-control']) !!}
</div>

<!-- Indexar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('indexar', 'Indexar:') !!}
    {!! Form::text('indexar', null, ['class' => 'form-control']) !!}
</div>

<!-- Menu Superior Field -->
<div class="form-group col-sm-6">
    {!! Form::label('menu_superior', 'Menu Superior:') !!}
    {!! Form::text('menu_superior', null, ['class' => 'form-control']) !!}
</div>

<!-- Visivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visivel', 'Visivel:') !!}
    {!! Form::text('visivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Menu Lateral Field -->
<div class="form-group col-sm-6">
    {!! Form::label('menu_lateral', 'Menu Lateral:') !!}
    {!! Form::text('menu_lateral', null, ['class' => 'form-control']) !!}
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
    <a href="{!! route('categorias.index') !!}" class="btn btn-default">Cancel</a>
</div>
