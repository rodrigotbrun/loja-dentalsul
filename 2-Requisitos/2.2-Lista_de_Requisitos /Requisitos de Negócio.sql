CREATE TABLE clientes (
 id CHAR(10) NOT NULL,
 profissional CHAR(10),
 parceiro CHAR(10),
 tipo CHAR(10),
 nome CHAR(10),
 email CHAR(10),
 senha CHAR(10),
 cpf CHAR(10),
 rg CHAR(10),
 nome_fantasia CHAR(10),
 razao_social CHAR(10),
 cnpj CHAR(10),
 ie CHAR(10),
 telefone CHAR(10),
 celular CHAR(10),
 data_nascimento CHAR(10),
 sexo CHAR(10),
 receber_informativos CHAR(10),
 receber_email CHAR(10),
 ativado CHAR(10),
 receber_sms CHAR(10),
 data_atualizado CHAR(10),
 data_criado CHAR(10),
 data_deletado CHAR(10)
);

ALTER TABLE clientes ADD CONSTRAINT PK_clientes PRIMARY KEY (id);


CREATE TABLE clientes_enderecos (
 id CHAR(10) NOT NULL,
 id_cliente CHAR(10),
 principal CHAR(10),
 entrega CHAR(10),
 cep CHAR(10),
 rua CHAR(10),
 complemento CHAR(10),
 numero CHAR(10),
 bairro CHAR(10),
 cidade CHAR(10),
 uf CHAR(10),
 ponto_referencia CHAR(10)
);

ALTER TABLE clientes_enderecos ADD CONSTRAINT PK_clientes_enderecos PRIMARY KEY (id);

CREATE UNIQUE INDEX ENDERECO_PRINCIPAL_UNICO ON CLIENTES_ENDERECOS (id_cliente,principal);


CREATE TABLE cupons_desconto (
 id CHAR(10) NOT NULL
);

ALTER TABLE cupons_desconto ADD CONSTRAINT PK_cupons_desconto PRIMARY KEY (id);


CREATE TABLE departamentos (
 id CHAR(10) NOT NULL,
 nome CHAR(10),
 alias CHAR(10),
 palavras_chave CHAR(10),
 data_atualizado CHAR(10),
 data_criado CHAR(10),
 data_deletado CHAR(10),
 follow CHAR(10),
 indexar CHAR(10),
 visivel CHAR(10),
 menu_superior CHAR(10),
 menu_lateral CHAR(10)
);

ALTER TABLE departamentos ADD CONSTRAINT PK_departamentos PRIMARY KEY (id);


CREATE TABLE dicas (
 id CHAR(10) NOT NULL
);

ALTER TABLE dicas ADD CONSTRAINT PK_dicas PRIMARY KEY (id);


CREATE TABLE Entity12 (
);


CREATE TABLE formas_pagamento (
 id CHAR(10) NOT NULL
);

ALTER TABLE formas_pagamento ADD CONSTRAINT PK_formas_pagamento PRIMARY KEY (id);


CREATE TABLE garantias (
);


CREATE TABLE marcas (
 id CHAR(10) NOT NULL,
 nome CHAR(10),
 alias CHAR(10),
 palavras_chave CHAR(10),
 diretorio CHAR(10),
 follow CHAR(10),
 indexar CHAR(10),
 visivel CHAR(10),
 data_atualizado CHAR(10),
 data_criado CHAR(10),
 data_deletado CHAR(10)
);

ALTER TABLE marcas ADD CONSTRAINT PK_marcas PRIMARY KEY (id);


