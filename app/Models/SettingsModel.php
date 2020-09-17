<?php 
namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Cast\Object_;

class SettingsModel extends Model{
    protected $table = 'settings';
    protected $id = 'id';
    public $timestamps = true;
    public function get(){
        return (Object) SettingsModel::where('id', '>', 0)->get();
    }

}