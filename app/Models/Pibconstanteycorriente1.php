<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pibconstanteycorriente1
 * 
 * @property int $id
 * @property string|null $Notas
 * @property string|null $Año
 * @property string|null $Apreciosconstantes
 * @property string|null $Aprecioscorrientes
 *
 * @package App\Models
 */
class Pibconstanteycorriente1 extends Model
{
	protected $table = 'pibconstanteycorriente1';
	public $timestamps = false;

	protected $fillable = [
		'Notas',
		'Año',
		'Apreciosconstantes',
		'Aprecioscorrientes'
	];
}
