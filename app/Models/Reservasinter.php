<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservasinter
 * 
 * @property int $id
 * @property string|null $fecha
 * @property float|null $bcv
 * @property float|null $fiem
 * @property float|null $total
 *
 * @package App\Models
 */
class Reservasinter extends Model
{
	protected $table = 'reservasinter';
	public $timestamps = false;

	protected $casts = [
		'bcv' => 'float',
		'fiem' => 'float',
		'total' => 'float'
	];

	protected $fillable = [
		'fecha',
		'bcv',
		'fiem',
		'total'
	];
}
