# Introduction

For now, this works for BelongsTo. Only "BelongsToWithCreate" is available, my plan in the future is to do "BlongsToMany" one. 



## Install

Run this command in your nova project:
`composer require AliAwwad/CreateRelationOnResource`

Usage:

```php
use AliAwwad\CreateRelationOnResource\BelongsToWithCreate;

public function fields(Request $request)
{
    return [
        BelongsToWithCreate::make('Language')->quickCreate(),
    ]
}
```

## Thanks to:
- [64robots/nova-fields](https://github.com/64robots/nova-fields/)