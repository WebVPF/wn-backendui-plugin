<?php namespace WebVPF\BackendUI\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class PaginationUI extends Controller
{
    public $implement = [
        \WebVPF\BackendUI\Behaviors\DocsUI::class,
    ];

    public $name_docui = 'pagination';

    public $pageTitle = 'Pagination UI';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('WebVPF.BackendUI', 'backendui', 'paginationui');
    }
}
