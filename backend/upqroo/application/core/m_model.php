<?php

class m_controller
{

    private $curl;
    private $url="http://www.google.com"; //url del web service

    /*
     * Crea la conexion con el web service segun los parametros espesificados
     */
    private function conecction()
    {
        $this->curl=curl_init();
        curl_setopt($this->curl, CURLOPT_HEADER, false);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($this->curl, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($this->curl, CURLOPT_TIMEOUT, 60);
        curl_setopt($this->curl, CURLOPT_AUTOREFERER, TRUE);
    }



    /*
     * Genera una peticion GET para el servidor
     * @param bool $get_elements array()
     * @return string Respuesta generada por el servidor
     */
    public function get($get_elements) {
        $this->conecction();
        $elements=array();
        foreach ($get_elements as $name=>$value) {
            $elements[] = "{$name}=".urlencode($value);
        }
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_POST,false);
        curl_setopt($this->curl, CURLOPT_HEADER, false);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $elements);
        $result=curl_exec ($this->curl);
        if($result === false){
            echo curl_error($this->curl);
        }
        $this->close();
        return $result;
    }


    /*
     * Genera una peticion POST para el servidor
     * @param array $post_elements
     * @return string Respuesta generada por el servidor
    */
    public function post($post_elements) {
        $this->conecction();
        $elements=array();
        foreach ($post_elements as $name=>$value) {
            $elements[] = "{$name}=".urlencode($value);
        }
        $elements = join("&",$elements);
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_POST,true);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl, CURLOPT_HEADER, false);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $elements);
        $result=curl_exec ($this->curl);
        $this->close();
        return $result;
    }


    /*
     * Cierra la comunicacion con el web service
     * Es necesario cerrar la conexion cada ves que se realize una peticion
     */
    private function close() {
        curl_close($this->curl);
    }


}
