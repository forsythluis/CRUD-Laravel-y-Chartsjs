<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoCambioHistorico
 * 
 * @property int $id
 * @property string $años
 * @property string $enero
 * @property string $febrero
 * @property string $marzo
 * @property string $abril
 * @property string $mayo
 * @property string $junio
 * @property string $julio
 * @property string $agosto
 * @property string $septiembre
 * @property string $octubre
 * @property string $noviembre
 * @property string $diciembre
 * @property string $notas
 *
 * @package App\Models
 */
class TipoCambioHistorico extends Model
{
	protected $table = 'tipocambiohistorico';
	public $timestamps = false;

	protected $fillable = [
		'años',
		'enero',
		'febrero',
		'marzo',
		'abril',
		'mayo',
		'junio',
		'julio',
		'agosto',
		'septiembre',
		'octubre',
		'noviembre',
		'diciembre',
		'notas'
	];
}
