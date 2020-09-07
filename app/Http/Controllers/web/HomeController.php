<?php
namespace App\Http\Controllers\web;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;

class HomeController extends BaseController{

    public $module = 'web.';
    public $template = 'templates.web_template';

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct(){
        
    }

    public function index($param=false){   
        if($param) $data['param'] = $param;

        $data['title'] = 'Home';
        $data['pathCss'] = 'home.css';
        
        $module = $this->module . 'home';
        
        return load_module($module, $data, $this->template);
    }
}
