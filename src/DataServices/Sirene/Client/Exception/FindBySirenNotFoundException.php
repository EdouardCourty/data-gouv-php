<?php

namespace Ecourty\DataGouv\DataServices\Sirene\Client\Exception;

class FindBySirenNotFoundException extends NotFoundException
{
    /**
     * @var \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur
     */
    private $reponseErreur;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur $reponseErreur, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Entreprise non trouvée dans la base Sirene (si le paramètre date n\'a pas été utilisé, cela peut signifier que le numéro de 9 chiffres ne correspond pas à un Siren présent dans la base ; si le paramètre a été utilisé, le Siren peut exister mais la date de création est postérieure au paramètre date)');
        $this->reponseErreur = $reponseErreur;
        $this->response = $response;
    }
    public function getReponseErreur(): \Ecourty\DataGouv\DataServices\Sirene\Client\Model\ReponseErreur
    {
        return $this->reponseErreur;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}