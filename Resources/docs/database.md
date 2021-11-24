### [Docs](./00-docs.md)

----

### Utilizando a classe DB

```php
use App\Helpers\DB;

$table = "usuarios";

$primeiro_item   = DB::first($table);
$ultimo_item     = DB::last($table);
$total_de_itens  = DB::count($table);

DB::delete($table, ["id" => $id]);

$table_exists = DB::tableExists("usuarios");

if ($table_exists)
{
    $usuario = DB::first("usuarios", ['*'], ['id' => 1]);

    if($usuario)
    {
        $stored = DB::update("usuarios", [
            'nome' => 'Fulano',
            'email' => 'fulano@silva.com',
        ],
        ['id' => $usuario['id']]);
    }else{
        $usuario = DB::insert("usuarios", [
            'nome' => 'Fulano',
            'email' => 'fulano@silva.com',
        ]);
    }
}

//Query customizada (TUDO O QUE O PDO FAZ)
DB::pdo()->query("SELECT * FROM {$table} LIMIT 1");

//Obtendo a instancia do PDO
$options    = []
$pdo        = DB::pdo($options);// $options é opcional (está em fase beta)
$sql        = "SELECT * FROM {$table} LIMIT 1 WHERE name = :name";
$stmt       = $pdo->prepare($sql);
$stmt->bindValue(":name", "Pedro");
```
