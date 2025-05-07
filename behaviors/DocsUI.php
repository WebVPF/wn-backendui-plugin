<?php namespace WebVPF\BackendUI\Behaviors;

use Backend\Classes\ControllerBehavior;
use File;
use Markdown;

class DocsUI extends ControllerBehavior
{
    /**
     * @var array Visible actions in context of the controller
     */
    protected $actions = ['index'];

    /**
     * Behavior constructor
     * @param \Backend\Classes\Controller $controller
     */
    public function __construct($controller)
    {
        parent::__construct($controller);

        // $content = File::get('modules/system/assets/ui/docs/form.md');

        $content = File::get('plugins/webvpf/backendui/docs/' . $this->controller->name_docui . '.md');
        $this->controller->vars['content'] = '<div class="body-docui">' . Markdown::parse($content) . '</div>';

        // dd(request());
    }

    public function index()
    {
        $this->controller->bodyClass = 'docui-container';

        $this->controller->addCss('$/webvpf/backendui/assets/css/prism.css', [
            'build' => 'WebVPF.BackendUI',
            'data-docsui-prism' => 'prism'
        ]);
        $this->controller->addCss('$/webvpf/backendui/assets/css/style.css', 'WebVPF.BackendUI');

        $this->controller->addJs('$/webvpf/backendui/assets/js/prism.js', 'WebVPF.BackendUI');
        $this->controller->addJs('$/webvpf/backendui/assets/js/script.js', 'WebVPF.BackendUI');
    }

}
