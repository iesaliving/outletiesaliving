<?php



namespace App\Api;
use Carbon\Carbon;
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
    private $producto       ;
    private $email      ;
    private $company   ;
    private $jsonUpdate;
    private $tag;
    private $contactId;
    private $cMensaje;
    private $cBrand;
    private $cCiudad;
    private $cPais;
    private $cFecha;
    private $cFechaLlamada;
    private $cFechaCooking;
    private $cFechaShowRoom;
    private $cHora;
    private $cHoraLlamada;
    private $cHoraShow;
    private $estado;
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
        $this->headers     = array( "Content-Type: application/json;charset=UTF-8" ,"Accept: application/json, application/json" );
        $this->ownerMail    = 'sleal@iesa.cc';
        /*
        $this->apiKey       ='ond2v4qqja08wq6mea8ab2uvcugtzv2l';
        $this->clientId     ='6xonvzrzp5924kfy';
        $this->apiSecret    ='j0an6c30h0tlwjao6ckwiir857rz2f1a';
        $this->sha          =sha1($this->apiKey.$this->clientId.$this->apiSecret);
        $this->ownerMail    ='marco@wizerlink.com';
        $this->headers     = array( "Content-Type: application/json;charset=UTF-8" ,"Accept: application/json, application/json" );
        */
    }

    public function getCredentials(){
        return array(
            "clientId" => $this->clientId,
            "apiKey" => $this->apiKey,
           // "email" =>  array("nerellymartinezclark@gmail.com"),
           // "apiSecret" =>  $this->apiSecret,
           //"owner" => $this->ownerMail,
            "sha" => $this->sha,
            
        );
        /*
        $json=    '{
            "clientId": "'.$this->clientId.'",
            "apiKey": "'.$this->apiKey.'",
            "sha": "'.$this->sha.'",
            "owner": "'.$this->ownerMail.'",
            "from" : "'.Carbon::now("America/Mexico_City")->startOfDay()->timestamp.'",
            "to" : "'.Carbon::now("America/Mexico_City")->endOfDay()->timestamp.'"
                }';

        return $this->curlSm($url,$json);
        */
        
    }



    public function setSmcontactId($contactId){
        $this->contactId=$contactId;
    }

    public function setSmNombre($name){
        $this->name=$name;
    }

    public function setProducto($producto){
        $this->producto=$producto;
    }

    public function setEstado($estado){
        $this->estado=$estado;
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

    public function setPais($cPais){
        $this->cPais = $cPais; ;
    }

    public function setFecha($cFecha){
        $this->cFecha = $cFecha; ;
    }

    public function setFechaLlamada($cFechaLlamada){
        $this->cFechaLlamada = $cFechaLlamada; ;
    }

    public function setFechaCooking($cFechaCooking){
        $this->cFechaCooking = $cFechaCooking; ;
    }

    public function setFechaShowRoom($cFechaShowRoom){
        $this->cFechaShowRoom = $cFechaShowRoom; ;
    }

    public function setHora($cHora){
        $this->cHora = $cHora; ;
    }
    
    public function setHoraLlamada($cHoraLlamada){
        $this->cHoraLlamada = $cHoraLlamada; ;
    }

    public function setHoraShow($cHoraShow){
        $this->cHoraShow = $cHoraShow; ;
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
                    "estado":"'.$this->estado.'",
                    "mensaje":"'.$this->cMensaje.'",
                    "brand":"'.$this->cBrand.'",
                    "ciudad":"'.$this->cCiudad.'",
                    "pais":"'.$this->cPais.'",
                    "fecha":"'.$this->cFecha.'",
                    "fecha_llamada":"'.$this->cFechaLlamada.'",
                    "fecha_cooking_demo":"'.$this->cFechaCooking.'",
                    "fecha_showroom":"'.$this->cFechaShowRoom.'",
                    "hora":"'.$this->cHora.'",
                    "hora_llamada":"'.$this->cHoraLlamada.'",
                    "hora_showroom":"'.$this->cHoraShow.'",
                    "UTM_Source":"'.$this->cUtmSource.'",
                    "UTM_Campaign":"'.$this->cUtmCampaign.'",
                    "UTM_AnuncioID":"'.$this->cUtmAnuncioId.'",
                    "producto":"'.$this->producto.'"
                },
                "trigger": [
                    "approval",
                    "workflow",
                    "blueprint"
                    ]
            }';

        return $this->curlSm($url,$json);
    }

    public function unsubOptOut($url='https://app3.salesmanago.pl/api/contact/optout'){
        

        $json=    '{
                "apiKey" : "'.$this->apiKey.'",
                "async" : false,
                "clientId" : "'.$this->clientId.'",
                "sha": "'.$this->sha.'",
                "requestTime" : 1327059355361,
                "contactId" : "'.$this->contactId.'"
                    }';

        return $this->curlSm($url,$json);
    }


    public function unsubOptOutPhone($url='https://app3.salesmanago.pl/api/contact/phoneoptout'){
        

        $json=    '{
                "apiKey" : "'.$this->apiKey.'",
                "async" : false,
                "clientId" : "'.$this->clientId.'",
                "sha": "'.$this->sha.'",
                "requestTime" : 1327059355361,
                "contactId" : "'.$this->contactId.'"
                    }';

        return $this->curlSm($url,$json);
    }

    public function curlSm($url,$json){

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