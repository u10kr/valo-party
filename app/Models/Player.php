<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property string $team_id
 * @property int $agent_id
 * @property int $rank_id
 * @property string|null $team_type
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\PlayerFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Player newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Player query()
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereAgentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereRankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereTeamType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Player whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id',
        'name',
        'rank_id'
    ];

    public function rank(): BelongsTo
    {
        return $this->belongsTo(Rank::class);
    }
}
