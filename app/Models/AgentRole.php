<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\AgentRoleFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|AgentRole newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentRole newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentRole query()
 * @method static \Illuminate\Database\Eloquent\Builder|AgentRole whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentRole whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentRole whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AgentRole whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class AgentRole extends Model
{
    use HasFactory;
}
