<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function upload(Request $request)
    {
        
        $utube = $request->utube;
        $sdate = $request->sdate;
        $sdesc = $request->sdesc;
        $token = $request->_token;
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/admin/upload",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => array('message' => 'Reading the script','pnum' => '08165126553','email' => 'Linda@lin.com','fname' => 'lol','_token' => '58568566'),
        CURLOPT_POSTFIELDS => array('utube' => $utube,'sdate' => $sdate,'sdesc' => $sdesc,'_token' => $token),
       
        ));

        //print_r($_POST); die();

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        //return $response;
        $status = $response['status'];
        $message = $response['message'];

        if($status == 'OK'){
            return back()->with('success', $message);
        }else{
            return back()->with('error',$message);
        }
    }

    public function uploadProgramme(Request $request)
    {
        
        $upJpg = $request->file('upJpg');
        $new_name = rand().'.'.$upJpg->getClientOriginalExtension();
        $upJpg->move(public_path("images"), $new_name);
        $sdate = $request->sdate;
        $edate = $request->edate;
        $token = $request->_token;
        //return back()->with('path', $new_name)->with('success', $new_name);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/admin/programme",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => array('message' => 'Reading the script','pnum' => '08165126553','email' => 'Linda@lin.com','fname' => 'lol','_token' => '58568566'),
        CURLOPT_POSTFIELDS => array('upJpg' => $new_name,'sdate' => $sdate,'edate' => $edate,'_token' => $token),
       
        ));

       //print_r($request); die();

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        //return $response;
        
        $status = $response['status'];
        $message = $response['message'];

        if($status == 'OK'){
            return back()->with('success', $message);
        }else{
            return back()->with('error',$message);
        }
    }
    public function thumbnail(Request $request)
    {
        
        $upJpg = $request->file('upJpg');
        $new_name = rand().'.'.$upJpg->getClientOriginalExtension();
        $upJpg->move(public_path("images"), $new_name);
        $desc = $request->input('desc');      
        $token = $request->_token;
        //return back()->with('path', $new_name)->with('success', $new_name);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/admin/thumbnail",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => array('message' => 'Reading the script','pnum' => '08165126553','email' => 'Linda@lin.com','fname' => 'lol','_token' => '58568566'),
        CURLOPT_POSTFIELDS => array('upJpg' => $new_name,'desc' => $desc,'_token' => $token),
       
        ));

    //    print_r($request); die();

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        // return $response;
        
        $status = $response['status'];
        $message = $response['message'];

        if($status == 'OK'){
            return back()->with('success', $message);
        }else{
            return back()->with('error',$message);
        }
    }

    public function newGallery(Request $request)
    {
        
        $upImage = $request->file('upImage');
        $new_name = rand().'.'.$upImage->getClientOriginalExtension();
        $upImage->move(public_path("images"), $new_name);
        $desc = $request->input('desc');      
        $cat = $request->input('cat');      
        $token = $request->_token;
        //return back()->with('path', $new_name)->with('success', $new_name);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/admin/newGallery",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => array('message' => 'Reading the script','pnum' => '08165126553','email' => 'Linda@lin.com','fname' => 'lol','_token' => '58568566'),
        CURLOPT_POSTFIELDS => array('upImage' => $new_name,'desc' => $desc, 'cat' => $cat,'_token' => $token),
       
        ));

    //    print_r($request); die();

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        // return $response;
        
        $status = $response['status'];
        $message = $response['message'];

        if($status == 'OK'){
            return back()->with('success', $message);
        }else{
            return back()->with('error',$message);
        }
    }

   
    
}
