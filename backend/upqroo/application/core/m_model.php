<?php

class m_model extends CI_Model
{

    private $curl;
    private $url="https://kristen.glitch.me/api/WebSite"; //url del web service

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
     * @param  array $elements indicador and id
     * @return result as array Respuesta generada por el servidor
     */
    public function get($table,$elements)
    {
        $this->conecction();
        curl_setopt($this->curl, CURLOPT_URL, $this->url.$table.$this->urlFormater($elements));
        //echo $this->url.$table.$this->urlFormater($elements);
        curl_setopt($this->curl, CURLOPT_POST,false);
        curl_setopt($this->curl, CURLOPT_HEADER, false);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        $result=curl_exec ($this->curl);
        $code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        //var_dump($result);
        //echo $code.'/';
        if($code!=200){
            //echo 'este es un error '.curl_error($this->curl);
            $result='{
                  "error": {
                    "statusCode": 404,
                    "name": "Error",
                    "message": "Error en el get",                    
                  }}';
        }
        $this->close();
        //var_dump($result);
        return json_decode($result);
    }

    /*
     * Genera una peticion POST para el servidor
     * @param array $post_elements datos a insertar
     * @param string $table indicador
     * @return string Respuesta generada por el servidor
    */
    public function post($table,$post_elements)
    {
        $this->conecction();
        $elements=json_encode($post_elements);
        curl_setopt($this->curl, CURLOPT_URL, $this->url.'/'.$table);
        curl_setopt($this->curl, CURLOPT_POST,true);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $elements);
        $result=curl_exec ($this->curl);
        $code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        //var_dump($result);
        //echo $code.'/';
        if($code!=200){
            //echo 'este es un error '.curl_error($this->curl);
            $result='{
                  "error": {
                    "statusCode": 404,
                    "name": "Error",
                    "message": "Error en el get",                    
                  }}';
        }
        $this->close();
        return json_decode($result);
    }

    /*
     * Genera peticiones put para el servidor
     * @param array put_elements datos a insertar
     * @param array table indicador
     */
    public function put($table,$put_elements)
    {
        $this->conecction();
        $elements=json_encode($put_elements);
        curl_setopt($this->curl, CURLOPT_URL, $this->url.$this->urlFormater($table));
        echo $this->url.$this->urlFormater($table);
        curl_setopt($this->curl, CURLOPT_POST,false);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl,CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $elements);
        $result=curl_exec ($this->curl);
        $code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        //var_dump($result);
        //echo $code.'/';
        if($code!=200){
            //echo 'este es un error '.curl_error($this->curl);
            $result='{
                  "error": {
                    "statusCode": 404,
                    "name": "Error",
                    "message": "Error en el get",                    
                  }}';
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
        curl_setopt($this->curl, CURLOPT_URL, $this->url.$this->urlFormater($elements));
        curl_setopt($this->curl, CURLOPT_POST,false);
        curl_setopt($this->curl, CURLOPT_HEADER, false);
        curl_setopt($this->curl, CURLOPT_REFERER, '');
        curl_setopt($this->curl,CURLOPT_CUSTOMREQUEST, 'DELETE');
        $result=curl_exec ($this->curl);
        $code = curl_getinfo($this->curl, CURLINFO_HTTP_CODE);
        //var_dump($result);
        //echo $code.'/';
        if($code!=200){
            //echo 'este es un error '.curl_error($this->curl);
            $result='{
                  "error": {
                    "statusCode": 404,
                    "name": "Error",
                    "message": "Error en el get",                    
                  }}';
        }
        $this->close();
        return json_decode($result);
    }

    /*
     * Cierra la comunicacion con el web service
     * Es necesario cerrar la conexion cada ves que se realize una peticion
     */
    private function close() {
        curl_close($this->curl);
    }


}