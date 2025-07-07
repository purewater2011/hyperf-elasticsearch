<?php


namespace PurewaterEs\ScoutElastic;


class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [],
            'annotations'  => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'commands'     => [
                \PurewaterEs\ScoutElastic\Console\ElasticUpdateMappingCommand::class,
                \PurewaterEs\ScoutElastic\Console\ElasticIndexCreateCommand::class,
                \PurewaterEs\ScoutElastic\Console\ElasticIndexDropCommand::class,
                \PurewaterEs\ScoutElastic\Console\ElasticIndexUpdateCommand::class,
                \PurewaterEs\ScoutElastic\Console\IndexConfiguratorMakeCommand::class,
                \PurewaterEs\ScoutElastic\Console\SearchRuleMakeCommand::class,
                \PurewaterEs\ScoutElastic\Console\ElasticImportCommand::class,
                \PurewaterEs\ScoutElastic\Console\SearchableModelMakeCommand::class,
            ],
            'listeners'    => [],
            'publish'      => [
                [
                    'id'          => 'config',
                    'description' => 'elasticsearch connect config',
                    'source'      => __DIR__ . '/../config/scout_elastic.php',
                    'destination' => BASE_PATH . '/config/autoload/scout_elastic.php',
                ]
            ]

        ];
    }
}