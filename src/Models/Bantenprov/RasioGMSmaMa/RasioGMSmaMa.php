<?php

namespace Bantenprov\RasioGMSmaMa\Models\Bantenprov\RasioGMSmaMa;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RasioGMSmaMa extends Model
{

    protected $table = 'rasio_guru_murid_sma_ma';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('negara', 'province_id', 'kab_kota', 'regency_id', 'tahun', 'data');

    public function getProvince()
    {
        return $this->hasOne('Bantenprov\RasioGMSmaMa\Models\Bantenprov\RasioGMSmaMa\Province','id','province_id');
    }

    public function getRegency()
    {
        return $this->hasOne('Bantenprov\RasioGMSmaMa\Models\Bantenprov\RasioGMSmaMa\Regency','id','regency_id');
    }

}

