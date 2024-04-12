<?php

namespace Skynettechnologies\Allinoneaccessibility\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use App\Http\Requests\PublicRequest;
use Litepie\Database\RequestScope;
use Skynettechnologies\Allinoneaccessibility\Http\Resources\AllinoneaccessibilityResource;
use Skynettechnologies\Allinoneaccessibility\Http\Resources\AllinoneaccessibilitysCollection;
use Skynettechnologies\Allinoneaccessibility\Scopes\AllinoneaccessibilityPublicScope;
use Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility;

class AllinoneaccessibilityPublicController extends BaseController
{

    /**
     * Show allinoneaccessibility's list.
     *
     * @return response
     */
    protected function index(PublicRequest $request)
    {
        $search = $request->search;
        $pageLimit = $request->input('pageLimit', config('database.pagination.limit'));
        $page = Allinoneaccessibility::pushScope(new RequestScope())
            ->pushScope(new AllinoneaccessibilityPublicScope())
            ->paginate($pageLimit)
            ->withQueryString();

        $data = new AllinoneaccessibilitysCollection($page);

        $categories = [];
        $tags = [];
        $recent = [];

        return $this->response->setMetaTitle(trans('allinoneaccessibility::allinoneaccessibility.names'))
            ->view('allinoneaccessibility::public.allinoneaccessibility.index')
            ->data(compact('data', 'categories', 'tags', 'recent'))
            ->output();
    }

    /**
     * Show allinoneaccessibility.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show(PublicRequest $request, $slug='default')
    {
        $model = Allinoneaccessibility::findBySlug($slug);
        $data = new AllinoneaccessibilityResource($model);

        $categories = [];
        $tags = [];
        $recent = [];

        return $this->response->setMetaTitle($data['title'] . trans('allinoneaccessibility::allinoneaccessibility.name'))
            ->view('allinoneaccessibility::public.allinoneaccessibility.show')
            ->data(compact('data', 'categories', 'tags', 'recent'))
            ->output();
    }

}
