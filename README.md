# Levity
Projeto para o hackathon Patronos TEMA: covid-19 com o objeto de medir o nível de Burnout dos funcionários e indicar a atividades paliativas para o tratamento, desenvolvido em HTML, CSS, JavaScript e PHP com banco de dados MySql.

# Configurações
- Rodar no wamp server.
- Criar banco de dados chamado Team1 no phpmyadmin, com usuário e senha padrão. Caso mude alguma configurações, alterar em `conexao/conexao.php`
- Criar a tabela tab_burnout:
```
CREATE TABLE IF NOT EXISTS `tab_burnout` (
  `COD_BURNOUT` int NOT NULL AUTO_INCREMENT,
  `COD_FUNCIONARIO` int NOT NULL,
  `DATA_REGISTRO` date NOT NULL,
  `QUESTAO_1` int NOT NULL,
  `QUESTAO_2` int NOT NULL,
  `QUESTAO_3` int NOT NULL,
  `QUESTAO_4` int NOT NULL,
  `QUESTAO_5` int NOT NULL,
  `QUESTAO_6` int NOT NULL,
  `QUESTAO_7` int NOT NULL,
  `QUESTAO_8` int NOT NULL,
  `QUESTAO_9` int NOT NULL,
  `QUESTAO_10` int NOT NULL,
  `QUESTAO_11` int NOT NULL,
  `QUESTAO_12` int NOT NULL,
  `QUESTAO_13` int NOT NULL,
  `QUESTAO_14` int NOT NULL,
  `QUESTAO_15` int NOT NULL,
  `QUESTAO_16` int NOT NULL,
  `QUESTAO_17` int NOT NULL,
  `QUESTAO_18` int NOT NULL,
  `QUESTAO_19` int NOT NULL,
  `QUESTAO_20` int NOT NULL,
  `RESULTADO` int NOT NULL,
  `FLG_PUBLICO` varchar(1) NOT NULL,
  PRIMARY KEY (`COD_BURNOUT`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```
- Criar a tabela tab_conexao:
```
CREATE TABLE IF NOT EXISTS `tab_conexao` (
  `CODIGO` int NOT NULL AUTO_INCREMENT,
  `COD_FUNCINARIO` int NOT NULL,
  `USUARIO` varchar(255) NOT NULL,
  `NOME` varchar(255) NOT NULL,
  `FLG_CONEC` varchar(1) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```
- Criar a tabela tab_empresa:
```
CREATE TABLE IF NOT EXISTS `tab_empresa` (
  `COD_EMPRESA` int NOT NULL AUTO_INCREMENT,
  `RAZAO_SOCIAL` varchar(255) NOT NULL,
  `CNPJ` varchar(18) NOT NULL,
  `AREA` varchar(100) NOT NULL,
  PRIMARY KEY (`COD_EMPRESA`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```
- Criar a tabela tab_funcionario:
```
CREATE TABLE IF NOT EXISTS `tab_funcionario` (
  `COD_FUNCINARIO` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `SENHA` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `CELULAR` varchar(14) NOT NULL,
  `COD_EMPRESA` int NOT NULL,
  PRIMARY KEY (`COD_FUNCINARIO`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```
- Rodar o script a seguir para iniciar a tab_conexao:
```
INSERT INTO `tab_conexao` (`CODIGO`, `COD_FUNCINARIO`, `USUARIO`, `NOME`, `FLG_CONEC`) VALUE (1, '', '', '', 'N');
```

# Vídeo de demonstração 
https://youtu.be/L3t6U_ITziU

Iniciar a aplicação em `principal.php`
