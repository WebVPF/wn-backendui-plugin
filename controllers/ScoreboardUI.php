<?php namespace WebVPF\BackendUI\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class ScoreboardUI extends Controller
{
    public $implement = [
        \WebVPF\BackendUI\Behaviors\DocsUI::class,
    ];

    public $name_docui = 'scoreboard';

    public $pageTitle = 'Scoreboard UI';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('WebVPF.BackendUI', 'backendui', 'scoreboardui');
    }
}
