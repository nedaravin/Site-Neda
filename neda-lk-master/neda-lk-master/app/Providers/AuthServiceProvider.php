<?php

namespace App\Providers;

use App\Models\Auth\User;
use App\Models\ContactRequest;
use App\Models\Content\BusinessServiceType;
use App\Models\Content\Document;
use App\Models\Content\Event;
use App\Models\Content\Gallery;
use App\Models\Content\News;
use App\Models\Content\Page;
use App\Models\Content\Video;
use App\Models\Entrepreneur;
use App\Models\Forms\BackToBusiness;
use App\Models\Forms\LogoRequest;
use App\Models\Forms\RecruitmentOfManagementAssistant2021;
use App\Models\Forms\RecruitmentOfStaffApplication2021;
use App\Models\Government\District;
use App\Models\Government\DivisionalSecretariat;
use App\Models\Government\GramaNiladhariDivision;
use App\Models\Government\Province;
use App\Models\Menu;
use App\Models\Theme\ContentBlock;
use App\Policies\BackToBusinessPolicy;
use App\Policies\BusinessServiceTypePolicy;
use App\Policies\ContactRequestPolicy;
use App\Policies\ContentBlockPolicy;
use App\Policies\DistrictPolicy;
use App\Policies\DivisionalSecretariatPolicy;
use App\Policies\DocumentPolicy;
use App\Policies\EntrepreneurPolicy;
use App\Policies\EventPolicy;
use App\Policies\GalleryPolicy;
use App\Policies\GramaNiladhariDivisionPolicy;
use App\Policies\LogoRequestPolicy;
use App\Policies\MenuPolicy;
use App\Policies\NewsPolicy;
use App\Policies\PagePolicy;
use App\Policies\ProvincePolicy;
use App\Policies\RecruitmentOfManagementAssistant2021Policy;
use App\Policies\RecruitmentOfStaffApplication2021Policy;
use App\Policies\UserPolicy;
use App\Policies\VideoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class => UserPolicy::class,
        Document::class => DocumentPolicy::class,
        Event::class => EventPolicy::class,
        Gallery::class => GalleryPolicy::class,
        News::class => NewsPolicy::class,
        Page::class => PagePolicy::class,
        Video::class => VideoPolicy::class,
        District::class => DistrictPolicy::class,
        DivisionalSecretariat::class => DivisionalSecretariatPolicy::class,
        Province::class => ProvincePolicy::class,
        ContentBlock::class => ContentBlockPolicy::class,
        Menu::class => MenuPolicy::class,
        LogoRequest::class => LogoRequestPolicy::class,
        RecruitmentOfManagementAssistant2021::class => RecruitmentOfManagementAssistant2021Policy::class,
        RecruitmentOfStaffApplication2021::class => RecruitmentOfStaffApplication2021Policy::class,
        BusinessServiceType::class => BusinessServiceTypePolicy::class,
        GramaNiladhariDivision::class => GramaNiladhariDivisionPolicy::class,
        ContactRequest::class => ContactRequestPolicy::class,
        BackToBusiness::class => BackToBusinessPolicy::class,
        Entrepreneur::class => EntrepreneurPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
