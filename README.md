# houseware

## Rotas para controller padrão
### Exemplo
Route::group(['namespace' => 'Namespace\Controllers', 'prefix' => 'route_prefix'], function ($route) {
    $route->get('/', 'Controller@all');
    $route->get('/{id}', 'Controller@find');
    $route->post('/', 'Controller@create');
    $route->delete('/{id}', 'Controller@delete');
    $route->update('/{id}', 'Controller@find');
});
