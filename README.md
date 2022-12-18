Sistema Acesso de Usuário

Instalação:

Obs.: Certifique-se de ter o NPM, MySQL 8, Composer e o PHP 8.0.11 ou superior instalados.


1- Renomeio o arquivo .env.example para .env e acrescente as informações do seu banco de dados.

2- Abra o terminal de sua preferência.

3- Execute o comando: composer install

4- Execute o comando: php artisan migrate

5- Execute o comando: php artisan db:seed --class=PermissionTableSeeder

6- Execute o comando: php artisan db:seed --class=CreateCommonUserSeeder

7- Execute o comando: php artisan db:seed --class=CreateAdminUserSeeder

8- Execute o comando: php artisan key:generate

9- Execute o comando: npm install

10- Execute o comando: npm run dev(mantenha rodando)

11- Em outro terminal e execute o comando: php artisan serve


Irá gerar o usuário Admin com as credenciais:

Email: admin@gmail.com

Senha: 12345678


Irá gerar o usuário Comum com as credenciais:

Email: comum@gmail.com

Senha: 12345678
