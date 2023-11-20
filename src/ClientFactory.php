<?php

declare(strict_types=1);

namespace Yngc0der\EasyWeek;

use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\ErrorPlugin;
use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;

final class ClientFactory
{
    public static function create(string $token, ?ClientInterface $httpClient = null): Client
    {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $pluginHttpClient = new PluginClient(
            $httpClient,
            [
                new ErrorPlugin(),
                new HeaderAppendPlugin([
                    'Authorization' => 'Bearer ' . $token,
                ]),
                new BaseUriPlugin(Psr17FactoryDiscovery::findUriFactory()
                    ->createUri('https://widget.easyweek.io')),
            ]
        );

        return Client::create($pluginHttpClient);
    }
}
