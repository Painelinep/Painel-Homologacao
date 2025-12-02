<?php

return array(
    'modules' => array(
        'Application',
        'Dashboard',
        'Autenticacao',
        'Usuario',
        'Estrutura',
        'DOMPDFModule',
        'Gerador',
        'Modulo',
        'RiskManager',
        'Base',
        'Mobile',
        'Classes',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './module/moduloapi',
            './vendor',
            
        ),
        'config_glob_paths' => array(
            'config/autoload/global.php',
        ),
    ),
);
