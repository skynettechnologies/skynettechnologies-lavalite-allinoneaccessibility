<?php

namespace Skynettechnologies\Allinoneaccessibility\Http\Controllers;

use Exception;
use Illuminate\Http\Resources\Json\JsonResource;
use Skynettechnologies\Allinoneaccessibility\Actions\AllinoneaccessibilityAction;
use Skynettechnologies\Allinoneaccessibility\Actions\AllinoneaccessibilityActions;
use Skynettechnologies\Allinoneaccessibility\Forms\Allinoneaccessibility as AllinoneaccessibilityForm;
use Skynettechnologies\Allinoneaccessibility\Http\Requests\AllinoneaccessibilityResourceRequest;
use Skynettechnologies\Allinoneaccessibility\Http\Resources\AllinoneaccessibilityResource;
use Skynettechnologies\Allinoneaccessibility\Http\Resources\AllinoneaccessibilitysCollection;
use Skynettechnologies\Allinoneaccessibility\Models\Allinoneaccessibility;
use Litepie\Http\Controllers\ResourceController as BaseController;
use Illuminate\Support\Facades\DB;
use Theme;
use Illuminate\Database\Seeder;

/**
 * Resource controller class for allinoneaccessibility.
 */
class AllinoneaccessibilityResourceController extends BaseController
{

    /**
     * Initialize allinoneaccessibility resource controller.
     *
     *
     * @return null
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware(function ($request, $next) {
            $this->form = AllinoneaccessibilityForm::only('main')
                ->setAttributes()
                ->toArray();
            $this->modules = $this->modules(config('skynettechnologies.allinoneaccessibility.modules'), 'allinoneaccessibility', guard_url('allinoneaccessibility'));
            return $next($request);
        });
    }

    /**
     * Display a list of allinoneaccessibility.
     *
     * @return Response
     */
    public function index(AllinoneaccessibilityResourceRequest $request,Allinoneaccessibility $model)
    {
            $current_domain_name = $_SERVER['HTTP_HOST'];
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://ada.skynettechnologies.us/check-website',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('domain' =>  $current_domain_name) //'xoopsdemo.com'
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $settingURLObject = json_decode($response);
            $dependencies = array();
            $theme = Theme::uses('default')->layout('app');
            $theme->asset()->writeStyle('inline-style', '

                    body {
                        padding-left: 76px;
                        padding-top: 50px;
                    }
                    .app-content-wrap, .app-wrap {
                        display: none;
                    }
                    .app-wrap {
                        min-height: auto !important;
                    }
                    .aioa-heading-wrapper,
                    .aioa-expire-plan-wrapper,
                    .aioa-new-user-wrapper{
                        padding-left: 1.5rem;
                    }
                    .aioa-heading-wrapper .aioa-cancel-button,
                    .aioa-expire-plan-wrapper .aioa-cancel-button,
                    .aioa-new-user-wrapper .aioa-cancel-button {
                        font-size: 18px;
                        font-weight: bold;
                    }
                    .toast-bottom-left{
                      display:none;
                    }
                ', $dependencies);
            try{
                if(isset($settingURLObject->status) && $settingURLObject->status == 3)
                { ?>
                    <div class="aioa-expire-plan-wrapper">
                        <h3 style="color: #aa1111">It appears that you have already registered! Please click on the "Manage Subscription" button to renew your subscription.<br> Once your plan is renewed, please refresh the page.</h3>
                        <div style="text-align: left; width:100%; padding-bottom: 10px;"><a target="_blank" class="aioa-cancel-button"  href="<?php echo $settingURLObject->settinglink;?>">Manage Subscription</a></div>
                    </div>
                <?php }
                else if(isset($settingURLObject->status) && $settingURLObject->status > 0 && $settingURLObject->status < 3)
                {
                    ?>
                    <div class="aioa-heading-wrapper">
                        <h2>Widget Preferences:</h2>
                        <div style="width:100%; padding-bottom: 10px;">
                            <a target="_blank" class="aioa-cancel-button" href="<?php echo $settingURLObject->manage_domain;?>">Manage Subscription</a>
                        </div>
                    </div>
                    <iframe id="aioamyIframe" width="100%" style=" height: calc(100vh - 150px); max-width: 1920px;" height="2900px"  src="<?php echo $settingURLObject->settinglink; ?>"></iframe>
                    <?php
                }
                else{
                    ?>
                    <div class="aioa-new-user-wrapper">
                    <iframe src="https://ada.skynettechnologies.us/trial-subscription?isframe=true&website=<?php echo $current_domain_name;?>&developer_mode=true" height="600px;" width="100%" style="    height: calc(100vh - 100px); border: none;"></iframe>
                    </div>
                    <?php
                }
            } catch(Exception $e){}
            $form = $this->form;
            $modules = $this->modules;
            $data = new AllinoneaccessibilityResource($model);
            return $this->response->setMetaTitle(trans('allinoneaccessibility::allinoneaccessibility.names'))
                ->view('allinoneaccessibility::allinoneaccessibility.index')
                ->data(compact('data','form','modules'))
                ->output();
        }

    /**
     * Display allinoneaccessibility.
     *
     * @param Request $request
     * @param Model   $allinoneaccessibility
     *
     * @return Response
     */
    public function show(AllinoneaccessibilityResourceRequest $request, Allinoneaccessibility $model)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = new AllinoneaccessibilityResource($model);
        return $this->response
            ->setMetaTitle(trans('app.view') . ' ' . trans('allinoneaccessibility::allinoneaccessibility.name'))
            ->data(compact('data', 'form', 'modules'))
            ->view('allinoneaccessibility::allinoneaccessibility.show')
            ->output();
    }

