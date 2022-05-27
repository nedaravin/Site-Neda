<?php
declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Business;
use App\Models\Product\Category;
use App\Models\Product\Manufacturer;
use App\Models\Product\Product;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Carbon\Carbon;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        $this->line('Preparing..');

        $businesses = (new Business())->where('status', 1)->get();
        $this->line('Creating..');
        $sitemap = Sitemap::create();

        foreach ($businesses as $business) {
            $sitemap->add(Url::create(route('business.show', $business->slug))
                ->setLastModificationDate($business->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(1.0));

            if($business->category){
                $sitemap->add(Url::create('/'.$business->category->slug)
                    ->setLastModificationDate(Carbon::yesterday())
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                    ->setPriority(0.8));

                if($business->gndivision){
                    $sitemap->add(Url::create('/'.$business->category->slug.'/'.$business->gndivision->slug)
                        ->setLastModificationDate(Carbon::yesterday())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.8));
                }

            }



            if($business->categories){
                foreach($business->categories as $sub_category){
                    $sitemap->add(Url::create('/'.$sub_category->slug)
                        ->setLastModificationDate(Carbon::yesterday())
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                        ->setPriority(0.8));

                    if($business->gndivision){
                        $sitemap->add(Url::create('/'.$sub_category->slug.'/'.$business->gndivision->slug)
                            ->setLastModificationDate(Carbon::yesterday())
                            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                            ->setPriority(0.8));
                    }
                }
            }


        }


        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->line('Done..');


//
//        // products
//        $products = (new Product())->where('status', 1)->get();
//
//        // categories
//        $categories = (new Category())
//            ->where('status', 1)
//            ->whereHas('products', function ($e) {
//                $e->where('status', 1);
//            })
//            ->get();
//
//        // Manufacturers
//        $manufacturers = (new Manufacturer())
//            ->where('status', 1)
//            ->whereHas('products', function ($e) {
//                $e->where('status', 1);
//            })
//            ->get();
//
//        // Articles
//        $articles = (new \App\Models\Content\Article())
//            ->where('status', 1)
//            ->get();
//
//        // News
//        $news = (new \App\Models\Content\News())
//            ->where('status', 1)
//            ->get();
//
//        // Videos
//        $videos = (new \App\Models\Content\Video())
//            ->where('status', 1)
//            ->get();
//
//        // Stores
//        $stores = (new \App\Models\Product\Store())
//            ->where('status', 1)
//            ->get();
//
//
//        foreach ($products as $product) {
//            $sitemap->add(Url::create(route('product.show', $product->slug))
//                ->setLastModificationDate($product->updated_at)
//                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
//                ->setPriority(1.0));
//        }
//
//        foreach ($categories as $category) {
//            $sitemap->add(Url::create(route('category.show', $category->slug))
//                ->setLastModificationDate(Carbon::yesterday())
//                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
//                ->setPriority(0.8));
//        }
//
//        foreach ($manufacturers as $manufacturer) {
//            $sitemap->add(Url::create(route('manufacturer.show', $manufacturer->slug))
//                ->setLastModificationDate(Carbon::yesterday())
//                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
//                ->setPriority(0.5));
//        }
//
//        foreach ($articles as $article) {
//            $sitemap->add(Url::create(route('article.show', $article->slug))
//                ->setLastModificationDate(Carbon::yesterday())
//                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//                ->setPriority(0.5));
//        }
//
//        foreach ($news as $news_item) {
//            $sitemap->add(Url::create(route('news.show', $news_item->slug))
//                ->setLastModificationDate(Carbon::yesterday())
//                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//                ->setPriority(0.5));
//        }
//
//        foreach ($videos as $video) {
//            $sitemap->add(Url::create(route('video.show', $video->slug))
//                ->setLastModificationDate(Carbon::yesterday())
//                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//                ->setPriority(0.5));
//        }
//
//        foreach ($stores as $store) {
//            $sitemap->add(Url::create(route('store.show', $store->slug))
//                ->setLastModificationDate(Carbon::yesterday())
//                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//                ->setPriority(0.5));
//        }
//
//        // Add home page
//        $sitemap->add(Url::create(route('home.index'))
//            ->setLastModificationDate(now())
//            ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
//            ->setPriority(1.0));
//
//        // Add Videos landing page
//        $sitemap->add(Url::create(route('video.index'))
//            ->setLastModificationDate(now())
//            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//            ->setPriority(1.0));
//
//        // Add Articles landing page
//        $sitemap->add(Url::create(route('article.index'))
//            ->setLastModificationDate(now())
//            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//            ->setPriority(1.0));
//
//        // Add Events landing page
//        $sitemap->add(Url::create(route('event.index'))
//            ->setLastModificationDate(now())
//            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
//            ->setPriority(1.0));
//
//
//        $sitemap->writeToFile(public_path('sitemap.xml'));
//
//        $this->line('Done..');

//
//        // write-review
//        // modify this to your own needs
//        SitemapGenerator::create(config('app.url'))
//            ->hasCrawled(function (Url $url) {
//                if ($url->segment(1) === 'write-review') {
//                    return false;
//                }
//
//                if ($url->segment(1) === 'administration') {
//                    return false;
//                }
//
//                if ($url->segment(2) && is_numeric($url->segment(2))) {
//                    return false;
//                }
//                return $url;
//            })
//            ->writeToFile(public_path('sitemap.xml'));
    }
}
