# query-builder
Make your SQL query with OOP style

## Usage

### Query
```php
$query = [];
$query[] = (new QueryBuilder('YOUR QUERY HERE ...'))->finish();
$query[] = QueryBuilder::query('YOUR QUERY HERE ...')->finish();
$query[] = QueryBuilder::query(['YOUR QUERY HERE ...', 'YOUR QUERY HERE ...'])->finish();
print_r($query);
```

### SELECT
```php
$select = [];
$select[] = QueryBuilder::select('column1, column2')->from('table')->finish();
$select[] = QueryBuilder::select(['column1', 'column2'])->from('table')->finish();
print_r($select);
```

### INSERT
```php
$insert = [];
$insert[] = QueryBuilder::insert('table', 'column1, column2')->values('value1, value2')->finish();
$insert[] = QueryBuilder::insert('table', ['column1', 'column2'])->values(['value1', 'value2'])->finish();
$insert[] = QueryBuilder::insert('table', ['column1' => 'value1', 'column2' => 'value2'])->finish();
print_r($insert);
```

### UPDATE
```php
$update = [];
$update[] = QueryBuilder::update('table')->set("column1='value1', column2='value2'")->where(['column3' => 'value3'])->finish();
$update[] = QueryBuilder::update('table', ['column1' => 'value1', 'column2' => 'value2'])->where(['column3' => 'value3'])->finish();
print_r($update);
```

### DELETE
```php
$delete = [];
$delete[] = QueryBuilder::delete('table')->where('id=1')->finish();
print_r($delete);
```

### raw() function
```php
$raw = [];
$raw = QueryBuilder::query('Hey...')->raw('Halo, halo')->raw('Bandung!')->finish();
print_r($raw);
```
