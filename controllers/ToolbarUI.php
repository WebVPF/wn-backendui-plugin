<?php namespace WebVPF\BackendUI\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class ToolbarUI extends Controller
{
    public $implement = [
        \WebVPF\BackendUI\Behaviors\DocsUI::class,
    ];

    public $name_docui = 'toolbar';

    public $pageTitle = 'Toolbar UI';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('WebVPF.BackendUI', 'backendui', 'toolbarui');
    }
}