    /**
     * Show the form for creating a new allinoneaccessibility.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(AllinoneaccessibilityResourceRequest $request, Allinoneaccessibility $model)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = new AllinoneaccessibilityResource($model);
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('allinoneaccessibility::allinoneaccessibility.name'))
            ->view('allinoneaccessibility::allinoneaccessibility.create')
            ->data(compact('data', 'form', 'modules'))
            ->output();

    }

    /**
     * Create new allinoneaccessibility.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(AllinoneaccessibilityResourceRequest $request, Allinoneaccessibility $model)
    {
        try {
            $request = $request->all();
            $model = AllinoneaccessibilityAction::run('store', $model, $request);
            $data = new AllinoneaccessibilityResource($model);
            return $this->response->message(trans('messages.success.created', ['Module' => trans('allinoneaccessibility::allinoneaccessibility.name')]))
                ->code(204)
                ->data(compact('data'))
                ->status('success')
                ->url(guard_url('allinoneaccessibility/allinoneaccessibility/' . $model->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/allinoneaccessibility/allinoneaccessibility'))
                ->redirect();
        }

    }

    /**
     * Show allinoneaccessibility for editing.
     *
     * @param Request $request
     * @param Model   $allinoneaccessibility
     *
     * @return Response
     */
    public function edit(AllinoneaccessibilityResourceRequest $request, Allinoneaccessibility $model)
    {
        $form = $this->form;
        $modules = $this->modules;
        $data = new AllinoneaccessibilityResource($model);
        // return view('allinoneaccessibility::allinoneaccessibility.edit', compact('data', 'form', 'modules'));

        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('allinoneaccessibility::allinoneaccessibility.name'))
            ->view('allinoneaccessibility::allinoneaccessibility.edit')
            ->data(compact('data', 'form', 'modules'))
            ->output();

    }

    /**
     * Update the allinoneaccessibility.
     *
     * @param Request $request
     * @param Model   $allinoneaccessibility
     *
     * @return Response
     */
    public function update(AllinoneaccessibilityResourceRequest $request, Allinoneaccessibility $model)
    {
        try {
            $request = $request->all();
            $model = AllinoneaccessibilityAction::run('update', $model, $request);
            $data = new AllinoneaccessibilityResource($model);

            return $this->response->message(trans('messages.success.updated', ['Module' => trans('allinoneaccessibility::allinoneaccessibility.name')]))
                ->code(204)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('allinoneaccessibility/allinoneaccessibility/' . $model->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('allinoneaccessibility/allinoneaccessibility/' . $model->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the allinoneaccessibility.
     *
     * @param Model   $allinoneaccessibility
     *
     * @return Response
     */
    public function destroy(AllinoneaccessibilityResourceRequest $request, Allinoneaccessibility $model)
    {
        try {

            $request = $request->all();
            $model = AllinoneaccessibilityAction::run('destroy', $model, $request);
            $data = new AllinoneaccessibilityResource($model);

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('allinoneaccessibility::allinoneaccessibility.name')]))
                ->code(202)
                ->status('success')
                ->data(compact('data'))
                ->url(guard_url('allinoneaccessibility/allinoneaccessibility/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('allinoneaccessibility/allinoneaccessibility/' . $model->getRouteKey()))
                ->redirect();
        }

    }
}
