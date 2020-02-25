<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contact(Request $request)
    {
        
        $message = $request->message;
        $pnum = $request->phone;
        $email = $request->mnail;
        $fname = $request->fname;
        $token = $request->_token;
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/user/sendMail",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => array('message' => 'Reading the script','pnum' => '08165126553','email' => 'Linda@lin.com','fname' => 'lol','_token' => '58568566'),
        CURLOPT_POSTFIELDS => array('message' => $message,'pnum' => $pnum,'email' => $email,'fname' => $fname,'_token' => $token),
       
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        $status = $response['status'];
        $message = 'Your message has been sent';

        if($status == 'OK'){
            return back()->with('success', $message);
        }else{
            return back()->with('error','Your message could not be sent. Please try again.');
        }

            
    }

    public function displayImage(Request $request)
    {
        
        $token = $request->_token;
        //return back()->with('path', $new_name)->with('success', $new_name);
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/user/getImage",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => array('message' => 'Reading the script','pnum' => '08165126553','email' => 'Linda@lin.com','fname' => 'lol','_token' => '58568566'),
        CURLOPT_POSTFIELDS => array('_token' => $token),
       
        ));

       //print_r($request); die();

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        //return $response;
        
        $status = $response['status'];
        $message = $response['message'][0];

        if($status == 'OK'){           
            return json_encode($message, true);
        }else{
            return back()->with('error',$message);
        }
    }

    public function getThumbnail(Request $request)
    {
        
        $token = $request->_token;
       
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/user/getThumbnail",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        // CURLOPT_POSTFIELDS => array('message' => 'Reading the script','pnum' => '08165126553','email' => 'Linda@lin.com','fname' => 'lol','_token' => '58568566'),
        CURLOPT_POSTFIELDS => array('_token' => $token),
       
        ));

       //print_r($request); die();

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        //return $response;
        
        $status = $response['status'];
        $message = $response['message'];

        if($status == 'OK'){           
            return json_encode($message, true);
        }else{
            return back()->with('error',$message);
        }
    }

    public function getVideo(Request $request)
    {
        
        $token = $request->_token;
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/user/getVideo",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",        
        CURLOPT_POSTFIELDS => array('_token' => $token),
       
        ));

       //print_r($request); die();

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        //return $response;
        
        $status = $response['status'];
        $message = $response['message'];

        if($status == 'OK'){           
            return json_encode($message, true);
        }else{
            return back()->with('error',$message);
        }
    }

    public function displayGallery(Request $request)
    {
       $id = $request->id ;
        // return 'hello';
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => "http://localhost:8000/api/v1/user/gallery",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => array('id' => $id),       
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response, true);

        $status = $response['status'];
        $message = $response['message'];
        empty($message) ? "Image does not exist" : $message;
       

        if($status == 'OK'){
            return json_encode($message, true);
        }else{
            return back()->with('error','Image could not be viewed. Please refresh');
        }

            
    }
}

