<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    protected $fillable = ['user_id','nama', 'tipe_pengajuan', 'pendapatan_bulanan_nasabah', 'nominal_pengajuan', 'tenor', 
                            'tagihan_nasabah', 'tanggal_pengajuan', 'catatan', 'status'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $with = ['user'];
}
