<?php
namespace II\Utilities;

use II\Exceptions\NotFoundException;

class ExceptionManager
{
    public static function HandleAppException($e)
    {
        $exceptionClass = get_class($e);

        $isCustomException  = $e instanceof \II\Exceptions\CustomException;
        
        $exceptionArray = [
            "code" => $e->getCode(),
            "message" => $e->getMessage()
        ];

        if($isCustomException)
            $exceptionArray['data'] = $e->getData();

        LogManager::LogError("Exception $exceptionClass", $exceptionArray);

        // S'il s'agit d'une exception personnalisée, on rajoute les données personnalisées au log.
        if (!$isCustomException) {
            throw new NotFoundException('Exception non gérée', ['exception' => $exceptionClass]);
        }
        
        $e->handleException();
    }
}