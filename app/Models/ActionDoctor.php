<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ActionDoctor
 * 
 * @property int $id
 * @property int $id_key_performance
 * @property int $id_officer_general
 * @property int $quantity
 * @property int $score_per_action
 * @property int $total_score
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property KeyPerformanceDoctor $key_performance_doctor
 * @property OfficerGeneral $officer_general
 *
 * @package App\Models
 */
class ActionDoctor extends Model
{
	protected $table = 'action_doctor';

	protected $casts = [
		'id_key_performance' => 'int',
		'id_officer_general' => 'int',
		'quantity' => 'int',
		'score_per_action' => 'int',
		'total_score' => 'int'
	];

	protected $fillable = [
		'id_key_performance',
		'id_officer_general',
		'quantity',
		'score_per_action',
		'total_score'
	];

	public function key_performance_doctor()
	{
		return $this->belongsTo(KeyPerformanceDoctor::class, 'id_key_performance');
	}

	public function officer_general()
	{
		return $this->belongsTo(OfficerGeneral::class, 'id_officer_general');
	}
}
