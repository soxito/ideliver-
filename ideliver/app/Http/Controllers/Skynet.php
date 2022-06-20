<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skynet_token;
use GuzzleHttp\Client;

class Skynet extends Controller
{
    public function skynetCallPost($type,$uri,$params){

        $client = new Client([
            'base_uri' => 'https://test.skynet.co.za:3227',

        ]);
        $result = Skynet_token::where('valid',1)->get();

        foreach ($result as $token){

        }

        $params['SecurityToken']=$token->s_token;
        $params['AccountNumber']='J99133';

        $responseServer = $client->request($type, $uri, ['form_params' => $params]);

        $response = json_decode($responseServer->getBody());

        return $response;

    }

    public function ValidateSuburbPostalCode($data){

        $call = $this->skynetCallPost('POST','/api/Validation/ValidateSuburbPostalCode',$data);

        return json_encode($call);

    }

    public function GetQuote($data){

        $items = json_decode(base64_decode($data->items));
        $ParcelList = [];
        foreach ($items as $item){
        $ParcelList[]=[
            'parcel_number'=>$item->units,
            'parcel_length'=>$item->length,
            'parcel_breadth'=>$item->breadth,
            'parcel_height'=>$item->height,
            'parcel_mass'=>$item->mass,
            'parcel_reference'=>'',
            'parcel_description'=>'',
        ];
        }
        $stream = [
            'FromCity'=>'KWAXUMA',
            'FromCityPostalCode'=>'1868',
            'ToCity'=>'PRETORIA',
            'ToCityPostalCode'=>'0002',
            'ServiceType'=>'[ON1]',
            'InsuranceType'=>'1',
            'InsuranceAmount'=>'0',
            'DestinationPCode'=>'0002',
            'ParcelList'=>$ParcelList,
        ];

        $call = $this->skynetCallPost('POST','/api/Financial/GetQuote',$stream);

        return json_encode($call);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $this->skynetCallPost();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
