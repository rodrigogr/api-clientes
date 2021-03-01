#### Sobre api-clientes

- API para manipular dados de clientes da Uzer Tecnologia.
- Desenvolvida no padrão de arquitetura MVC (Model, View e Controller)

#### Ambiente de Desenvolvimento

- Padrão de arquitetura MVC (Model, View e Controller)
- Linguagem de programação PHP
- IDE de desenvolvimento PHPStorm 2020.3.2
- Framework Lumen (laravel enxuto para desenvolimento de APIs)
- Banco de Dados SQLLite
- Para testar as requisições e respostas foi utilizada a plataforma Postman
- URL da aplicação: /api/v1/

### Método | URL utiliada

- Listar todos os clientes: GET | /clientes
  Exemplo: GET   | localhost:8000/api/v1/clientes

- Inserir novo cliente: POST | /clientes                
  Exemplo: POST  | localhost:8000/api/v1/clientes

- Pesquisar um cliente pelo ID: GET | /clientes/:id
  Exemplo: GET   | localhost:8000/api/v1/clientes/1
  
- Atualizar informações de um cliente:  PATCH | /clientes/:id
  Exemplo: PATCH | localhost:8000/api/v1/clientes/2
