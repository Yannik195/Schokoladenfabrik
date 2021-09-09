<?php declare(strict_types=1);

namespace Shopware\Administration\Snippet;

use Shopware\Core\Kernel;
use Symfony\Component\Finder\Finder;

class SnippetFinder implements SnippetFinderInterface
{
    private Kernel $kernel;

    public function __construct(Kernel $kernel)
    {
        $this->kernel = $kernel;
    }

    public function findSnippets(string $locale): array
    {
        $snippetFiles = $this->findSnippetFiles($locale);

        if (!\count($snippetFiles)) {
            return [];
        }

        return $this->parseFiles($snippetFiles);
    }

    private function getPluginPaths(): array
    {
        $activePlugins = $this->kernel->getPluginLoader()->getPluginInstances()->getActives();
        $paths = [];

        foreach ($activePlugins as $plugin) {
            $pluginPath = $plugin->getPath() . '/Resources/app/administration';
            if (!file_exists($pluginPath)) {
                continue;
            }

            $paths[] = $pluginPath;
        }

        return $paths;
    }

    private function findSnippetFiles(?string $locale = null, bool $withPlugins = true): array
    {
        $finder = (new Finder())
            ->files()
            ->in(__DIR__ . '/../../*/Resources/app/administration/src/')
            ->ignoreUnreadableDirs();

        if ($locale) {
            $finder->name(sprintf('%s.json', $locale));
        } else {
            $finder->name('/[a-z]{2}-[A-Z]{2}\.json/');
        }

        if ($withPlugins) {
            $finder->in($this->getPluginPaths());
        }

        $iterator = $finder->getIterator();
        $files = [];

        foreach ($iterator as $file) {
            $files[] = $file->getRealPath();
        }

        return $files;
    }

    private function parseFiles(array $files): array
    {
        $snippets = [[]];

        foreach ($files as $file) {
            if (is_file($file) === false) {
                continue;
            }
            $content = file_get_contents($file);
            if ($content !== false) {
                $snippets[] = json_decode($content, true) ?? [];
            }
        }

        $snippets = array_replace_recursive(...$snippets);

        ksort($snippets);

        return $snippets;
    }
}