CREATE TABLE pedidos (
 id CHAR(10) NOT NULL,
 id_forma_pagamento CHAR(10) NOT NULL,
 id_cliente CHAR(10) NOT NULL,
 id_endereco_entrega CHAR(10),
 id_cupom_desconto CHAR(10),
 data_criado CHAR(10),
 data_atualizado CHAR(10),
 data_finalizado CHAR(10),
 data_deletado CHAR(10),
 ip CHAR(10),
 navegador CHAR(10),
 sistema CHAR(10),
 preco_frete CHAR(10),
 frete_regiao CHAR(10),
 peso CHAR(10),
 total_compra CHAR(10),
 vl_desconto CHAR(10),
 vl_desconto_cartao CHAR(10),
 vl_acrescimo CHAR(10),
 total_pagar CHAR(10),
 status CHAR(10),
 tipo_frete CHAR(10),
 quantidade_parcelas CHAR(10),
 email_enviado CHAR(10),
 ligacao CHAR(10),
 sessao CHAR(10)
);

ALTER TABLE pedidos ADD CONSTRAINT PK_pedidos PRIMARY KEY (id);


CREATE TABLE redatores (
 id CHAR(10) NOT NULL
);

ALTER TABLE redatores ADD CONSTRAINT PK_redatores PRIMARY KEY (id);


CREATE TABLE sugestoes (
 id CHAR(10) NOT NULL,
 id_cliente CHAR(10)
);

ALTER TABLE sugestoes ADD CONSTRAINT PK_sugestoes PRIMARY KEY (id);


CREATE TABLE templates_antendimento (
 id CHAR(10) NOT NULL
);

ALTER TABLE templates_antendimento ADD CONSTRAINT PK_templates_antendimento PRIMARY KEY (id);


CREATE TABLE artigos (
 id CHAR(10) NOT NULL,
 id_redator CHAR(10)
);

ALTER TABLE artigos ADD CONSTRAINT PK_artigos PRIMARY KEY (id);


CREATE TABLE avaliacoes (
 id CHAR(10) NOT NULL,
 id_cliente CHAR(10)
);

ALTER TABLE avaliacoes ADD CONSTRAINT PK_avaliacoes PRIMARY KEY (id);


CREATE TABLE categorias (
 id CHAR(10) NOT NULL,
 id_departamento CHAR(10) NOT NULL,
 nome CHAR(10),
 alias CHAR(10),
 palavras_chave CHAR(10),
 data_atualizado CHAR(10),
 data_criado CHAR(10),
 data_deletado CHAR(10),
 follow CHAR(10),
 indexar CHAR(10),
 visivel CHAR(10),
 menu_superior CHAR(10),
 menu_lateral CHAR(10)
);

ALTER TABLE categorias ADD CONSTRAINT PK_categorias PRIMARY KEY (id);


CREATE TABLE guias (
 id CHAR(10) NOT NULL,
 id_redator CHAR(10)
);

ALTER TABLE guias ADD CONSTRAINT PK_guias PRIMARY KEY (id);


CREATE TABLE mensagens_contato (
 id CHAR(10) NOT NULL,
 id_cliente CHAR(10),
 id_template_atendimento CHAR(10)
);

ALTER TABLE mensagens_contato ADD CONSTRAINT PK_mensagens_contato PRIMARY KEY (id);


CREATE TABLE subcategorias (
 id CHAR(10) NOT NULL,
 id_categoria CHAR(10) NOT NULL,
 nome CHAR(10),
 alias CHAR(10),
 palavras_chave CHAR(10),
 data_atualizado CHAR(10),
 data_criado CHAR(10),
 data_deletado CHAR(10),
 follow CHAR(10),
 indexar CHAR(10),
 visivel CHAR(10),
 menu_superior CHAR(10),
 menu_lateral CHAR(10)
);

ALTER TABLE subcategorias ADD CONSTRAINT PK_subcategorias PRIMARY KEY (id);


