<?php

declare(strict_types=1);

namespace Ecourty\DataGouv\Generator\Renderer;

use Ecourty\DataGouv\Generator\Config;

final class FacadeRenderer
{
    public function render(array $tagMethods): string
    {
        $ns = Config::LIB_NAMESPACE;
        $janeNs = Config::JANE_NAMESPACE;

        $useLines = [];
        $hooks = [];

        foreach (array_keys($tagMethods) as $tag) {
            $className = $this->tagToClassName($tag) . 'Api';
            $propName = lcfirst($this->tagToClassName($tag));

            $useLines[] = "use {$ns}\\Api\\{$className};";
            $hooks[] = <<<PHP

                public {$className} \${$propName} {
                    get => new {$className}(\$this->janeClient);
                }
            PHP;
        }

        $useBlock = implode("\n", $useLines);
        $hooksBlock = implode("\n", $hooks);

        return <<<PHP
        <?php

        declare(strict_types=1);

        namespace {$ns};

        use {$janeNs}\\Client;
        use Http\\Client\\Common\\Plugin\\AddHostPlugin;
        use Http\\Client\\Common\\Plugin\\AddPathPlugin;
        use Http\\Client\\Common\\Plugin\\HeaderSetPlugin;
        use Http\\Client\\Common\\PluginClient;
        use Http\\Discovery\\Psr17FactoryDiscovery;
        use Http\\Discovery\\Psr18ClientDiscovery;
        use Psr\\Http\\Client\\ClientInterface;
        {$useBlock}

        /**
         * Main entry point for the data.gouv.fr API client.
         *
         * Usage:
         *   \$client = new DataGouvClient();                      // anonymous (read-only)
         *   \$client = new DataGouvClient(apiKey: 'your-key');    // authenticated
         *
         * @see https://doc.data.gouv.fr/api/intro/
         */
        final class DataGouvClient
        {
            public const string BASE_URL = 'https://www.data.gouv.fr/api/1';
            public const string API_KEY_HEADER = 'X-API-KEY';

            private readonly Client \$janeClient;

        {$hooksBlock}

            public function __construct(
                ?string \$apiKey = null,
                ?ClientInterface \$httpClient = null,
            ) {
                \$httpClient ??= Psr18ClientDiscovery::find();

                \$uri = Psr17FactoryDiscovery::findUriFactory()
                    ->createUri(self::BASE_URL);

                \$plugins = [
                    new AddHostPlugin(\$uri),
                    new AddPathPlugin(\$uri),
                ];

                if (\$apiKey !== null) {
                    \$plugins[] = new HeaderSetPlugin([self::API_KEY_HEADER => \$apiKey]);
                }

                /** @var Client \$janeClient */
                \$janeClient = Client::create(new PluginClient(\$httpClient, \$plugins));
                \$this->janeClient = \$janeClient;
            }
        }
        PHP;
    }

    private function tagToClassName(string $tag): string
    {
        return implode('', array_map('ucfirst', explode('_', $tag)));
    }
}
