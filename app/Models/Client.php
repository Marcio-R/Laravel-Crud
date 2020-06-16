<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name','cpf','email','phone','defaulter',
    'date_birth','sex','marital_status','physical_disability','image',
    ];

    public function search($filter = null)
   {
        $result = $this->where(function($query) use($filter)
        {
            if($filter)
            {
                $query->where('name','LIKE',"%{$filter}%");
            }
        })->paginate();
        return $result;
   }
    
}
