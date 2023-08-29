#Hackathon Patronos: levity

#Esse projeto foi desenvolvido como parte da protipagem para o Hackathon Covid-19 feito pela fundação Patronos e tem como objetivo o monitoramento do stress laboral por meio
do registros de relatórios semanais de como o trabalhador está se sentindo.

###Tabela de Conteúdo:

#TAB_EMPRESA:
##COD_EMPRESA  INT   PRIMARY KEY
##CNPJ         VARCHAR(18)
##RAZAO_SOCIAL VARCHAR(255)
##AREA         VARCHAR(100)

#TAB_FUNCIONARIO:
##COD_FUNCINARIO  INT   PRIMARY KEY
##NOME            VARCHAR(255)   
##EMAIL           VARCHAR(255)   
##SENHA           VARCHAR(100)   
##CPF             VARCHAR(14) 
##CELULAR         VARCHAR(14) 
##COD_EMPRESA     INT   FOREIGN KEY (TAB_EMPRESA - COD_EMPRESA)

#TAB_BURNOUT       
##COD_BURNOUT    PRIMARY KEY 
##COD_FUNCIONARIO   INT   FOREIGN KEY 
##DATA_REGISTRO     DATE     
##QUESTAO_1         INT      
##QUESTAO_2         INT      
##QUESTAO_3         INT      
##QUESTAO_4         INT      
##QUESTAO_5         INT      
##QUESTAO_6         INT      
##QUESTAO_7         INT      
##QUESTAO_8         INT      
##QUESTAO_9         INT      
##QUESTAO_10        INT      
##QUESTAO_11        INT      
##QUESTAO_12        INT      
##QUESTAO_13        INT      
##QUESTAO_14        INT      
###QUESTAO_15        INT      
##QUESTAO_16        INT      
##QUESTAO_17        INT      
##QUESTAO_18        INT      
##QUESTAO_19        INT      
##QUESTAO_20        INT      
##RESULTADO         INT 
##FLG_PUBLICO       CHAR(1)     

###Status: em desenvolvimento.

### Pré-requisitos

#Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
#[wampserver64](https://wampserver.br.uptodown.com/windows).

### 🎲 Rodando o Back End (servidor)

# Clone este repositório
$ git clone <https://github.com/MarcelliSarti/Patronos.git>

# Registre o banco de dados em local host usuario: root senha:''

#Abra o projeto localhost/seurepositorio/principal.php no navegador

### 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

- [Boodstrap](https://getbootstrap.com/)

#Autor: Time 1

#Licença: não necessário