<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    protected $dates=['created_at'];
    protected $fillable=['title','description','user_id','category_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');

        
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }
   public function category(){
    return $this->belongsTo(Category::class,'category_id');
   }
}
