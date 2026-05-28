<?php

namespace Ecourty\DataGouv\DataServices\Geoplateforme\Client\Model;

class Pipeline
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var PipelineGeocodeOptions
     */
    protected $geocodeOptions;
    /**
     * @var string
     */
    protected $outputFormat;
    /**
     * @return PipelineGeocodeOptions
     */
    public function getGeocodeOptions(): PipelineGeocodeOptions
    {
        return $this->geocodeOptions;
    }
    /**
     * @param PipelineGeocodeOptions $geocodeOptions
     *
     * @return self
     */
    public function setGeocodeOptions(PipelineGeocodeOptions $geocodeOptions): self
    {
        $this->initialized['geocodeOptions'] = true;
        $this->geocodeOptions = $geocodeOptions;
        return $this;
    }
    /**
     * @return string
     */
    public function getOutputFormat(): string
    {
        return $this->outputFormat;
    }
    /**
     * @param string $outputFormat
     *
     * @return self
     */
    public function setOutputFormat(string $outputFormat): self
    {
        $this->initialized['outputFormat'] = true;
        $this->outputFormat = $outputFormat;
        return $this;
    }
}