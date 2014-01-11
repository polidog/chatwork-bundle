<?php
/**
 * Created by PhpStorm.
 * User: polidog
 * Date: 2014/01/11
 * Time: 16:16
 */

namespace Polidog\ChatworkBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;


class ChatworkBundleExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('service.yml');
        if (!empty($config['chatwork']['apikey'])) {
            $container->get('chatwork_client')->authenticate($config['chatwork']['apikey']);
        }
    }
} 