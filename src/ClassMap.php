<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'tcDescricaoRps' => '\\StructType\\TcDescricaoRps',
            'tcRetornoNota' => '\\StructType\\TcRetornoNota',
            'tcDescricaoCancelaNota' => '\\StructType\\TcDescricaoCancelaNota',
            'tcConsultarNfseServicoPrestadoEnvio' => '\\StructType\\TcConsultarNfseServicoPrestadoEnvio',
            'tcConsultarRpsServicoPrestadoEnvio' => '\\StructType\\TcConsultarRpsServicoPrestadoEnvio',
            'tcEstruturaDescricaoErros' => '\\StructType\\TcEstruturaDescricaoErros',
            'tcListaErrosAlertas' => '\\StructType\\TcListaErrosAlertas',
            'tcConsultarCadastroContribuinteEnvio' => '\\StructType\\TcConsultarCadastroContribuinteEnvio',
        ];
    }
}
