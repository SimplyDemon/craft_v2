<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use App\Models\ResourceAdminPrice;
use Illuminate\Support\Facades\Log;

class PriceParserController extends Controller
{
    protected array $blackListItems;
    protected array $replaceWorldsRules;

    public function start($command)
    {
        $filePath = $this->getFilePath();
        $command->info('File is: ' . $filePath);
        $parsedResources = json_decode(file_get_contents($filePath), true);
        $resourcesBlackList = $this->getResourcesBlackList();
        $replaceWorldsRules = $this->getReplaceWorldsRules();

        foreach ($parsedResources as $parsedResource) {
            /* Ignore items in black list */
            if (in_array($parsedResource['name'], $resourcesBlackList)) {
                $command->info('Resource in black list: ' . $parsedResource['name']);
                continue;
            }

            /* If name is incorrect - replace it with correct one */
            if (isset($replaceWorldsRules[$parsedResource['name']])) {
                $command->info(
                    "Name '{$parsedResource['name']}' incorrect, replaced on '{$replaceWorldsRules[$parsedResource['name']]}'."
                );
                $parsedResource['name'] = $replaceWorldsRules[$parsedResource['name']];
            }
            $resource = Resource::where('name', $parsedResource['name'])->get();

            /* Log if item name was not parsed correct */
            if ($resource->isEmpty()) {
                $command->warn('Resource not found: ' . $parsedResource['name']);
                Log::channel('parser')->info("Resource {$parsedResource['name']} was not found. File " . $filePath);
            } elseif ($resource->count() > 1) {
                $command->warn("Resource {$parsedResource['name']} found for than one item. File " . $filePath);
                Log::channel('parser')->info(
                    "Resource {$parsedResource['name']} found for than one item. File " . $filePath
                );
            } else {
                $resource = $resource->first();
                $resource->update([
                    'price_sell' => (int)$parsedResource['price'],
                ]);

                ResourceAdminPrice::create([
                    'resource_id' => $resource->id,
                    'price_sell'  => (int)$parsedResource['price'],
                ]);
            }
        }

        OptionsController::updateLastResourcesPricesUpdateTime();
    }

    /*
     * Ignore some resources prices, coz it can buy from npc
     */
    protected function setResourcesBlackList()
    {
        $this->blackListItems = [
            'Soulstone',
            'Spirit Ore',
            'Gemstone (B-grade)',
            'Gemstone (C-grade)',
        ];
    }

    protected function getResourcesBlackList(): array
    {
        if (empty($this->blackListItems)) {
            $this->setResourcesBlackList();
        }

        return $this->blackListItems;
    }

    /*
     * Some words need to replace, coz in broker they have error names, for example:
     * Animal Bone Fragment -> Animal Bone
     */
    protected function setReplaceWorldsRules()
    {
        $this->replaceWorldsRules = [
            'Animal Bone Fragment' => 'Animal Bone',
            'Warsmith\' Holder' => 'Warsmith Holder',
            'Durable Metal Piate' => 'Durable Metal Plate',
            'Crystal (S-grade)' => 'Crystal S',
            'Crystal (A-grade)' => 'Crystal A',
            'Crystal (B-grade)' => 'Crystal B',
            'Crystal (C-grade)' => 'Crystal C',
            'Crystal (D-grade)' => 'Crystal D',
        ];
    }

    protected function getReplaceWorldsRules(): array
    {
        if (empty($this->replaceWorldsRules)) {
            $this->setReplaceWorldsRules();
        }

        return $this->replaceWorldsRules;
    }

    protected function getFilePath(): string
    {
        $directoryWithParsedData = resource_path('parsed-screenshots');
        $files                   = scandir($directoryWithParsedData, SCANDIR_SORT_DESCENDING);
        $newestFile              = $files[0];

        return $directoryWithParsedData.DIRECTORY_SEPARATOR.$newestFile;
    }
}
