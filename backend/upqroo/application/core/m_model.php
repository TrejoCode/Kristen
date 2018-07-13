<?php

class m_model extends CI_Model
{

    private $curl;
    private $url="https://kristen.glitch.me/api/WebSite"; //url del web service https://kristen.glitch.me/api/WebSite/carrera/1

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
     * Genera una url /nombre/valor
     * Normalmente se usa en peticiones GET
     */
    private function urlFormater($elements)
    {
        $strUrl='';
        foreach ($elements as $name=>$value) {
            $strUrl.='/'.$name.'/'.$value;
        }
        return $strUrl;
    }


    /*
     * Genera una peticion GET para el servidor
     * @param bool $elements array()
     * @return result as array Respuesta generada por el servidor
     */
    public function get($elements)
    {
        $this->conecction();
        $this->url.=$this->urlFormater($elements);
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_POST,false);
        curl_setopt($this->curl, CURLOPT_HEADER, false);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        $result=curl_exec ($this->curl);
        if($result === false){
            echo curl_error($this->curl);
        }
        $this->close();
        return json_decode($result);
    }

    /*
     * Genera una peticion POST para el servidor
     * @param array $post_elements
     * @return string Respuesta generada por el servidor
    */
    public function post($table,$post_elements)
    {
        $this->conecction();
        $elements=json_encode($post_elements);
        curl_setopt($this->curl, CURLOPT_URL, $this->curl.'/'.$table);
        curl_setopt($this->curl, CURLOPT_POST,true);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $elements);
        $result=curl_exec ($this->curl);
        if($result === false){
            echo curl_error($this->curl);
        }
        $this->close();
        return json_decode($result);
    }


    /*
     * Genera peticiones put para el servidor
     * @param array put_elements datos a insertar
     * @param array table indicadors
     */
    public function put($table,$put_elements)
    {
        $this->conecction();
        $elements=json_encode($put_elements);
        $this->url.=$this->urlFormater($table);
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_POST,false);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl,CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $elements);
        $result=curl_exec ($this->curl);
        if($result === false){
            echo curl_error($this->curl);
        }
        $this->close();
        return json_decode($result);
    }


    /*
     * Genera petidciones DELETE al web service
     * param array elements tabla y id a eliminar
     */
    public function delete($elements)
    {
        $this->conecction();
        $this->url.=$this->urlFormater($elements);
        curl_setopt($this->curl, CURLOPT_URL, $this->url);
        curl_setopt($this->curl, CURLOPT_POST,false);
        curl_setopt($this->curl, CURLOPT_HEADER, false);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl,CURLOPT_CUSTOMREQUEST, 'DELETE');
        $result=curl_exec ($this->curl);
        if($result === false){
            echo curl_error($this->curl);
        }
        $this->close();
        return json_decode($result);

    }


    /*public function post($post_elements) {
        $this->conecction();
        $elements=array();
        foreach ($post_elements as $name=>$value) {
            $elements[] = "{$name}:".json_decode($value);
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
    }*/


    /*
     * Cierra la comunicacion con el web service
     * Es necesario cerrar la conexion cada ves que se realize una peticion
     */
    private function close() {
        curl_close($this->curl);
    }


}