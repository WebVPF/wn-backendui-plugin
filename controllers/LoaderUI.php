<?php namespace WebVPF\BackendUI\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class LoaderUI extends Controller
{
    public $implement = [
        \WebVPF\BackendUI\Behaviors\DocsUI::class,
    ];

    public $name_docui = 'loader';

    public $pageTitle = 'Loader UI';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('WebVPF.BackendUI', 'backendui', 'loaderui');
    }
}
