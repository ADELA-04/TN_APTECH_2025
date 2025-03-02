<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProfile extends Model
{
    use HasFactory;

    protected $table = 'PersonalProfiles';
    protected $primaryKey = 'ProfileID';
    protected $fillable = ['UserID', 'FullName', 'Phone', 'Address', 'ProfileImage'];

    public function user()
    {
        return $this->belongsTo(User::class, 'UserID', 'UserID');
    }
}
