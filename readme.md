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
  ```shell
  LOGO_EMAIL='COLOQUE A URL AQUI'
  ```

4. Altere o endereço de e-mail e o nome do e-mail no arquivo em config/mail.php da linha 58 até a 61
  ```shell
  'from' => [
        'address' => env('MAIL_FROM_ADDRESS', 'contato@asteroidetecnologia.com.br'),
        'name' => env('MAIL_FROM_NAME', 'Contato - NOME DA APLICAÇÃO'),
  ],
  ```
