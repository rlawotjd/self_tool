1. composer require laravel/scout
2. php artisan vendor:publish --provider="Laravel\Scout\ScoutServiceProvider"
3. https://github.com/meilisearch/meilisearch/releases/tag/v1.6.2 download MeiliSearch
4. Youer Models use Searchable;
5. php artisan scout:import "App\Models\SearchScout
6. SearchScout::search('searchtext')->get();
