<?php

namespace App\Http\Controllers;

use App\Api;
use App\KontrakKrs;
use Illuminate\Http\Request;
use LaravelFCM\Message\PayloadDataBuilder;
use LaravelFCM\Message\PayloadNotificationBuilder;
use LaravelFCM\Message\Topics;

class ApprovalKrsController extends Controller
{
    public function index()
    {
        $kontrak = KontrakKrs::wherePa(session('nidn'))
                ->groupBy('nim')->get();

        return view('approval.index',compact('kontrak'));

    }
    public function show($nim)
    {
        $kontrak = KontrakKrs::whereNim($nim)
            ->orderBy('setujui','ASC')
            ->get();

        $arrSetujui = [
            '0' => '-- Pilih Aksi --',
            '1' => 'Setujui',
            '2' => 'Tolak'
        ];

        return view('approval.daftar',compact('kontrak','arrSetujui'));
    }

    public function setujui(Request $request)
    {
        $input = $request->all();
        $mNim = '';
        //dd($input);
        foreach ($input['setujui'] as $nim=>$kodemks){
            //dd($kodemks);
            foreach ($kodemks as $kodemk=>$val){

                $k = KontrakKrs::where('nim',$nim)->where('kodemakul',$kodemk)->first();
                $k->setujui = $val;
                $k->save();

                if($val == 1)
                    $this->sendNotification($k->pa, $nim, $k);
                if($val == 2)
                    $this->sendNotificationTolak($k->pa, $nim, $k);
            }
            $mNim = $nim;
        }
        return redirect(url('approve',$mNim));
    }

    public function getNamaMhs($nim)
    {
        $param['nim'] = $nim;
        $res = Api::getService('cari_mahasiswa',$param);

        return $res['data']['NAMA'];
    }

    public function sendNotification($nidn, $nim, $objek)
    {
        $notificationBuilder = new PayloadNotificationBuilder('KRS NOTIFIER');
        $notificationBuilder->setBody($objek->namamakul.' Telah disetujui')
            ->setSound('default');

        $notification = $notificationBuilder->build();

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData($objek->toArray());
        $dataBuilder->addData(['type'=>'approve_krs']);
        $data = $dataBuilder->build();

        $topic = new Topics();
        $topic->topic($nim);

        $topicResponse = \FCM::sendToTopic($topic, null, $notification, $data);

        $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error();
    }

    public function sendNotificationTolak($nidn, $nim, $objek)
    {
        $notificationBuilder = new PayloadNotificationBuilder('KRS NOTIFIER');
        $notificationBuilder->setBody($objek->namamakul.' Ditolak')
            ->setSound('default');

        $notification = $notificationBuilder->build();

        $dataBuilder = new PayloadDataBuilder();
        $dataBuilder->addData($objek->toArray());
        $dataBuilder->addData(['type'=>'approve_krs']);
        $data = $dataBuilder->build();

        $topic = new Topics();
        $topic->topic($nim);

        $topicResponse = \FCM::sendToTopic($topic, null, $notification, $data);

        $topicResponse->isSuccess();
        $topicResponse->shouldRetry();
        $topicResponse->error();
    }
}
