# Desafio Back-End para a Hollow

Para este projeto foi utilizado o PHP 8.2.0 e o framework Laravel 10.4.1.
O projeto consiste em uma REST API para retrieve dos dados de uma CSV.

Para facilitar e agilizar o processo, utilizei o método de migrations do Laravel para criar a tabela com todos os campos do csv, o arquivo é o create_users_table dentro da pasta migrate. Depois, no SQL, utilizei o script na pasta /database_files para importar os dados do backend.csv .

Em routes é possível verificar todos os endpoints criados para a aplicação. São eles:
- Route::get('<b>users/search/{first_name}</b>', [UserController::class, 'search']);
- - Faz uma busca do name_first da base dados, 

- Route::get('<b>users/create</b>', [UserController::class, 'create']);
- - Adicionar um user na BD com os campos e valores passados por meio de parâmetros GET.

- Route::get('<b>users/filter</b>', [UserController::class, 'filter']);
- - Filtra os users e procura na BD baseados nos parâmetros GET passados na URL

- Route::get('<b>/users</b>', [UserController::class, 'index']);
- - Busca e mostra todos os users na BD.

- Route::get('<b>/users/{id}</b>', [UserController::class, 'show']);
- - Busca um user pelo ID.

- Route::post('<b>/users</b>', [UserController::class, 'store']);
- - Método POST para adicionar um novo user. Se algum campo for omitido, será preenchido com NULL.

- Route::put('<b>/users/{id}</b>', [UserController::class, 'update']); //PUT update user by id
- - Método PUT para atualizar um user pelo ID.

- Route::delete('<b>/users/{id}</b>', [UserController::class, 'destroy']); //DELETE user by id
- - Método DELETE para remover um user da BD.

Em App/Models/User.php foi implementado o método para poder atualizar e inserir usuários sem ter que passar todos os campos.
Em App/Http/Contollers/UserController.php estão todas as implementações dos endpoints criados.
