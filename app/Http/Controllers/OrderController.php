<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;
class OrderController extends Controller
{
    public function edit($id){
        $offers = Offer::find($id);
        if(request('id') && request('resourcePath')){

           // dd(request('id').' '. request('resourcePath'));          //dd($payment);

           $payment = $this->paymantStats(request('id'),request('resourcePath'));
          if($payment['id']){
            return view('checkout',compact('offers'))->with(['success' => 'your payment is Completed']);

          }else{
            return view('checkout',compact('offers'))->with(['error' => 'your payment is not Complete please return payment']);
          }
        }
        $offers = Offer::find($id);
        return view('checkout',compact('offers'));
    }

    private function paymantStats($id , $resourcePath){
        $url = "https://test.oppwa.com/".$resourcePath;
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                       'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return json_decode($responseData ,true);
    }
}
