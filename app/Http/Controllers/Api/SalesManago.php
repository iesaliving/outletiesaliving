<?php



namespace App\Api;

class SalesManago
{
    private $apiKey     ;
    private $clientId   ;  
    private $apiSecret  ;
    private $ownerMail  ;
    private $headers    ;
    private $jsonGet    ;
    private $jsonCustom    ;
    private $name       ;
    private $email      ;
    private $company   ;
    private $jsonUpdate;
    private $tag;
    private $contactId;
    private $cMensaje;
    private $cBrand;
    private $cCiudad;
    private $cFecha;
    private $cUtmSource;
    private $cUtmCampaign;
    private $cUtmAnuncioId;


    /**
     * WebServiceManagerCurl constructor.
     * @param string $url
     * @param Array $args Argumentos para enviar al Webservice
     * @param bool $proxy
     * @param int $proxyIp Ip con Puerto Ej: 190.0.0.1:8080
     * @param string $proxyUser
     * @param string $proxyPass
     */



    public function __construct(){
        $this->apiKey       ='nzl7tyqare1ac1rxoeba0vqf7du7pj6o';
        $this->clientId     ='o28qhomp7m09zozm';
        $this->apiSecret    ='kvi2rweud3qlrov3h7lvwbisf8lhcs47';
        $this->sha          =sha1($this->apiKey.$this->clientId.$this->apiSecret);
        $this->ownerMail    ='sleal@iesa.cc';
        $this->headers     = array( "Content-Type: application/json;charset=UTF-8" ,"Accept: application/json, application/json" );
    }


    public function setSmcontactId($contactId){
        $this->contactId=$contactId;
    }

    public function setSmNombre($name){
        $this->name=$name;
    }

    public function setSmEmail($email){
        $this->email=$email;
    }

    public function setSmPhone($phone){
        $this->phone=$phone;
    }

    public function setCompany($company){
        $this->company=$company;
    }

    public function setTag($tag){
        $this->tag=$tag;
    }

    public function setMensaje($cMensaje){
        $this->cMensaje = $cMensaje; ;
    }

    public function setBrand($cBrand){
        $this->cBrand = $cBrand; ;
    }

    public function setCiudad($cCiudad){
        $this->cCiudad = $cCiudad; ;
    }

    public function setFecha($cFecha){
        $this->cFecha = $cFecha; ;
    }

    public function setUtmSource($cUtmSource){
        $this->cUtmSource = $cUtmSource; ;
    }

    public function setUtmCampaign($cUtmCampaign){
        $this->cUtmCampaign = $cUtmCampaign; ;
    }

    public function setUtmAnuncioId($cUtmAnuncioId){
        $this->cUtmAnuncioId = $cUtmAnuncioId; ;
    }



    public function getById($url='https://app3.salesmanago.pl/api/contact/basicById'){
        $json=
            '{
                "clientId": "'.$this->clientId.'",
                "apiKey": "'.$this->apiKey.'",
                "requestTime": 1327056031488,
                "sha": "'.$this->sha.'",
                "owner": "'.$this->ownerMail.'",
                "id": [
                    "'.$this->contactId.'"
                    ]
            }';

        return $this->curlSm($url,$json);
    }

    public function hasContact($url='https://app3.salesmanago.pl/api/contact/hasContact'){
         $json=
            '{
              "clientId": "'.$this->clientId.'",
                "apiKey": "'.$this->apiKey.'",
                "requestTime": 1327056031488,
                "sha": "'.$this->sha.'",
                "owner": "'.$this->ownerMail.'",
              "email": "'.$this->email.'"
            }';

        return $this->curlSm($url,$json);
    }

    public function customsPro($datos){

        $this->jsonCustom=
        ',"properties" : {
            "custom.mensaje":"'.$datos['q5_tipoOrganizacion'].'"
        }';
    }



    public function update($url='https://app3.salesmanago.pl/api/contact/update'){


        $json=    '{
              "apiKey" : "'.$this->apiKey.'",
              "async" : false,
              "clientId" : "'.$this->clientId.'",
              "contactId" : "'.$this->contactId.'",
              "sha": "'.$this->sha.'",
              "requestTime" : 1327059355361,
              "owner" : "'.$this->ownerMail.'",
              "tags" : [ "'.$this->tag.'"]
              '.$this->jsonCustom.'
            }';


        return $this->curlSm($url,$json);
    }


    public function insertNew($url='https://app3.salesmanago.pl/api/contact/insert'){


        $json=    '{
                "apiKey" : "'.$this->apiKey.'",
                "async" : false,
                "clientId" : "'.$this->clientId.'",
                "sha": "'.$this->sha.'",
                "requestTime" : 1327059355361,
                "owner" : "'.$this->ownerMail.'",
                "tags" : ["'.$this->tag.'"],
                "contact" : { 
                    "email" : "'.$this->email.'",
                    "name" : "'.$this->name.'",
                    "phone" : "'.$this->phone.'",
                    "company" : "'.$this->company.'"
                    }
                '.$this->jsonCustom.'
            }';
        return $this->curlSm($url,$json);
    }


    public function upsert($url='https://app3.salesmanago.pl/api/contact/upsert'){


        $json=    '{
                "apiKey" : "'.$this->apiKey.'",
                "async" : false,
                "clientId" : "'.$this->clientId.'",
                "sha": "'.$this->sha.'",
                "requestTime" : 1327059355361,
                "owner" : "'.$this->ownerMail.'",
                "tags" : ["'.$this->tag.'"],
                "contact" : { 
                    "email" : "'.$this->email.'",
                    "name" : "'.$this->name.'",
                    "phone" : "'.$this->phone.'"
                    },
                  "properties" : {
                    "custom.mensaje":"'.$this->cMensaje.'",
                    "custom.brand":"'.$this->cBrand.'",
                    "custom.ciudad":"'.$this->cCiudad.'",
                    "custom.fecha":"'.$this->cFecha.'",
                    "custom.UTM_Source":"'.$this->cUtmSource.'",
                    "custom.UTM_Campaign":"'.$this->cUtmCampaign.'",
                    "custom.UTM_AnuncioID":"'.$this->cUtmAnuncioId.'"
                }
            }';
        return $this->curlSm($url,$json);
    }

    private function curlSm($url,$json){

        $ch =   curl_init($url);
                curl_setopt($ch, CURLOPT_HTTPHEADER,$this->headers);
                curl_setopt($ch, CURLOPT_POST, 1); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
                $response2 = curl_exec($ch);
                curl_close($ch);
        return json_decode(stripslashes($response2),true);
    }

}