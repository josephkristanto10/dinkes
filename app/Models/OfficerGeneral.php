<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class OfficerGeneral
 * 
 * @property int $id
 * @property int $public_health_center
 * @property int $id_role
 * @property int $id_position
 * @property string $name
 * @property string $nik
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Position $position
 * @property Role $role
 * @property Collection|ActionDoctor[] $action_doctors
 *
 * @package App\Models
 */
class OfficerGeneral extends Model
{
	protected $table = 'officer_general';

	protected $casts = [
		'public_health_center' => 'int',
		'id_role' => 'int',
		'id_position' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'public_health_center',
		'id_role',
		'id_position',
		'name',
		'nik',
		'address',
		'phone',
		'email',
		'password'
	];

	public function position()
	{
		return $this->belongsTo(Position::class, 'id_position');
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'id_role');
	}

	public function public_health_center()
	{
		return $this->belongsTo(PublicHealthCenter::class, 'public_health_center');
	}

	public function action_doctors()
	{
		return $this->hasMany(ActionDoctor::class, 'id_officer_general');
	}
}
