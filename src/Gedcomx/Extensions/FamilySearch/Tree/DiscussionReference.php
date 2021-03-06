<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Extensions\FamilySearch\Tree;

/**
 * 
 */
class DiscussionReference extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * The id of the discussion being referenced.
     *
     * @var string
     */
    private $resourceId;

    /**
     * The URI to the resource.
     *
     * @var string
     */
    private $resource;

    /**
     * The attribution metadata for this discussion reference.
     *
     * @var \Gedcomx\Common\Attribution
     */
    private $attribution;

    /**
     * Constructs a DiscussionReference from a (parsed) JSON hash
     *
     * @param array $o
     */
    public function __construct($o = null)
    {
        if ($o) {
            $this->initFromArray($o);
        }
    }

    /**
     * The id of the discussion being referenced.
     *
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * The id of the discussion being referenced.
     *
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
    }
    /**
     * The URI to the resource.
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * The URI to the resource.
     *
     * @param string $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }
    /**
     * The attribution metadata for this discussion reference.
     *
     * @return \Gedcomx\Common\Attribution
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    /**
     * The attribution metadata for this discussion reference.
     *
     * @param \Gedcomx\Common\Attribution $attribution
     */
    public function setAttribution($attribution)
    {
        $this->attribution = $attribution;
    }
    /**
     * Returns the associative array for this DiscussionReference
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->resourceId) {
            $a["resourceId"] = $this->resourceId;
        }
        if ($this->resource) {
            $a["resource"] = $this->resource;
        }
        if ($this->attribution) {
            $a["attribution"] = $this->attribution->toArray();
        }
        return $a;
    }


    /**
     * Initializes this DiscussionReference from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['resourceId'])) {
            $this->resourceId = $o["resourceId"];
        }
        if (isset($o['resource'])) {
            $this->resource = $o["resource"];
        }
        if (isset($o['attribution'])) {
                $this->attribution = new \Gedcomx\Common\Attribution($o["attribution"]);
        }
    }
}
