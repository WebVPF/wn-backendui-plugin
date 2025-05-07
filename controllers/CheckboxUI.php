<?php namespace WebVPF\BackendUI\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class CheckboxUI extends Controller
{
    public $implement = [
        \WebVPF\BackendUI\Behaviors\DocsUI::class,
    ];

    public $name_docui = 'checkbox';

    public $pageTitle = 'Checkbox UI';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('WebVPF.BackendUI', 'backendui', 'checkboxui');
    }
}
