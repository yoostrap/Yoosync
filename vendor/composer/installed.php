<?php return array(
    'root' => array(
        'name' => 'yoostrap/yoosync',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'af7397347b99b0c04fdd6727edfba7df92dd9fd3',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'squizlabs/php_codesniffer' => array(
            'pretty_version' => '3.11.2',
            'version' => '3.11.2.0',
            'reference' => '1368f4a58c3c52114b86b1abe8f4098869cb0079',
            'type' => 'library',
            'install_path' => __DIR__ . '/../squizlabs/php_codesniffer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'wp-coding-standards/wpcs' => array(
            'pretty_version' => '2.3.0',
            'version' => '2.3.0.0',
            'reference' => '7da1894633f168fe244afc6de00d141f27517b62',
            'type' => 'phpcodesniffer-standard',
            'install_path' => __DIR__ . '/../wp-coding-standards/wpcs',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'yoostrap/yoosync' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'af7397347b99b0c04fdd6727edfba7df92dd9fd3',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
