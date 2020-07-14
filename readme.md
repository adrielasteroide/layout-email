## Instalação

1. Instale o pacote
  ```shell
  $ composer require asteroide-tecnologia/layout-email
  ```
2. Publique o layout
  ```shell
  $ php artisan vendor:publish --tag=asteroide-layout-email
  ```
3. Crie uma variável no seu arquivo .env.example e .env para colocar a url da logo.
  
LOGO_EMAIL='COLOQUE A URL AQUI'
