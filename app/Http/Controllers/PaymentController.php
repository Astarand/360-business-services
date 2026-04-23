<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function Payment(){
        return view('pages.payment');
    }


    public function paymentPhonePay(Request $request){

            $validatedData = $request->validate([
            'company_name' => '', 
            'contact_number' => '', 
            'email' => 'nullable|email',  
            'purposes' => '', 
            'amount' => 'nullable|numeric', 
            'comments' => 'nullable', 
        ]);

        $amount = $validatedData['amount'] ?? null;
        $contact_number = $validatedData['contact_number'] ?? null;
        $newRecord = Payment::create($validatedData);

        $id = $newRecord->id;
        
        //--------- PhonePe Data -------
        $UAT_MODE=false;
        // $merchantId_UAT="MERCHANTUAT";
        $merchantId_UAT="PGTESTPAYUAT";
        $saltKey_UAT="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
        $merchantId_PROD="M22AU3UL85U4O";
        $saltKey_PROD="93f04c88-11b4-4874-8ba6-64224e3a4846";
        $UAT_URL="https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/";
        // $UAT_URL="https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/";
        $PROD_URL="https://api.phonepe.com/apis/hermes/pg/v1/";
        

        $uatMode = $UAT_MODE;
        
        if($uatMode)
        {
            $payUrl = $UAT_URL.'pay';
            $merchantId = $merchantId_UAT;
            $saltKey = $saltKey_UAT;
        }
        else
        {
            $payUrl = $PROD_URL.'pay';
            $merchantId = $merchantId_PROD;
            $saltKey = $saltKey_PROD;
        }
        

        $data = array (
            'merchantId' => $merchantId,
            'merchantTransactionId' => 'MT'.$id,
            'merchantUserId' => 'MUID'.$contact_number,
            'amount' => $amount * 100,
            'redirectUrl' => route('phoneCallback'),
            'redirectMode' => 'POST',
            'callbackUrl' => route('phoneCallback'),
            'mobileNumber' => $contact_number,
            'paymentInstrument' => 
            array (
                'type' => 'PAY_PAGE',
            ),
        );
           
        

        $encode = base64_encode(json_encode($data));

        //$saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
        $saltIndex = 1;

        $string = $encode.'/pg/v1/pay'.$saltKey;
        $sha256 = hash('sha256',$string);

        $finalXHeader = $sha256.'###'.$saltIndex;

        
        $curl = curl_init();
        //'https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/pay'
        curl_setopt_array($curl, array(
            CURLOPT_URL => $payUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode(['request' => $encode]),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'X-VERIFY: '.$finalXHeader
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $rData = json_decode($response);

        
        return redirect()->to($rData->data->instrumentResponse->redirectInfo->url);

    }


    public function phoneCallback(Request $request)
    {   
        $input = $request->all();
        
        $code  = $input['code'];
        
    //   print_r($input);
    //   die();
        //--------- PhonePe Data -------
        // $UAT_MODE=false;
        // $merchantId_UAT="PGTESTPAYUAT";
        // $saltKey_UAT="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399";
        // $merchantId_PROD="M22AU3UL85U4O";
        // $saltKey_PROD="93f04c88-11b4-4874-8ba6-64224e3a4846";
        // $UAT_URL="https://api-preprod.phonepe.com/apis/merchant-simulator/pg/v1/";
        // $PROD_URL="https://api.phonepe.com/apis/hermes/pg/v1/";
        
        // $uatMode = $UAT_MODE;
        // if($uatMode)
        // {
        //     $url = $UAT_URL;
        //     $saltKey = $saltKey_UAT;
        // }else{
        //     $url = $PROD_URL;
        //     $saltKey = $saltKey_PROD;
        // }
        // $input = $request->all();

        // //$saltKey = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
        // $saltIndex = 1;

        // $finalXHeader = hash('sha256','/pg/v1/status/'.$input['merchantId'].'/'.$input['transactionId'].$saltKey).'###'.$saltIndex;

        // $curl = curl_init();

        // curl_setopt_array($curl, array(
            
        //     CURLOPT_URL => $url.'status/'.$input['merchantId'].'/'.$input['transactionId'],
        //     CURLOPT_RETURNTRANSFER => true,
        //     CURLOPT_ENCODING => '',
        //     CURLOPT_MAXREDIRS => 10,
        //     CURLOPT_TIMEOUT => 0,
        //     CURLOPT_FOLLOWLOCATION => false,
        //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //     CURLOPT_CUSTOMREQUEST => 'GET',
        //     CURLOPT_HTTPHEADER => array(
        //         'Content-Type: application/json',
        //         'accept: application/json',
        //         'X-VERIFY: '.$finalXHeader,
        //         'X-MERCHANT-ID: '.$input['transactionId']
        //     ),
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);

        // $responseData = json_decode($response);
        // print_r($responseData);
        // die();
        if($code == 'PAYMENT_SUCCESS'){

            // $marchatTranId  = $responseData->data->merchantTransactionId;
            $marchatTranId  = $input['merchantOrderId'];
            $table_id       = preg_replace("/[a-zA-Z]/", "", $marchatTranId);
            $transactionId  = $input['merchantId'];
            $amount         = $input['amount']/100;
            $resp           = $request->all();

            try{
                DB::table('payments')
                    ->where('id', $table_id)
                    ->update([
                        'transaction_id' => $transactionId,
                        'amount' => $amount,
                        'payment_status' => $code,
                        
                    ]);
                    Session::flash('success', 'Payment Successfully');
                return redirect()->route('payment');
            }catch (\Exception $e) {
                // Redirect back with error message if update fails
                Session::flash('error', 'Failed to payment. Please try again.');
                return redirect()->back();
            }

        }else{
            Session::flash('error', 'Failed to payment. Please try again.');
            return redirect()->back();

        }

    }


    
}
