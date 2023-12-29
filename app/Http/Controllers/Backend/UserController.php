<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function __contrust () {
        
    }

    public function index() {
        $template = 'backend.user.index';

        $config = $this->config();
        $users = User::paginate(15);

        $config['seo'] = config('apps.user');
        return view('backend.dashboard.layout', compact(
            'template',
            'config', 
            'users'
        ));
    }

    public function create() {
        $template = 'backend.user.create';
        $config['seo'] = config('apps.user');

        return view('backend.dashboard.layout', compact(
            'template',
            'config' 
        ));
    }

    private function config() {
        return [
            'js' => [
                'backend/js/plugins/switchery/switchery.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css'
            ]
        ];
    }
}
