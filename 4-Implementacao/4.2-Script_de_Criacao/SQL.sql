-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema loja_dentalsul
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `loja_dentalsul` ;

-- -----------------------------------------------------
-- Schema loja_dentalsul
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `loja_dentalsul` DEFAULT CHARACTER SET latin1 ;
USE `loja_dentalsul` ;

-- -----------------------------------------------------
-- Table `loja_dentalsul`.`redatores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`redatores` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`redatores` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`artigos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`artigos` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`artigos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_redator` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_artigos_0`
    FOREIGN KEY (`id_redator`)
    REFERENCES `loja_dentalsul`.`redatores` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_artigos_0` ON `loja_dentalsul`.`artigos` (`id_redator` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`clientes` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`clientes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `profissional` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `parceiro` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `tipo` ENUM('PF', 'PJ') NOT NULL DEFAULT 'PF',
  `nome` VARCHAR(40) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `senha` VARCHAR(120) NOT NULL,
  `cpf` VARCHAR(15) NULL,
  `rg` VARCHAR(15) NULL DEFAULT NULL,
  `nome_fantasia` VARCHAR(40) NULL DEFAULT NULL,
  `razao_social` VARCHAR(40) NULL DEFAULT NULL,
  `cnpj` VARCHAR(20) NULL DEFAULT NULL,
  `ie` VARCHAR(20) NULL DEFAULT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `celular` VARCHAR(20) NULL DEFAULT NULL,
  `data_nascimento` DATE NOT NULL,
  `sexo` ENUM('M', 'F') NOT NULL DEFAULT 'M',
  `receber_informativos` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `receber_email` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `ativado` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `receber_sms` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `data_atualizado` DATETIME NOT NULL,
  `data_criado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
ROW_FORMAT = Default;

CREATE UNIQUE INDEX `email_UNIQUE` ON `loja_dentalsul`.`clientes` (`email` ASC);

CREATE INDEX `nome_idx` ON `loja_dentalsul`.`clientes` (`nome` ASC);

CREATE INDEX `senha_idx` ON `loja_dentalsul`.`clientes` (`senha` ASC);

CREATE INDEX `cpf_INDEX` ON `loja_dentalsul`.`clientes` (`cpf` ASC);

CREATE INDEX `telefone_INDEX` ON `loja_dentalsul`.`clientes` (`telefone` ASC);

CREATE INDEX `sexo_INDEX` ON `loja_dentalsul`.`clientes` (`sexo` ASC);

CREATE INDEX `notificacoes_INDEX` ON `loja_dentalsul`.`clientes` (`receber_informativos` ASC, `receber_email` ASC, `receber_sms` ASC);

CREATE INDEX `ativado_INDEX` ON `loja_dentalsul`.`clientes` (`ativado` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`avaliacoes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`avaliacoes` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`avaliacoes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cliente` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_avaliacoes_0`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `loja_dentalsul`.`clientes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_avaliacoes_0` ON `loja_dentalsul`.`avaliacoes` (`id_cliente` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`departamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`departamentos` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`departamentos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(40) NOT NULL,
  `alias` VARCHAR(40) NOT NULL,
  `follow` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `palavras_chave` TEXT NULL DEFAULT NULL,
  `indexar` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `visivel` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_superior` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_lateral` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `data_atualizado` DATETIME NOT NULL,
  `data_criado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`categorias` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`categorias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_departamento` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(40) NOT NULL,
  `alias` VARCHAR(40) NOT NULL,
  `follow` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `palavras_chave` TEXT NULL DEFAULT NULL,
  `indexar` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_superior` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `visivel` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_lateral` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `data_atualizado` DATETIME NOT NULL,
  `data_criado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_categorias_0`
    FOREIGN KEY (`id_departamento`)
    REFERENCES `loja_dentalsul`.`departamentos` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_categorias_0` ON `loja_dentalsul`.`categorias` (`id_departamento` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`clientes_enderecos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`clientes_enderecos` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`clientes_enderecos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cliente` INT UNSIGNED NOT NULL,
  `principal` ENUM('S', 'N') NOT NULL DEFAULT 'N' COMMENT 'Endereço principal do cliente, DA CASA do cliente geralmente.',
  `entrega` ENUM('S', 'N') NOT NULL DEFAULT 'N' COMMENT 'Endereço de entrega do cliente. Quando não existir um endereço de entrega com flag S, o endereço principal é considerado.',
  `cep` VARCHAR(10) NOT NULL,
  `rua` VARCHAR(40) NOT NULL,
  `complemento` VARCHAR(100) NULL DEFAULT NULL,
  `numero` VARCHAR(30) NOT NULL,
  `bairro` VARCHAR(25) NOT NULL,
  `cidade` VARCHAR(25) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `ponto_referencia` VARCHAR(250) NULL DEFAULT NULL,
  `data_deletado` DATETIME NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_clientes_enderecos_0`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `loja_dentalsul`.`clientes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE UNIQUE INDEX `ENDERECO_PRINCIPAL_UNICO` ON `loja_dentalsul`.`clientes_enderecos` (`id_cliente` ASC, `principal` ASC);

CREATE UNIQUE INDEX `end_principal_UNIQUE` ON `loja_dentalsul`.`clientes_enderecos` (`id_cliente` ASC, `principal` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`cupons_desconto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`cupons_desconto` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`cupons_desconto` (
  `id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`dicas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`dicas` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`dicas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`formas_pagamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`formas_pagamento` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`formas_pagamento` (
  `id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`guias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`guias` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`guias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_redator` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_guias_0`
    FOREIGN KEY (`id_redator`)
    REFERENCES `loja_dentalsul`.`redatores` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_guias_0` ON `loja_dentalsul`.`guias` (`id_redator` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`marcas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`marcas` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`marcas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(40) NOT NULL,
  `alias` VARCHAR(40) NOT NULL,
  `diretorio` VARCHAR(60) NULL DEFAULT NULL,
  `follow` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `palavras_chave` TEXT NULL DEFAULT NULL,
  `indexar` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_superior` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `visivel` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_lateral` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `data_atualizado` DATETIME NOT NULL,
  `data_criado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`templates_antendimento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`templates_antendimento` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`templates_antendimento` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`mensagens_contato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`mensagens_contato` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`mensagens_contato` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cliente` INT UNSIGNED NOT NULL,
  `id_template_atendimento` INT UNSIGNED NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_mensagens_contato_0`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `loja_dentalsul`.`clientes` (`id`),
  CONSTRAINT `FK_mensagens_contato_1`
    FOREIGN KEY (`id_template_atendimento`)
    REFERENCES `loja_dentalsul`.`templates_antendimento` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_mensagens_contato_0` ON `loja_dentalsul`.`mensagens_contato` (`id_cliente` ASC);

CREATE INDEX `FK_mensagens_contato_1` ON `loja_dentalsul`.`mensagens_contato` (`id_template_atendimento` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`pedidos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`pedidos` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`pedidos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_forma_pagamento` INT UNSIGNED NOT NULL,
  `id_cliente` INT UNSIGNED NOT NULL,
  `id_endereco_entrega` INT UNSIGNED NOT NULL,
  `id_cupom_desconto` INT UNSIGNED NULL,
  `ip` VARCHAR(20) NULL DEFAULT NULL COMMENT 'IP da maquina do comprador\n',
  `navegador` VARCHAR(200) NULL DEFAULT NULL,
  `sistema` VARCHAR(100) NULL DEFAULT NULL,
  `preco_frete` DOUBLE NOT NULL DEFAULT 0,
  `peso` DOUBLE NOT NULL DEFAULT 0,
  `total_compra` DOUBLE NOT NULL DEFAULT 0,
  `vl_desconto` DOUBLE NOT NULL DEFAULT 0,
  `vl_desconto_cartao` DOUBLE NOT NULL DEFAULT 0,
  `vl_acrescimo` DOUBLE NOT NULL DEFAULT 0,
  `total_pagar` DOUBLE NOT NULL DEFAULT 0,
  `status` INT NULL DEFAULT NULL,
  `quantidade_parcelas` INT UNSIGNED NOT NULL DEFAULT 1,
  `email_enviado` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `ligacao` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `sessao` VARCHAR(80) NULL DEFAULT NULL,
  `data_criado` DATETIME NOT NULL,
  `data_atualizado` DATETIME NOT NULL,
  `data_finalizado` DATETIME NULL DEFAULT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_pedidos_0`
    FOREIGN KEY (`id_forma_pagamento`)
    REFERENCES `loja_dentalsul`.`formas_pagamento` (`id`),
  CONSTRAINT `FK_pedidos_1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `loja_dentalsul`.`clientes` (`id`),
  CONSTRAINT `FK_pedidos_2`
    FOREIGN KEY (`id_endereco_entrega`)
    REFERENCES `loja_dentalsul`.`clientes_enderecos` (`id`),
  CONSTRAINT `FK_pedidos_3`
    FOREIGN KEY (`id_cupom_desconto`)
    REFERENCES `loja_dentalsul`.`cupons_desconto` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_pedidos_0` ON `loja_dentalsul`.`pedidos` (`id_forma_pagamento` ASC);

CREATE INDEX `FK_pedidos_1` ON `loja_dentalsul`.`pedidos` (`id_cliente` ASC);

CREATE INDEX `FK_pedidos_2` ON `loja_dentalsul`.`pedidos` (`id_endereco_entrega` ASC);

CREATE INDEX `FK_pedidos_3` ON `loja_dentalsul`.`pedidos` (`id_cupom_desconto` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`subcategorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`subcategorias` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`subcategorias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_categoria` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(40) NOT NULL,
  `alias` VARCHAR(40) NOT NULL,
  `palavras_chave` TEXT NULL DEFAULT NULL,
  `follow` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `indexar` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `visivel` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_superior` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `menu_lateral` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `data_atualizado` DATETIME NOT NULL,
  `data_criado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_subcategorias_0`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `loja_dentalsul`.`categorias` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_subcategorias_0` ON `loja_dentalsul`.`subcategorias` (`id_categoria` ASC);

CREATE UNIQUE INDEX `nome_UNIQUE` ON `loja_dentalsul`.`subcategorias` (`nome` ASC);

CREATE UNIQUE INDEX `alias_UNIQUE` ON `loja_dentalsul`.`subcategorias` (`alias` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`produtos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`produtos` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`produtos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_subcategoria` INT UNSIGNED NOT NULL,
  `id_marca` INT UNSIGNED NOT NULL,
  `nome` VARCHAR(40) NOT NULL,
  `alias` VARCHAR(50) NOT NULL COMMENT 'Apelido',
  `nome_agregador` VARCHAR(40) NULL COMMENT 'Nome agregador do produto.',
  `nome_busca` VARCHAR(40) NOT NULL COMMENT 'Titulo do produto na busca.',
  `mostrar_busca` ENUM('S', 'N') NOT NULL DEFAULT 'S' COMMENT 'Mostrar produto nos resultados da busca',
  `tipo_lista` ENUM('L', 'G') NOT NULL DEFAULT 'L' COMMENT 'Tipo de listagem do produto, na pagina de detalhes do produto. (L para Lista e G para Grade).\n\nQuando Grade, usa dados da tabela produtos_grade',
  `disponibilidade` VARCHAR(40) NULL DEFAULT 'Disponível' COMMENT 'O status de disponibilidade do produto. O padrão é Disponível, mas pode ser por exemplo:  5 dias.\n\nÉ apenas uma mensagem para o usuário final e para o funcionário da expedição\n',
  `data_disponibilidade` DATE NULL DEFAULT NULL COMMENT 'Data de disponibilidade do produto',
  `qtd_dias_dispor` INT NULL DEFAULT NULL COMMENT 'Quantidade de dias, que o produto precisa para ser disponibilizado pela empresa',
  `venda_sem_estoque` ENUM('S', 'N') NOT NULL DEFAULT 'N' COMMENT 'Permitir venda de produtos sem estoque',
  `estoque_redutor_produto` INT NULL DEFAULT NULL COMMENT 'Número para ser descontado da quantidade em estoque.\n\nUsado para garantir que existem produtos em estoque.\n',
  `codigo_referencia` VARCHAR(20) NULL DEFAULT NULL COMMENT 'Código de referência para este produto, pode conter qualquer caractere.',
  `preco` DOUBLE UNSIGNED NOT NULL COMMENT 'Preco total do produto\n',
  `depreco` DOUBLE UNSIGNED NOT NULL COMMENT 'Preco do produto que sera vendido na loja ',
  `peso` DOUBLE NULL DEFAULT NULL,
  `descricao` TEXT NULL DEFAULT NULL,
  `visivel` ENUM('S', 'N') NULL DEFAULT NULL,
  `estoque` DOUBLE NULL DEFAULT NULL COMMENT 'Quantidade em estoque do produto. ',
  `mostrar_vitrine` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `flag` VARCHAR(10) NULL DEFAULT NULL COMMENT 'Flag de controle de listagem e exibição de produto.',
  `tipo_frete` ENUM('SEDEX', 'E-SEDEX', 'PAC', 'TRANSPORTADORA') NOT NULL DEFAULT 'SEDEX' COMMENT 'Tipo de frete padrão ou recomendado para este produto.',
  `atacado` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `lancamento` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `valor_frete` DOUBLE UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Valor padrão do frete do produto. Quando o campo for Zero, o valor do frete será calculado no ato da compra. Quando informado neste campo o valor do frete será considerado ESTE, OU, somado com o valor do frete no ato da compra. De acordo com o valor do campo  valor_frete_somar = S.',
  `valor_frete_somar` ENUM('S', 'N') NOT NULL DEFAULT 'N' COMMENT 'Flag que indica se o campo valor_frete deve ser somado com o calculo automático de frete.\n\nQuando S, valor_frete + Calculo no ato da compra do frete serão considerados. Quando N, apenas valor_frete sera considerado como frete do produto.',
  `frete_gratis` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `frete_gratis_regiao` VARCHAR(30) NULL DEFAULT NULL,
  `comprimento` DOUBLE NULL DEFAULT NULL,
  `largura` DOUBLE NULL DEFAULT NULL,
  `altura` DOUBLE NULL DEFAULT NULL,
  `permite_amostra` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `permite_pac` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `permite_sedex` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `permite_esedex` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `permite_transportadora` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `codigo_mercadolivre` VARCHAR(30) NULL DEFAULT NULL,
  `titulo_mercadolivre` VARCHAR(80) NULL DEFAULT NULL,
  `subtitulo_mercadolivre` VARCHAR(80) NULL DEFAULT NULL,
  `palavras_chave` TEXT NULL DEFAULT NULL,
  `follow` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `indexar` ENUM('S', 'N') NOT NULL DEFAULT 'S' COMMENT 'Produto deve ser indexado por sistemas de busca\n',
  `desconto_pessoa` DOUBLE NULL DEFAULT 0 COMMENT 'Desconto do produto por pessoa. CAMPO EM PORCENTAGEM',
  `frete_individual` ENUM('S', 'N') NOT NULL DEFAULT 'N' COMMENT 'O frete do produto é calculado individualmente ou não. Quando individual, o frete e calculado separadamente para cada Unidade do produto em estoque. Só é válido para tipo_estoque = UND',
  `codigo_todaoferta` VARCHAR(30) NULL DEFAULT NULL COMMENT 'Código (PK) do anuncio do produto no TodaOferta\n',
  `titulo_todaoferta` VARCHAR(80) NULL DEFAULT NULL COMMENT 'Título do produto opcional diferencial no anuncio do todaOferta',
  `categoria_todaoferta` VARCHAR(80) NULL DEFAULT NULL COMMENT 'Alias da categoria do todaoferta',
  `subcategoria_todaoferta` VARCHAR(80) NULL DEFAULT NULL COMMENT 'alias da subcategoria do todaoferta',
  `codigo_buscape` VARCHAR(30) NULL DEFAULT NULL COMMENT 'coding (PK) do produto no Busca-pé',
  `data_criado` DATETIME NOT NULL,
  `data_atualizado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  `tipo_estoque` ENUM('UND', 'PKG', 'PGR', 'VLI', 'VML') NOT NULL DEFAULT 'UND' COMMENT 'Tipo do estoque do produto. (\nUND = Unidade,\nPKG = Peso Kg,\nPGR = Peso g,\nVLI = Volume Litro,\nVML = Volume ml\n)',
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_produtos_0`
    FOREIGN KEY (`id_subcategoria`)
    REFERENCES `loja_dentalsul`.`subcategorias` (`id`),
  CONSTRAINT `FK_produtos_1`
    FOREIGN KEY (`id_marca`)
    REFERENCES `loja_dentalsul`.`marcas` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_produtos_0` ON `loja_dentalsul`.`produtos` (`id_subcategoria` ASC);

CREATE INDEX `FK_produtos_1` ON `loja_dentalsul`.`produtos` (`id_marca` ASC);

CREATE UNIQUE INDEX `alias_UNIQUE` ON `loja_dentalsul`.`produtos` (`alias` ASC);

CREATE INDEX `subcateogira_INDEX` ON `loja_dentalsul`.`produtos` (`id_subcategoria` ASC);

CREATE INDEX `marca_INDEX` ON `loja_dentalsul`.`produtos` (`id_marca` ASC);

CREATE INDEX `nome_INDEX` ON `loja_dentalsul`.`produtos` (`nome` ASC);

CREATE INDEX `alias_INDEX` ON `loja_dentalsul`.`produtos` (`alias` ASC);

CREATE INDEX `tipo_lista_INDEX` ON `loja_dentalsul`.`produtos` (`tipo_lista` ASC);

CREATE INDEX `estoque_INDEX` ON `loja_dentalsul`.`produtos` (`estoque` ASC, `tipo_estoque` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`pedidos_itens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`pedidos_itens` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`pedidos_itens` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_produto` INT UNSIGNED NOT NULL,
  `id_pedido` INT UNSIGNED NOT NULL,
  `preco` DOUBLE UNSIGNED NOT NULL,
  `quantidade` DOUBLE UNSIGNED NOT NULL,
  `tipo_quantidade` ENUM('UND', 'PKG', 'PGR', 'VLI', 'VML') NOT NULL DEFAULT 'UND' COMMENT 'Vide coluna tipo_estoque na tabela produtos',
  `vl_desconto` DOUBLE NOT NULL DEFAULT 0 COMMENT 'Valor total do desconto\n',
  `total_pagar` DOUBLE NOT NULL DEFAULT 0 COMMENT 'total a ser pago pelo cliente',
  `total_produto` DOUBLE NOT NULL DEFAULT 0,
  `peso` DOUBLE NULL DEFAULT NULL,
  `disponibilidade` VARCHAR(40) NULL DEFAULT NULL,
  `data_atualizado` DATETIME NOT NULL,
  `data_criado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_pedidos_itens_0`
    FOREIGN KEY (`id_produto`)
    REFERENCES `loja_dentalsul`.`produtos` (`id`),
  CONSTRAINT `fk_pedidos_itens_pedidos1`
    FOREIGN KEY (`id_pedido`)
    REFERENCES `loja_dentalsul`.`pedidos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_pedidos_itens_0` ON `loja_dentalsul`.`pedidos_itens` (`id_produto` ASC);

CREATE INDEX `fk_pedidos_itens_pedidos1_idx` ON `loja_dentalsul`.`pedidos_itens` (`id_pedido` ASC);

CREATE UNIQUE INDEX `produto_pedido_UNIQUE` ON `loja_dentalsul`.`pedidos_itens` (`id_produto` ASC, `id_pedido` ASC);

CREATE INDEX `venda_INDEX` ON `loja_dentalsul`.`pedidos_itens` (`preco` ASC, `quantidade` ASC, `tipo_quantidade` ASC);

CREATE INDEX `fin_INDEX` ON `loja_dentalsul`.`pedidos_itens` (`vl_desconto` ASC, `total_pagar` ASC, `total_produto` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`produtos_grade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`produtos_grade` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`produtos_grade` (
  `id` INT UNSIGNED NOT NULL,
  `id_produto` INT UNSIGNED NOT NULL,
  `identificador` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(100) NULL DEFAULT NULL,
  `valor` VARCHAR(100) NULL DEFAULT NULL,
  `nome_grade` VARCHAR(100) NULL DEFAULT NULL,
  `mesmo_preco` ENUM('S', 'N') NOT NULL DEFAULT 'N',
  `visivel` ENUM('S', 'N') NOT NULL DEFAULT 'S',
  `data_criado` DATETIME NOT NULL,
  `data_atualizado` DATETIME NOT NULL,
  `data_deletado` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_produtos_grade_0`
    FOREIGN KEY (`id_produto`)
    REFERENCES `loja_dentalsul`.`produtos` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_produtos_grade_0` ON `loja_dentalsul`.`produtos_grade` (`id_produto` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`seo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`seo` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`seo` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_departamento` INT UNSIGNED NULL DEFAULT NULL,
  `id_categoria` INT UNSIGNED NULL,
  `id_subcategoria` INT UNSIGNED NULL DEFAULT NULL,
  `id_marca` INT UNSIGNED NULL DEFAULT NULL,
  `id_produto` INT UNSIGNED NULL DEFAULT NULL,
  `id_dica` INT UNSIGNED NULL,
  `id_guia` INT UNSIGNED NULL DEFAULT NULL,
  `id_artigo` INT UNSIGNED NULL DEFAULT NULL,
  `alias` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_seo_0`
    FOREIGN KEY (`id_departamento`)
    REFERENCES `loja_dentalsul`.`departamentos` (`id`),
  CONSTRAINT `FK_seo_1`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `loja_dentalsul`.`categorias` (`id`),
  CONSTRAINT `FK_seo_2`
    FOREIGN KEY (`id_subcategoria`)
    REFERENCES `loja_dentalsul`.`subcategorias` (`id`),
  CONSTRAINT `FK_seo_3`
    FOREIGN KEY (`id_marca`)
    REFERENCES `loja_dentalsul`.`marcas` (`id`),
  CONSTRAINT `FK_seo_4`
    FOREIGN KEY (`id_produto`)
    REFERENCES `loja_dentalsul`.`produtos` (`id`),
  CONSTRAINT `FK_seo_5`
    FOREIGN KEY (`id_dica`)
    REFERENCES `loja_dentalsul`.`dicas` (`id`),
  CONSTRAINT `FK_seo_6`
    FOREIGN KEY (`id_guia`)
    REFERENCES `loja_dentalsul`.`guias` (`id`),
  CONSTRAINT `FK_seo_7`
    FOREIGN KEY (`id_artigo`)
    REFERENCES `loja_dentalsul`.`artigos` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_seo_0` ON `loja_dentalsul`.`seo` (`id_departamento` ASC);

CREATE INDEX `FK_seo_1` ON `loja_dentalsul`.`seo` (`id_categoria` ASC);

CREATE INDEX `FK_seo_2` ON `loja_dentalsul`.`seo` (`id_subcategoria` ASC);

CREATE INDEX `FK_seo_3` ON `loja_dentalsul`.`seo` (`id_marca` ASC);

CREATE INDEX `FK_seo_4` ON `loja_dentalsul`.`seo` (`id_produto` ASC);

CREATE INDEX `FK_seo_5` ON `loja_dentalsul`.`seo` (`id_dica` ASC);

CREATE INDEX `FK_seo_6` ON `loja_dentalsul`.`seo` (`id_guia` ASC);

CREATE INDEX `FK_seo_7` ON `loja_dentalsul`.`seo` (`id_artigo` ASC);

CREATE UNIQUE INDEX `alias_UNIQUE` ON `loja_dentalsul`.`seo` (`alias` ASC);


-- -----------------------------------------------------
-- Table `loja_dentalsul`.`sugestoes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `loja_dentalsul`.`sugestoes` ;

CREATE TABLE IF NOT EXISTS `loja_dentalsul`.`sugestoes` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cliente` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `FK_sugestoes_0`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `loja_dentalsul`.`clientes` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

CREATE INDEX `FK_sugestoes_0` ON `loja_dentalsul`.`sugestoes` (`id_cliente` ASC);

USE `loja_dentalsul`;

DELIMITER $$

USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`clientes_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`clientes_BEFORE_INSERT` BEFORE INSERT ON `clientes` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();
SET NEW.data_criado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`clientes_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`clientes_BEFORE_UPDATE` BEFORE UPDATE ON `clientes` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`departamentos_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`departamentos_BEFORE_INSERT` BEFORE INSERT ON `departamentos` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`departamentos_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`departamentos_BEFORE_UPDATE` BEFORE UPDATE ON `departamentos` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`categorias_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`categorias_BEFORE_INSERT` BEFORE INSERT ON `categorias` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`categorias_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`categorias_BEFORE_UPDATE` BEFORE UPDATE ON `categorias` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`marcas_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`marcas_BEFORE_INSERT` BEFORE INSERT ON `marcas` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`marcas_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`marcas_BEFORE_UPDATE` BEFORE UPDATE ON `marcas` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`pedidos_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`pedidos_BEFORE_INSERT` BEFORE INSERT ON `pedidos` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`pedidos_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`pedidos_BEFORE_UPDATE` BEFORE UPDATE ON `pedidos` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`subcategorias_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`subcategorias_BEFORE_INSERT` BEFORE INSERT ON `subcategorias` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`subcategorias_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`subcategorias_BEFORE_UPDATE` BEFORE UPDATE ON `subcategorias` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`produtos_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`produtos_BEFORE_INSERT` BEFORE INSERT ON `produtos` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`produtos_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`produtos_BEFORE_UPDATE` BEFORE UPDATE ON `produtos` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`pedidos_itens_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`pedidos_itens_BEFORE_INSERT` BEFORE INSERT ON `pedidos_itens` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`pedidos_itens_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`pedidos_itens_BEFORE_UPDATE` BEFORE UPDATE ON `pedidos_itens` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`produtos_grade_BEFORE_INSERT` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`produtos_grade_BEFORE_INSERT` BEFORE INSERT ON `produtos_grade` FOR EACH ROW
BEGIN

SET NEW.data_criado = NOW();
SET NEW.data_atualizado = NOW();

END$$


USE `loja_dentalsul`$$
DROP TRIGGER IF EXISTS `loja_dentalsul`.`produtos_grade_BEFORE_UPDATE` $$
USE `loja_dentalsul`$$
CREATE DEFINER = CURRENT_USER TRIGGER `loja_dentalsul`.`produtos_grade_BEFORE_UPDATE` BEFORE UPDATE ON `produtos_grade` FOR EACH ROW
BEGIN

SET NEW.data_atualizado = NOW();

END$$


DELIMITER ;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
