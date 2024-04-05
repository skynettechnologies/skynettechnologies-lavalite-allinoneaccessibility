<?php

namespace Skynettechnologies\Allinoneaccessibility\Actions;

use Illuminate\Support\Str;
use Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility;
use Skynettechnologies\Allinoneaccessibility\Scopes\AllinoneaccessibilityResourceScope;
use Litepie\Actions\Concerns\AsAction;
use Litepie\Actions\Traits\LogsActions;
use Litepie\Database\RequestScope;

class AllinoneaccessibilityActions
{
    use AsAction;
    use LogsActions;

    protected $model;
    protected $namespace = 'skynettechnologies.allinoneaccessibility.allinoneaccessibility';
    protected $eventClass = \Skynettechnologies\Allinoneaccessibility\Events\AllinoneaccessibilityAction::class;
    protected $action;
    protected $function;
    protected $request;

    public function handle(string $action, array $request)
    {
        $this->model = app(Allinoneaccessibility::class);
        $this->action = $action;
        $this->request = $request;
        $this->function = Str::camel($action);

        $function = Str::camel($action);

        $this->dispatchActionBeforeEvent();
        $data = $this->$function($request);
        $this->dispatchActionAfterEvent();

        $this->logsAction();
        return $data;

    }

    public function paginate(array $request)
    {
        $pageLimit = isset($request['pageLimit']) ?: config('database.pagination.limit');
        $allinoneaccessibility = $this->model
            ->pushScope(new RequestScope())
            ->pushScope(new AllinoneaccessibilityResourceScope())
            ->paginate($pageLimit);

        return $allinoneaccessibility;
    }

    public function simplePaginate(array $request)
    {
        $pageLimit = isset($request['pageLimit']) ?: config('database.pagination.limit');
        $allinoneaccessibility = $this->model
            ->pushScope(new RequestScope())
            ->pushScope(new AllinoneaccessibilityResourceScope())
            ->simplePaginate($pageLimit);

        return $allinoneaccessibility;
    }

    function empty(array $request) {
        return $this->model->forceDelete();
    }

    function restore(array $request) {
        return $this->model->restore();
    }

    public function delete(array $request)
    {
        $ids = $request['ids'];
        $ids = collect($ids)->map(function ($id) {
            return hashids_decode($id);
        });
        return $this->model->whereIn('id', $ids)->delete();
    }
}
