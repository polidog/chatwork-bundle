<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2014/01/11
 * Time: 16:02
 */

namespace Polidog\ChatworkBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        return (new TreeBuilder())->root('chatwork')
            ->children()
                ->arrayNode('apikey')
                    ->children()
                        ->scalarNode('token')->defaultValue("")
                    ->end()
                ->end()
            ->end();
    }
} 