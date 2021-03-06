<?php

namespace OpenOrchestra\Elastica\SchemaGenerator;

/**
 * Interface DocumentToElasticaSchemaGeneratorInterface
 */
interface DocumentToElasticaSchemaGeneratorInterface
{
    /**
     * Create a elasticSearch linked to the object
     *
     * @param mixed $object
     */
    public function createMapping($object);
}
