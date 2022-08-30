<?php

namespace App\Services\Web;

use App\Services\Helpers\Helper;

class Speedio
{
    use Helper;
    /**
     * URL da api da speedio.
     * @var string
     */
    const URL_BASE = 'https://api-publica.speedio.com.br';

    
    /**
     * Metedo responsavel por consultar um CNPJ nas APIs do Speedio
     * @param string $cnpj
     * @return Type
     */
    public function consultarCNPJ($cnpj)
    {
        //RETIRA CARACTERES ESPECIAIS
        $cnpj = $this->stripSpecialsChars($cnpj);
        
        return $this->get('/buscarcnpj?cnpj='.$cnpj);
    }

    public function get($resource)
    {
        //ENDPOINT COMPLETO DA API
        $endPoint = self::URL_BASE.$resource;

        //INICIA O CURL
        $curl = curl_init();

        //CONFIGURAÇÕES CURL
        curl_setopt_array($curl, [
            //SET CONTENT
            CURLOPT_URL     => $endPoint,
            CURLOPT_CUSTOMREQUEST   => 'GET',
            CURLOPT_RETURNTRANSFER  => true,
            //SET VALIDADTION ENDPOINT
            CURLOPT_SSL_VERIFYHOST  => false,
            CURLOPT_SSL_VERIFYPEER  => false
        ]);

        //EXECUTA A REQUISIÇÃO
        $response = curl_exec($curl);

        //FECHA A CONEXAO
        curl_close($curl);    
        
        $responseObject = json_decode($response);

        return is_object($responseObject) ? $responseObject : null;
    }
}
