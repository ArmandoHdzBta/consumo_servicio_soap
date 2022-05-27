<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfirguracionSOAP;
use SimpleXMLElement;

class ConsumoSOAPController extends Controller
{
    public function index()
    {
        return view('soap.consumo_soap');
    }

    public function buscarUsuarioVista()
    {
        return view('soap.buscar-usuario');
    }

    public function editarUsuarioVista()
    {
        return view('soap.editar-usuario');
    }

    public function eliminarUsuarioVista()
    {
        return view('soap.eliminar-usuario');
    }

    public function nuevoUsuario(Request $datos)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => ConfirguracionSOAP::$URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'
            <soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="Servicio_SOAP_ok">
                <soapenv:Header/>
                <soapenv:Body>
                <ser:nuevoUsuario soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
                    <nuevoUsuario xsi:type="ser:nuevoUsuario">
                        <!--You may enter the following 5 items in any order-->
                        <nombre xsi:type="xsd:string">'.$datos->nombre.'</nombre>
                        <apellido xsi:type="xsd:string">'.$datos->apellido.'</apellido>
                        <correo xsi:type="xsd:string">'.$datos->correo.'</correo>
                        <contrasenia xsi:type="xsd:string">'.$datos->contrasenia.'</contrasenia>
                        <edad xsi:type="xsd:int">'.$datos->edad.'</edad>
                    </nuevoUsuario>
                </ser:nuevoUsuario>
                </soapenv:Body>
            </soapenv:Envelope>
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml;charset=UTF-8'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;

        //return view('soap.consumo_soap');
    }

    public function obtenerUsuarios()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => ConfirguracionSOAP::$URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'
            <soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="Servicio_SOAP_ok">
                <soapenv:Header/>
                <soapenv:Body>
                    <ser:obtenerUsuarios soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/>
                </soapenv:Body>
            </soapenv:Envelope>
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml;charset=UTF-8'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;

        // return new ($response);

        // return view('soap.consumo_soap');
    }

    public function buscarUsuario(Request $datos)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => ConfirguracionSOAP::$URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'
            <soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="Servicio_SOAP_ok">
                <soapenv:Header/>
                <soapenv:Body>
                    <ser:buscarUsuario soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
                        <buscarUsuario xsi:type="ser:buscarUsuario">
                            <id xsi:type="xsd:int">'.$datos->usuario_id.'</id>
                        </buscarUsuario>
                    </ser:buscarUsuario>
                </soapenv:Body>
            </soapenv:Envelope>
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml;charset=UTF-8'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;

        // return new ($response);

        // return view('soap.consumo_soap');
    }

    public function editarUsuario(Request $datos)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => ConfirguracionSOAP::$URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'
            <soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="Servicio_SOAP_ok">
                <soapenv:Header/>
                <soapenv:Body>
                    <ser:editarUsuario soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
                        <editarUsuario xsi:type="ser:editarUsuario">
                            <!--You may enter the following 6 items in any order-->
                            <id xsi:type="xsd:int">'.$datos->usuario_id.'</id>
                            <nombre xsi:type="xsd:string">'.$datos->nombre.'</nombre>
                            <apellido xsi:type="xsd:string">'.$datos->apellido.'</apellido>
                            <correo xsi:type="xsd:string">'.$datos->correo.'</correo>
                            <edad xsi:type="xsd:int">'.$datos->edad.'</edad>
                        </editarUsuario>
                    </ser:editarUsuario>
                </soapenv:Body>
            </soapenv:Envelope>
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml;charset=UTF-8'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;

        // return new ($response);

        // return view('soap.consumo_soap');
    }

    public function eliminarUsuario(Request $datos)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => ConfirguracionSOAP::$URL,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'
            <soapenv:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ser="Servicio_SOAP_ok">
                <soapenv:Header/>
                <soapenv:Body>
                    <ser:eliminarUsuario soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
                        <eliminarUsuario xsi:type="ser:eliminarUsuario">
                            <id xsi:type="xsd:int">'.$datos->usuario_id.'</id>
                        </eliminarUsuario>
                    </ser:eliminarUsuario>
                </soapenv:Body>
            </soapenv:Envelope>
            ',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: text/xml;charset=UTF-8'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);

        return $response;

        // return new ($response);

        // return view('soap.consumo_soap');
    }
}
