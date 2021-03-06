<?php
namespace Czim\JsonApi\Test\Helpers\Models;

use Illuminate\Database\Eloquent\Model;

class TestSimpleModel extends Model
{
    protected $fillable = [
        'unique_field',
        'second_field',
        'name',
        'active',
        'hidden',
    ];

    protected $casts = [
        'active' => 'boolean',
    ];

    // for testing with hide/unhide attributes
    protected $hidden = [
        'hidden',
    ];

}
