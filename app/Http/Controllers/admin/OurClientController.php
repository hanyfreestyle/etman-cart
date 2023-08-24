<?php

namespace App\Http\Controllers\admin;

use App\Helpers\AdminHelper;
use App\Helpers\PuzzleUploadProcess;
use App\Http\Controllers\AdminMainController;
use App\Http\Requests\admin\OurClientRequest;
use App\Models\admin\OurClient;
use App\Models\admin\OurClientTranslation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use DB;


class OurClientController extends AdminMainController
{
    public $controllerName ;
    public $PageTitle ;

    function __construct(
        $controllerName = 'OurClient',
    )
    {
        parent::__construct();
        $this->controllerName = $controllerName;
        $this->PageTitle = __('admin/menu.OurClient');

        $this->middleware('permission:'.$controllerName.'_view', ['only' => ['index']]);
        $this->middleware('permission:'.$controllerName.'_add', ['only' => ['create']]);
        $this->middleware('permission:'.$controllerName.'_edit', ['only' => ['edit']]);
        $this->middleware('permission:'.$controllerName.'_delete', ['only' => ['destroy']]);
        $this->middleware('permission:'.$controllerName.'_restore', ['only' => ['SoftDeletes','Restore','ForceDeletes']]);

        $viewDataTable = AdminHelper::arrIsset($this->modelSettings,$controllerName.'_datatable',0) ;
        View::share('viewDataTable', $viewDataTable);
        View::share('tableHeader', AdminHelper::Table_Style($viewDataTable));

    }


#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     index
    public function index()
    {
        $sendArr = ['TitlePage' => $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";
        $pageData['SubView'] = false;
        $OurClients = self::getSelectQuery(OurClient::defquery());
        return view('admin.our_client.index',compact('pageData','OurClients'));
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     create
    public function create()
    {
        $sendArr = ['TitlePage' => $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Add";
        $Client = OurClient::findOrNew(0);
        return view('admin.our_client.form',compact('pageData','Client'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     edit
    public function edit($id)
    {
        $sendArr = ['TitlePage' => $this->PageTitle ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "Edit";

        $Client = OurClient::findOrFail($id);
        return view('admin.our_client.form',compact('pageData','Client'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     storeUpdate
    public function storeUpdate(OurClientRequest $request, $id=0)
    {

        $saveData =  OurClient::findOrNew($id);
        $saveData->setActive((bool) request('is_active', false));
        $saveData->save();

        $saveImgData = new PuzzleUploadProcess();
        $saveImgData->setCountOfUpload('2');
        $saveImgData->setUploadDirIs('client/'.$saveData->id);
        $saveImgData->setnewFileName($request->input('en.name'));
        $saveImgData->UploadOne($request);
        $saveData = AdminHelper::saveAndDeletePhoto($saveData,$saveImgData);
        $saveData->save();

        foreach ( config('app.lang_file') as $key=>$lang) {
            $saveTranslation = OurClientTranslation::where('client_id',$saveData->id)->where('locale',$key)->firstOrNew();
            $saveTranslation->client_id = $saveData->id;
            $saveTranslation->locale = $key;
            $saveTranslation->name = $request->input($key.'.name');
            $saveTranslation->slug = AdminHelper::Url_Slug($request->input($key.'.slug'));
            $saveTranslation->des = $request->input($key.'.des');
            $saveTranslation->g_title = $request->input($key.'.g_title');
            $saveTranslation->g_des = $request->input($key.'.g_des');
            $saveTranslation->save();
        }

       if($id == '0'){
            return redirect(route('OurClient.index'))->with('Add.Done',"");
        }else{
            return redirect(route('OurClient.index'))->with('Edit.Done',"");
        }
    }



#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     destroy
    public function destroy($id)
    {
        $deleteRow = OurClient::findOrFail($id);
        $deleteRow = AdminHelper::DeleteAllPhotos($deleteRow);
        $deleteRow->delete();
        return back()->with('confirmDelete',"");
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     EmptyPhoto
    public function emptyPhoto($id){
        $rowData = OurClient::findOrFail($id);
        $rowData = AdminHelper::DeleteAllPhotos($rowData,true);
        $rowData->save();
        return back();
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     Sort
    public  function Sort(){

        $sendArr = ['TitlePage' => $this->PageTitle  ];
        $pageData = AdminHelper::returnPageDate($this->controllerName,$sendArr);
        $pageData['ViewType'] = "List";

        $OurClient = OurClient::with('translation')
            ->orderBy('postion','asc')
            ->get();
        return view('admin.our_client.sort',compact('OurClient','pageData'));
    }

#@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
#|||||||||||||||||||||||||||||||||||||| #     SaveSort
    public function SaveSort(Request $request){
        $positions = $request->positions;
        foreach($positions as $position) {
            $id = $position[0];
            $newPosition = $position[1];
            $saveData =  OurClient::findOrFail($id) ;
            $saveData->postion = $newPosition;
            $saveData->save();
        }
        return response()->json(['success'=>$positions]);
    }

}
