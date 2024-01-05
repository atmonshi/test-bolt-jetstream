<?php

namespace App\Models;

use App\Models\Zeus\Category;
use App\Models\Zeus\Collection;
use App\Models\Zeus\Field;
use App\Models\Zeus\FieldResponse;
use App\Models\Zeus\Form;
use App\Models\Zeus\Response;
use App\Models\Zeus\Section;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Jetstream\Events\TeamCreated;
use Laravel\Jetstream\Events\TeamDeleted;
use Laravel\Jetstream\Events\TeamUpdated;
use Laravel\Jetstream\Team as JetstreamTeam;

class Team extends JetstreamTeam
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'personal_team' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'personal_team',
    ];

    /**
     * The event map for the model.
     *
     * @var array<string, class-string>
     */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];

    public function catogries()
    {
        return $this->hasMany(Category::class);
    }

    public function collections()
    {
        return $this->hasMany(Collection::class);
    }

    public function fields()
    {
        return $this->hasMany(Field::class);
    }

    public function FieldResponses()
    {
        return $this->hasMany(FieldResponse::class);
    }

    public function Forms()
    {
        return $this->hasMany(Form::class);
    }

    public function Responses()
    {
        return $this->hasMany(Response::class);
    }

    public function Sections()
    {
        return $this->hasMany(Section::class);
    }
}
