<?php namespace WebVPF\BackendUI;

use Backend;
use Backend\Models\UserRole;
use System\Classes\PluginBase;

/**
 * BackendUI Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name'        => 'webvpf.backendui::lang.plugin.name',
            'description' => 'webvpf.backendui::lang.plugin.description',
            'author'      => 'WebVPF',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     */
    public function register(): void
    {

    }

    /**
     * Boot method, called right before the request route.
     */
    public function boot(): void
    {

    }

    /**
     * Registers any frontend components implemented in this plugin.
     */
    public function registerComponents(): array
    {
        return []; // Remove this line to activate

        return [
            'WebVPF\BackendUI\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any backend permissions used by this plugin.
     */
    public function registerPermissions(): array
    {
        return []; // Remove this line to activate

        return [
            'webvpf.backendui.some_permission' => [
                'tab' => 'webvpf.backendui::lang.plugin.name',
                'label' => 'webvpf.backendui::lang.permissions.some_permission',
                'roles' => [UserRole::CODE_DEVELOPER, UserRole::CODE_PUBLISHER],
            ],
        ];
    }

    /**
     * Registers backend navigation items for this plugin.
     */
    public function registerNavigation(): array
    {
        return [
            'backendui' => [
                'label'       => 'webvpf.backendui::lang.plugin.name',
                'url'         => Backend::url('webvpf/backendui/formui'),
                'icon'        => 'icon-snowflake',
                'permissions' => ['webvpf.backendui.*'],
                'order'       => 500,
                'sideMenu' => [
                    'formui' => [
                        'label'       => 'Form',
                        'icon'        => 'icon-file-invoice',
                        'url'         => Backend::url('webvpf/backendui/formui'),
                        'attributes'  => [
                            'data-docsection' => 'first',
                            'data-docsection-name' => 'Controls',
                        ],
                    ],
                    'listui' => [
                        'label'       => 'List',
                        'icon'        => 'icon-regular icon-rectangle-list',
                        'url'         => Backend::url('webvpf/backendui/listui'),
                    ],
                    'buttonui' => [
                        'label'       => 'Button',
                        'icon'        => 'icon-stop',
                        'url'         => Backend::url('webvpf/backendui/buttonui'),
                    ],
                    'checkboxui' => [
                        'label'       => 'Checkbox',
                        'icon'        => 'icon-toggle-off',
                        'url'         => Backend::url('webvpf/backendui/checkboxui'),
                    ],
                    'datepickerui' => [
                        'label'       => 'Date Picker',
                        'icon'        => 'icon-calendar',
                        'url'         => Backend::url('webvpf/backendui/datepickerui'),
                    ],
                    'selectui' => [
                        'label'       => 'Select',
                        'icon'        => 'icon-angle-down',
                        'url'         => Backend::url('webvpf/backendui/selectui'),
                    ],
                    'calloutui' => [
                        'label'       => 'Callout',
                        'icon'        => 'icon-window-maximize',
                        'url'         => Backend::url('webvpf/backendui/calloutui'),
                    ],
                    'chartui' => [
                        'label'       => 'Chart',
                        'icon'        => 'icon-chart-line',
                        'url'         => Backend::url('webvpf/backendui/chartui'),
                    ],
                    'scoreboardui' => [
                        'label'       => 'Scoreboard',
                        'icon'        => 'icon-chart-pie',
                        'url'         => Backend::url('webvpf/backendui/scoreboardui'),
                    ],
                    'dropdownui' => [
                        'label'       => 'Dropdown',
                        'icon'        => 'icon-angles-down',
                        'url'         => Backend::url('webvpf/backendui/dropdownui'),
                    ],
                    'inspectorui' => [
                        'label'       => 'Inspector',
                        'icon'        => 'icon-binoculars',
                        'url'         => Backend::url('webvpf/backendui/inspectorui'),
                    ],
                    'flashmessageui' => [
                        'label'       => 'Flash Message',
                        'icon'        => 'icon-message',
                        'url'         => Backend::url('webvpf/backendui/flashmessageui'),
                    ],
                    'filterui' => [
                        'label'       => 'Filter',
                        'icon'        => 'icon-filter',
                        'url'         => Backend::url('webvpf/backendui/filterui'),
                    ],
                    'loaderui' => [
                        'label'       => 'Loader',
                        'icon'        => 'icon-spinner',
                        'url'         => Backend::url('webvpf/backendui/loaderui'),
                    ],
                    'tooltipui' => [
                        'label'       => 'Tooltip',
                        'icon'        => 'icon-message',
                        'url'         => Backend::url('webvpf/backendui/tooltipui'),
                    ],
                    'toolbarui' => [
                        'label'       => 'Toolbar',
                        'icon'        => 'icon-window-maximize',
                        'url'         => Backend::url('webvpf/backendui/toolbarui'),
                    ],
                    'popoverui' => [
                        'label'       => 'Popover',
                        'icon'        => 'icon-message',
                        'url'         => Backend::url('webvpf/backendui/popoverui'),
                    ],
                    'popupui' => [
                        'label'       => 'Popup',
                        'icon'        => 'icon-object-ungroup',
                        'url'         => Backend::url('webvpf/backendui/popupui'),
                    ],
                    'tabui' => [
                        'label'       => 'Tab',
                        'icon'        => 'icon-table-columns',
                        'url'         => Backend::url('webvpf/backendui/tabui'),
                    ],


                    'utilitiesui' => [
                        'label'       => 'Utilities',
                        'icon'        => 'icon-brands icon-css3-alt',
                        'url'         => Backend::url('webvpf/backendui/utilitiesui'),
                        'attributes'  => [
                            'data-docsection' => 'first',
                            'data-docsection-name' => 'Style',
                        ],
                    ],
                    'flagui' => [
                        'label'       => 'Flag',
                        'icon'        => 'icon-flag',
                        'url'         => Backend::url('webvpf/backendui/flagui'),
                    ],
                    'iconui' => [
                        'label'       => 'Icon',
                        'icon'        => 'icon-font-awesome',
                        'url'         => Backend::url('webvpf/backendui/iconui'),
                    ],
                    'breadcrumbui' => [
                        'label'       => 'Breadcrumb',
                        'icon'        => 'icon-arrow-right',
                        'url'         => Backend::url('webvpf/backendui/breadcrumbui'),
                    ],
                    'paginationui' => [
                        'label'       => 'Pagination',
                        'icon'        => 'icon-ellipsis',
                        'url'         => Backend::url('webvpf/backendui/paginationui'),
                    ],
                    'progressbarui' => [
                        'label'       => 'Progress Bar',
                        'icon'        => 'icon-bars-progress',
                        'url'         => Backend::url('webvpf/backendui/progressbarui'),
                    ],


                    'foundationui' => [
                        'label'       => 'Foundation',
                        'icon'        => 'icon-brands icon-js',
                        'url'         => Backend::url('webvpf/backendui/foundationui'),
                        'attributes'  => [
                            'data-docsection' => 'first',
                            'data-docsection-name' => 'Script',
                        ],
                    ],
                    'dragvalueui' => [
                        'label'       => 'Drag.Value',
                        'icon'        => 'icon-arrow-up-from-bracket',
                        'url'         => Backend::url('webvpf/backendui/dragvalueui'),
                    ],
                    'dragscrollui' => [
                        'label'       => 'Drag.Scroll',
                        'icon'        => 'icon-arrows-left-right-to-line',
                        'url'         => Backend::url('webvpf/backendui/dragscrollui'),
                    ],
                    'dragsortui' => [
                        'label'       => 'Drag.Sort',
                        'icon'        => 'icon-sort',
                        'url'         => Backend::url('webvpf/backendui/dragsortui'),
                    ],
                    'inputhotkeyui' => [
                        'label'       => 'Input.Hotkey',
                        'icon'        => 'icon-keyboard',
                        'url'         => Backend::url('webvpf/backendui/inputhotkeyui'),
                    ],
                    'inputpresetui' => [
                        'label'       => 'Input.Preset',
                        'icon'        => 'icon-keyboard',
                        'url'         => Backend::url('webvpf/backendui/inputpresetui'),
                    ],
                    'inputtriggerui' => [
                        'label'       => 'Input.Trigger',
                        'icon'        => 'icon-keyboard',
                        'url'         => Backend::url('webvpf/backendui/inputtriggerui'),
                    ],
                    'inputmonitorui' => [
                        'label'       => 'Input.Monitor',
                        'icon'        => 'icon-eye',
                        'url'         => Backend::url('webvpf/backendui/inputmonitorui'),
                    ],
                ],
            ],
        ];
    }
}
