# ID-GENREATOR 😃:
it generates an private id for database

This code is using in laravel application to generate an unique id and also it will check if the generated id <br>

is the same in database it will generate a new . 😉

<h3>Now how to use it ?</h3>

For example if you created an id-generator column in post table, you can make an private id to the post like this :

```php
    public function store(Request $request){

        DB::table('generated_id')->insert([
            'generatedID'=>generateUniqueId('generatedIdTable','generatedIdColumn')
        ]);

    }
```

| Option | Description |
| ------ | ----------- |
| table name| (string & require) it is the table name where You want to insert the data in it. |
| column name| (string & require) it is the table column where You want to insert the data in it. |
 
The generate function generateUniqueId function takes 2 arguments , the first argument is the Table name and <br>

the second argument is the column name where you want to insert the uniqueId .

Here this code will generate an id from 25 characters and inserts it database .


