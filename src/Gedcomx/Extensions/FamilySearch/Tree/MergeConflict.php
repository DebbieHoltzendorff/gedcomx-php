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
class MergeConflict
{

    /**
     * (no documentation provided)
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $survivorResource;

    /**
     * (no documentation provided)
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $duplicateResource;

    /**
     * Constructs a MergeConflict from a (parsed) JSON hash
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
     * (no documentation provided)
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getSurvivorResource()
    {
        return $this->survivorResource;
    }

    /**
     * (no documentation provided)
     *
     * @param \Gedcomx\Common\ResourceReference $survivorResource
     */
    public function setSurvivorResource($survivorResource)
    {
        $this->survivorResource = $survivorResource;
    }
    /**
     * (no documentation provided)
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getDuplicateResource()
    {
        return $this->duplicateResource;
    }

    /**
     * (no documentation provided)
     *
     * @param \Gedcomx\Common\ResourceReference $duplicateResource
     */
    public function setDuplicateResource($duplicateResource)
    {
        $this->duplicateResource = $duplicateResource;
    }
    /**
     * Returns the associative array for this MergeConflict
     *
     * @return array
     */
    public function toArray()
    {
        $a = array();
        if ($this->survivorResource) {
            $a["survivorResource"] = $this->survivorResource->toArray();
        }
        if ($this->duplicateResource) {
            $a["duplicateResource"] = $this->duplicateResource->toArray();
        }
        return $a;
    }

    /**
     * Returns the JSON string for this MergeConflict
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    /**
     * Initializes this MergeConflict from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        if (isset($o['survivorResource'])) {
                $this->survivorResource = new \Gedcomx\Common\ResourceReference($o["survivorResource"]);
        }
        if (isset($o['duplicateResource'])) {
                $this->duplicateResource = new \Gedcomx\Common\ResourceReference($o["duplicateResource"]);
        }
    }
}
