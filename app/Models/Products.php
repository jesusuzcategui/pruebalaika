<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'price', 'price_offert', 'score', 'image'];
}