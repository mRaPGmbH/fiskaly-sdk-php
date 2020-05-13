<?php

namespace FiskalyClient\responses;

class ClientConfiguration
{

    /** @var */
    private $debug_level;
    /** @var */
    private $debug_file;
    /** @var */
    private $client_timeout;
    /** @var */
    private $smears_timeout;

    /**
     * ClientConfiguration constructor.
     * @param $debug_level
     * @param $debug_file
     * @param $client_timeout
     * @param $smears_timeout
     */
    public function __construct($debug_level, $debug_file, $client_timeout, $smears_timeout)
    {
        $this->debug_level = $debug_level;
        $this->debug_file = $debug_file;
        $this->client_timeout = $client_timeout;
        $this->smears_timeout = $smears_timeout;
    }

    public function getDebugLevel()
    {
        return $this->debug_level;
    }

    public function getDebugFile()
    {
        return $this->debug_file;
    }
    
    public function getClientTimeout()
    {
        return $this->client_timeout;
    }
    
    public function getSmearsTimeout()
    {
        return $this->smears_timeout;
    }

    public function __toString()
    {
        return __CLASS__ . " [debug_level: " . $this->debug_level . ", debug_file: " . $this->debug_file . ", client_timeout: " . $this->client_timeout . ", smears_timeout: " . $this->smears_timeout . "]";
    }
}
