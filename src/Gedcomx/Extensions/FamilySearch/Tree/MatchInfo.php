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
 * Information about a match.
 */
class MatchInfo
{

    /**
     * The way this match has been resolved.
     *
     * @var string
     */
    private $status;

    /**
     * The collection in which this match was found.
     *
     * @var string
     */
    private $collection;

    /**
     * Constructs a MatchInfo from a (parsed) JSON hash
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
     * The way this match has been resolved.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The way this match has been resolved.
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * The collection in which this match was found.
     *
     * @return string
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * The collection in which this match was found.
     *
     * @param string $collection
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
    }
    /**
     * Returns the associative array for this MatchInfo
     *
     * @return array
     */
    public function toArray()
    {
        $a = array();
        if ($this->status) {
            $a["status"] = $this->status;
        }
        if ($this->collection) {
            $a["collection"] = $this->collection;
        }
        return $a;
    }

    /**
     * Returns the JSON string for this MatchInfo
     *
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray());
    }

    /**
     * Initializes this MatchInfo from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        if (isset($o['status'])) {
            $this->status = $o["status"];
        }
        if (isset($o['collection'])) {
            $this->collection = $o["collection"];
        }
    }
}
