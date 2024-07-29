<?php

namespace Eduard\Analitycs\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eduard\Search\Models\IndexCatalog;
use Eduard\Analitycs\Models\Events;

class EventsValues extends Model
{
    use HasFactory;

    protected $table = 'events_values';
    protected $fillable = ['code_uuid', 'customer_uuid', 'url', 'value_numeric', 'value_text'];
    protected $hidden = ['id_index', 'id_event', 'created_at', 'updated_at'];
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;

    /**
     * @inheritDoc
     */
    public function index() {
        return $this->hasOne(IndexCatalog::class, 'id_index', 'id');
    }

    /**
     * @inheritDoc
     */
    public function event() {
        return $this->hasOne(Events::class, 'id_event', 'id');
    }
}