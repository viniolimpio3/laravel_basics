<?php
namespace App\Http\Controllers\web;

use App\SettingsModel;
use Hamcrest\Core\Set;
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
        $this->settings_site = new SettingsModel();
    }

    public function index($param=false){ 
        dd($this->settings_site->get());

        // if($param) $data['param'] = $param;

        // $data['title'] = 'Home';
        // $data['pathCss'] = 'home.css';
        
        // $module = $this->module . 'home';
        
        // return load_module($module, $data, $this->template);
    }
}
