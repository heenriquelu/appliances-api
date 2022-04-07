
<h1 align="center">Teste Desenvolvedor FullStack PHP</h1>
<h4 align="center">Esse repositório se destina à entrega de um teste proposto pela empresa <a href="https://www.planmkt.com.br/pt">Plan Mkt</a></h4>

<div align="center">
  <p align="center">
    <a href="#sobre-information_source">Sobre</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#tecnologias-computer">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#iniciando-o-projeto-rocket">Iniciando o projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#rotas-twisted_rightwards_arrows">Rotas</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
    <a href="#requisicoes-de-exemplo-school_satchel">Requisições  de exemplo</a>&nbsp;&nbsp;&nbsp;
  </p>
</div>

## Sobre :information_source:

Essa aplicação disponibiliza uma pequena API para cadastro de eletrodomésticos contendo recursos para criação, listagem, edição e remoção de registros. Onde um registro de eletrodoméstico deve conter, pelo menos, as seguintes informações:

- **Nome** (Ex: Geladeira Frost Free)
- **Descrição** (Ex: Este produto é totalmente versátil. Tudo para ser
  personalizado para comportar o que você preferir.)
- **Tensão** (Ex: 220v)
- **Marca**

Foi implementado também um CRUD para o cadastro das **Marcas**, assim também como um relacionamento entre **Eletrodomésticos** e **Marcas**.

Foi implementado também uma **autenticação** para a **API**, caso deseje utiliza-la, basta mover as rotas de seu interesse para dentro da Middleware => ***auth:api***![Como habilitar a autenticação das rotas here](https://i.imgur.com/uJk6GAB.png)


## Tecnologias :computer:

- **Docker** - Docker é um conjunto de produtos de plataforma como serviço que usam virtualização de nível de sistema operacional para entregar software em pacotes chamados contêineres.

- **Laravel 9** - Seu principal objetivo é permitir que os programadores que o utilizam, consigam trabalhar de forma rápida e organizada, mantendo um código enxuto e funcional.

- **Laravel Sail** - [Laravel Sail](https://github.com/laravel/sail) é uma interface de linha de comando leve para interagir com o ambiente de desenvolvimento Docker padrão do Laravel. O Sail fornece um ótimo ponto de partida para criar um aplicativo Laravel usando PHP, MySQL e Redis sem exigir experiência prévia do Docker.

## Iniciando o projeto :rocket:


### Executando a aplicação localmente

NOTA: É necessário possuir o [Docker](https://docs.docker.com/desktop/windows/install/) instalado.

1. Clone o repositório para seu computador e dentro da pasta do repositório execute o comando  `docker compose up -d`, o Docker então irá criar um container para o seu repositório.

2. . Acesse o container  e em seguida execute os comandos `alias  sail='[ -f sail ] && bash sail || bash vendor/bin/sail'` e `sail up -d`

3. Após realizar o comando  `sail up -d` a aplicação estará rodando, em seguida utilize o comando `sail artisan migrate --seed`, para

4. Crie o banco de dados que deseje utilizar, insira as credenciais no arquivo `.env` e em seguida execute o comando  `sail artisan migrate --seed` para criar as tabelas e povoar o banco de dados.

5. A rota principal para acessar a **API** é [http://localhost/api](http://localhost/api)

6.  Caso deseje utilizar a autenticação da API, será necessário executar o seguinte comando `php artisan  passport:client  --personal` e informar um nome para a criação do Token.


## Rotas :twisted_rightwards_arrows:

A imagem a seguir demonstra as rotas disponíveis na API.
![Rotas da API](https://i.imgur.com/oSpZUpl.png)

### Requisicoes de exemplo :school_satchel:

- Criando um usuário de acesso à API
    - Acesse a rota: `http://localhost/api/register` utilizando o método `POST`
    - Insira os dados que deseja cadastrar, como na imagem abaixo:
      `{
      "name" : "Usuario de teste",
      "email" : "teste@email.com",
      "password" : "teste",
      "c_password" : "teste"
      }`

![Cadastrando usuário na API](https://i.imgur.com/MiD1nXG.png)


- Ao enviar os dados para a rota, será retornada a mensagem `User register successfully.`, informando que o **usuário** foi cadastrado com sucesso, exibindo seu nome e o Token de acesso.

![Retorno de requisição de cadastro](https://i.imgur.com/pnnvfja.png)


- Cadastrando um eletrodoméstico
    - Acesse a rota: `http://localhost/api/appliances` utilizando o método `POST`
    - Insira os dados que deseja cadastrar, como na imagem abaixo:
      `{
      "name" : "Mixer",
      "description" : "O mixer numero um do Brasil",
      "voltage" : "110",
      "brand_id" : "1"
      }`

![Cadastrando eletrodoméstico](https://i.imgur.com/ErPV8WT.png)

- Ao enviar os dados para a rota, será retornada a mensagem `Appliance created successfully.`, informando que o **eletrodoméstico** foi cadastrado com sucesso, exibindo seus dados de cadastro, e os dados da **marca** a que ele foi vinculado

![enter image description here](https://i.imgur.com/UtGbJPG.png)
