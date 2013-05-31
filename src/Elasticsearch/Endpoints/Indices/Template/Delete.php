<?php
/**
 * User: zach
 * Date: 05/31/2013
 * Time: 16:47:11 pm
 */

namespace Elasticsearch\Endpoints\Indices\Template;

use Elasticsearch\Endpoints\AbstractEndpoint;
use Elasticsearch\Common\Exceptions;

/**
 * Class Delete
 * @package Elasticsearch\Endpoints\Indices\Template
 */
class Delete extends AbstractEndpoint
{

    /**
     *TODO Validate auto-generated file
     *     Implement per-class specific functions if required

{
  "indices.template.delete": {
    "documentation": "http://www.elasticsearch.org/guide/reference/api/admin-indices-templates/",
    "methods": ["DELETE"],
    "url": {
      "path": "/_template/{name}",
      "paths": ["/_template/{name}"],
      "parts": {
        "name": {
          "type" : "string",
          "required" : true,
          "description" : "The name of the template"
        }
      },
      "params": {
        "timeout": {
          "type" : "time",
          "description" : "Explicit operation timeout"
        }
      }
    },
    "body": null
  }
}


     */


    /**
     * @return string
     */
    protected function getURI()
    {

        if (isset($this->name) !== true) {
            throw new Exceptions\BadMethodCallException(
                'name is required for Delete'
            );
        }

        $name = $this->name;
        $uri   = "/_template/$name";

        return $uri;
    }

    /**
     * @return string[]
     */
    protected function getParamWhitelist()
    {
        return array(
            'timeout',
        );
    }

    /**
     * @return string
     */
    protected function getMethod()
    {
        return 'DELETE';
    }
}