CREATE TABLE produtos (
 id CHAR(10) NOT NULL,
 id_subcategoria CHAR(10) NOT NULL,
 id_marca CHAR(10) NOT NULL,
 nome CHAR(10),
 alias CHAR(10),
 nome_agregador CHAR(10),
 nome_busca CHAR(10),
 mostrar_busca CHAR(10),
 tipo_lista CHAR(10),
 disponibilidade CHAR(10),
 data_disponibilidade CHAR(10),
 qtd_dias_dispor CHAR(10),
 venda_sem_estoque CHAR(10),
 estoque_redutor_produto CHAR(10),
 codigo_referencia CHAR(10),
 preco CHAR(10),
 depreco CHAR(10),
 peso CHAR(10),
 descricao CHAR(10),
 visivel CHAR(10),
 data_atualizado CHAR(10),
 estoque CHAR(10),
 mostrar_vitrine CHAR(10),
 flag CHAR(10),
 tipo_frete CHAR(10),
 atacado CHAR(10),
 lancamento CHAR(10),
 valor_frete CHAR(10),
 frete_gratis CHAR(10),
 frete_gratis_regiao CHAR(10),
 comprimento CHAR(10),
 largura CHAR(10),
 altura CHAR(10),
 permite_amostra CHAR(10),
 permite_pac CHAR(10),
 permite_sedex CHAR(10),
 permite_esedex CHAR(10),
 permite_transportadora CHAR(10),
 sugerido CHAR(10),
 mostrar_acessorio CHAR(10),
 codigo_mercadolivre CHAR(10),
 titulo_mercadolivre CHAR(10),
 subtitulo_mercadolivre CHAR(10),
 palavras_chave CHAR(10),
 follow CHAR(10),
 indexar CHAR(10),
 desconto_pessoa CHAR(10),
 frete_individual CHAR(10),
 unidade CHAR(10),
 codigo_todaoferta CHAR(10),
 titulo_todaoferta CHAR(10),
 categoria_todaoferta CHAR(10),
 subcategoria_todaoferta CHAR(10),
 codigo_buscape CHAR(10),
 data_criado CHAR(10),
 data_deletado DATE
);

ALTER TABLE produtos ADD CONSTRAINT PK_produtos PRIMARY KEY (id);


CREATE TABLE produtos_grade (
 id CHAR(10) NOT NULL,
 id_produto CHAR(10) NOT NULL,
 identificador CHAR(10),
 nome CHAR(10),
 valor CHAR(10),
 mesmo_preco CHAR(10),
 visivel CHAR(10),
 nome_grade CHAR(10),
 data_criado CHAR(10),
 data_atualizado CHAR(10),
 data_deletado CHAR(10)
);

ALTER TABLE produtos_grade ADD CONSTRAINT PK_produtos_grade PRIMARY KEY (id);


CREATE TABLE seo (
 id CHAR(10) NOT NULL,
 id_departamento CHAR(10),
 id_categoria CHAR(10) NOT NULL,
 id_subcategoria CHAR(10),
 id_marca CHAR(10),
 id_produto CHAR(10),
 id_dica CHAR(10),
 id_guia CHAR(10),
 id_artigo CHAR(10),
 alias CHAR(10)
);

ALTER TABLE seo ADD CONSTRAINT PK_seo PRIMARY KEY (id);


CREATE TABLE pedidos_itens (
 id CHAR(10) NOT NULL,
 id_produto CHAR(10),
 preco CHAR(10),
 quantidade CHAR(10),
 vl_desconto CHAR(10),
 total_pagar CHAR(10),
 total_produto CHAR(10),
 peso CHAR(10),
 disponibilidade CHAR(10),
 variacao CHAR(10),
 tipo CHAR(10),
 data_atualizado CHAR(10),
 data_criado CHAR(10),
 data_deletado CHAR(10),
 id_0 CHAR(10)
);

ALTER TABLE pedidos_itens ADD CONSTRAINT PK_pedidos_itens PRIMARY KEY (id);


ALTER TABLE clientes_enderecos ADD CONSTRAINT FK_clientes_enderecos_0 FOREIGN KEY (id_cliente) REFERENCES clientes (id);


