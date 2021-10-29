<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|OfficerGeneral[] $officer_generals
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'role';

	protected $fillable = [
		'name'
	];

	public function officer_generals()
	{
		return $this->hasMany(OfficerGeneral::class, 'id_role');
	}
}
