<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Indicenacionalpreciosconsumidor
 * 
 * @property int $id
 * @property int|null $Año
 * @property string|null $Mes
 * @property string|null $Indice
 * @property string|null $Variacion
 *
 * @package App\Models
 */
class Indicenacionalpreciosconsumidor extends Model
{
	protected $table = 'indicenacionalpreciosconsumidor';
	public $timestamps = false;

	protected $casts = [
		'Año' => 'int'
	];

	protected $fillable = [
		'Año',
		'Mes',
		'Indice',
		'Variacion'
	];
}
