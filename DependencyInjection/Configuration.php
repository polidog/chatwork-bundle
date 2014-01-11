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
        $treeBuilder = new TreeBuilder();
        $treeBuilder->root('chatwork')
            ->children()
            ->scalarNode('apikey')->defaultNull()->end()
            ->end();

        return $treeBuilder;
    }
} 