ALTER TABLE pedidos ADD CONSTRAINT FK_pedidos_0 FOREIGN KEY (id_forma_pagamento) REFERENCES formas_pagamento (id);
ALTER TABLE pedidos ADD CONSTRAINT FK_pedidos_1 FOREIGN KEY (id_cliente) REFERENCES clientes (id);
ALTER TABLE pedidos ADD CONSTRAINT FK_pedidos_2 FOREIGN KEY (id_endereco_entrega) REFERENCES clientes_enderecos (id);
ALTER TABLE pedidos ADD CONSTRAINT FK_pedidos_3 FOREIGN KEY (id_cupom_desconto) REFERENCES cupons_desconto (id);


ALTER TABLE sugestoes ADD CONSTRAINT FK_sugestoes_0 FOREIGN KEY (id_cliente) REFERENCES clientes (id);


ALTER TABLE artigos ADD CONSTRAINT FK_artigos_0 FOREIGN KEY (id_redator) REFERENCES redatores (id);


ALTER TABLE avaliacoes ADD CONSTRAINT FK_avaliacoes_0 FOREIGN KEY (id_cliente) REFERENCES clientes (id);


ALTER TABLE categorias ADD CONSTRAINT FK_categorias_0 FOREIGN KEY (id_departamento) REFERENCES departamentos (id);


ALTER TABLE guias ADD CONSTRAINT FK_guias_0 FOREIGN KEY (id_redator) REFERENCES redatores (id);


ALTER TABLE mensagens_contato ADD CONSTRAINT FK_mensagens_contato_0 FOREIGN KEY (id_cliente) REFERENCES clientes (id);
ALTER TABLE mensagens_contato ADD CONSTRAINT FK_mensagens_contato_1 FOREIGN KEY (id_template_atendimento) REFERENCES templates_antendimento (id);


ALTER TABLE subcategorias ADD CONSTRAINT FK_subcategorias_0 FOREIGN KEY (id_categoria) REFERENCES categorias (id);


ALTER TABLE produtos ADD CONSTRAINT FK_produtos_0 FOREIGN KEY (id_subcategoria) REFERENCES subcategorias (id);
ALTER TABLE produtos ADD CONSTRAINT FK_produtos_1 FOREIGN KEY (id_marca) REFERENCES marcas (id);


ALTER TABLE produtos_grade ADD CONSTRAINT FK_produtos_grade_0 FOREIGN KEY (id_produto) REFERENCES produtos (id);


ALTER TABLE seo ADD CONSTRAINT FK_seo_0 FOREIGN KEY (id_departamento) REFERENCES departamentos (id);
ALTER TABLE seo ADD CONSTRAINT FK_seo_1 FOREIGN KEY (id_categoria) REFERENCES categorias (id);
ALTER TABLE seo ADD CONSTRAINT FK_seo_2 FOREIGN KEY (id_subcategoria) REFERENCES subcategorias (id);
ALTER TABLE seo ADD CONSTRAINT FK_seo_3 FOREIGN KEY (id_marca) REFERENCES marcas (id);
ALTER TABLE seo ADD CONSTRAINT FK_seo_4 FOREIGN KEY (id_produto) REFERENCES produtos (id);
ALTER TABLE seo ADD CONSTRAINT FK_seo_5 FOREIGN KEY (id_dica) REFERENCES dicas (id);
ALTER TABLE seo ADD CONSTRAINT FK_seo_6 FOREIGN KEY (id_guia) REFERENCES guias (id);
ALTER TABLE seo ADD CONSTRAINT FK_seo_7 FOREIGN KEY (id_artigo) REFERENCES artigos (id);


ALTER TABLE pedidos_itens ADD CONSTRAINT FK_pedidos_itens_0 FOREIGN KEY (id_produto) REFERENCES produtos (id);
ALTER TABLE pedidos_itens ADD CONSTRAINT FK_pedidos_itens_1 FOREIGN KEY (id_0) REFERENCES pedidos (id);


