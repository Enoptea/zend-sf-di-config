<?php

namespace JSoumelidis\SymfonyDI\Config;

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ContainerFactory
{
    /**
     * @param ConfigInterface $config
     * @param ContainerBuilder|null $builder
     *
     * @return ContainerInterface
     */
    public function __invoke(ConfigInterface $config, ContainerBuilder $builder = null)
    {
        if (null === $builder) {
            $builder = new ContainerBuilder();
        }

        $config->configureContainerBuilder($builder);

        return $builder;
    }
}
