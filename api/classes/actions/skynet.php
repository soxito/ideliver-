<?php


class skynet extends Common_Model
{
    public function ValidateSuburbPostalCode($data){

        $call = $this->skynetCallPost('POST','/api/Validation/ValidateSuburbPostalCode',$data);

        return json_encode($call);

    }

    public function GetQuote($data){

        $call = $this->skynetCallPost('POST','/api/Financial/GetQuote',$data);

        return json_encode($call);

    }


}