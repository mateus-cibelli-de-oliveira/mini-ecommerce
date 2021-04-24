# Crud e-commerce com PHP

É um projeto de uma mini página e-commerce com funções de cadastrar cupom, escolher o tipo de desconto, interação de páginas e login integrado.

# Instalação!

Faça o download do arquivo extraído e ponha na pasta do servidor xampp ou wampserver, assim: 

```bash
xampp/htdocs/mini-ecommerce/index.php
```

## Como usar?

```python
Crie um banco de dados com as seguintes informações:

CREATE DATABASE CRUDCUPOM;
USE CRUDCUPOM;
CREATE TABLE cupom
(id_pessoa INT AUTO_INCREMENT 
PRIMARY KEY codigo varchar(8),
desconto char(4)
);
```
Após isso, algumas informações são importantes dizer: 

1- Só foram adicionadas 4 telas com os detalhes do produto. As outras ainda não foram adicionadas.

2- Eu não passei todas as páginas para a extensão PHP. Então se não estiver funcionando, faça uma atualização no link para encontrar a página, assim: 

```python
../Nome da pasta/pasta procurada/achou.php
```

## O que poderia ser melhorado?
O layout das páginas, o CRUD do login com integração ao MySQL, um bom rodapé e aplicar outras funções de interação em JavaScript e PHP. 
Se houver problemas na conexão com o banco de dados, aguarde novos commits. 