<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseMonetarium
 * 
 * @property int $id
 * @property string|null $cuentas
 * @property string|null $2023
 * @property string|null $2022
 * @property string|null $2021
 * @property string|null $2020
 * @property string|null $2019
 * @property string|null $2018
 * @property string|null $2017
 * @property string|null $2016
 * @property string|null $2015
 * @property string|null $2014
 * @property string|null $2013
 * @property string|null $2012
 * @property string|null $2011
 * @property string|null $2010
 * @property string|null $2009
 * @property string|null $2008
 * @property string|null $2007
 * @property string|null $2006
 * @property string|null $2005
 * @property string|null $2004
 * @property string|null $2003
 * @property string|null $2002
 * @property string|null $2001
 * @property float|null $2000
 * @property string|null $1999
 * @property string|null $1998
 * @property string|null $1997
 * @property string|null $1996
 * @property string|null $1995
 * @property string|null $1994
 * @property string|null $1993
 *
 * @package App\Models
 */
class BaseMonetarium extends Model
{
	protected $table = 'inflacionhistorica';
	public $timestamps = false;

	protected $casts = [
		'float'
	];

	protected $fillable = [
		'Ano',
		'Inflacion'
		
	];
}
