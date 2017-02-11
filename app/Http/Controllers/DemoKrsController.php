<?php

namespace App\Http\Controllers;

use App\Api;
use App\KontrakKrs;
use Illuminate\Http\Request;
use LaravelFCM\Facades\FCM;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;

class DemoKrsController extends Controller
{

    public function index(Request $request)
    {
        $param['tahun'] = '2016';
        $param['semester'] = $request->input('semester','');
        $param['kodeprodi'] = $request->input('kodeprodi','');
        $response = Api::getService('getallkurikulum',$param);
        $id = 1;

        $kontrak = KontrakKrs::where('nim',session('nim'))->where('tahun',$request->input('tahun',''))->where('semester',$param['semester'])->get();


        return view('krs.index',compact('response','id','kontrak'));
    }

    public function filterKrs(Request $request)
    {
        return view('krs.filterkrs');
    }

    public function storeKrs(Request $request)
    {
        $input = $request->all();

        foreach ($input['kodemakul'] as $kdmkl){

            $arrMakul = explode('.',$kdmkl);

            $kontrak = new KontrakKrs();
            $kontrak->nim = session('nim');
            $kontrak->kodemakul = $arrMakul[0];
            $kontrak->namamakul = $arrMakul[1];
            $kontrak->tahun = $input['tahun'];
            $kontrak->semester = $input['semester'];
            $kontrak->pa = session('pa');

            $cek = KontrakKrs::where('nim',session('nim'))->where('kodemakul',$arrMakul[0])->first();
            if(!$cek){
                $kontrak->save();
            }
        }

        $this->sendNotification(session('pa'), session('nim'), $kontrak);

        return redirect(url('krs').'?tahun='.$input['tahun'].'&semester='.$input['semester'].'&kodeprodi='.$input['kodeprodi'].'');
    }

    public function sendNotification($nidn, $nim, $objek)
    {
        $notificationBuilder = new PayloadNotificationBuilder('KRS NOTIFIER');
        $notificationBuilder->setBody($nim.' sedang mengontrak kuliah')
            ->setSound('default');

        $notification = $notificationBuilder->build();

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData($objek->toArray());
        $dataBuilder->addData(['type'=>'kontrak_krs']);
        $data = $dataBuilder->build();

        $topic = new Topics();
        $topic->topic($nidn);

        $topicResponse = \FCM::sendToTopic($topic, null, $notification, $data);

        $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error();
    }


}
