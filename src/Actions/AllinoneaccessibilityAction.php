<?php

namespace Skynettechnologies\Allinoneaccessibility\Actions;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Litepie\Actions\Concerns\AsAction;
use Litepie\Actions\Traits\LogsActions;
use Litepie\Notification\Traits\SendNotification;
use Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility;


class AllinoneaccessibilityAction
{
    use AsAction;

    protected $model;
    protected $namespace = 'skynettechnologies.allinoneaccessibility.allinoneaccessibility';
    protected $eventClass = \Skynettechnologies\Allinoneaccessibility\Events\AllinoneaccessibilityAction::class;
    protected $action;
    protected $function;
    protected $request;

    public function handle(string $action, Allinoneaccessibility $allinoneaccessibility, array $request = [])
    {
        $this->action = $action;
        $this->request = $request;
        $this->model = $allinoneaccessibility;
        $this->function = Str::camel($action);
        $this->executeAction();
        return $this->model;

    }



    public function store(Allinoneaccessibility $allinoneaccessibility, array $request)
    {
        $attributes = $request;
        $attributes['user_id'] = user_id();
        $attributes['user_type'] = user_type();
        $allinoneaccessibility = $allinoneaccessibility->create($attributes);
        return $allinoneaccessibility;
    }

    public function update(Allinoneaccessibility $allinoneaccessibility, array $request)
    {
        $attributes = $request;
        $allinoneaccessibility->update($attributes);
        return $allinoneaccessibility;
    }

    public function destroy(Allinoneaccessibility $allinoneaccessibility, array $request)
    {
        $allinoneaccessibility->delete();
        return $allinoneaccessibility;
    }

    public function copy(Allinoneaccessibility $allinoneaccessibility, array $request)
    {
        $count = $request['count'] ?: 1;

        if ($count == 1) {
            $allinoneaccessibility = $allinoneaccessibility->replicate();
            $allinoneaccessibility->created_at = Carbon::now();
            $allinoneaccessibility->save();
            return $allinoneaccessibility;
        }

        for ($i = 1; $i <= $count; $i++) {
            $new = $allinoneaccessibility->replicate();
            $new->created_at = Carbon::now();
            $new->save();
        }

        return $allinoneaccessibility;
    }


}
