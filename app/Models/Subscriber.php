<?php
/*
 * This engine owned and produced by hyipis studio.
 * Visit our website: https://hyip.is/
 */

namespace App\Models;

use App\Traits\Uuids;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subscriber
 * @package App\Models
 *
 * @property string email
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class Subscriber extends Model
{
    use Uuids;

    /** @var string $table */
    protected $table = 'subscribers';

    /** @var array $timestamps */
    public $timestamps = ['created_at', 'updated_at'];

    /** @var array $fillable */
    protected $fillable = [
        'email',
    ];
}
