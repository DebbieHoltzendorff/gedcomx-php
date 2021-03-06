<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Common;

/**
 * Attribution for genealogical information. Attribution is used to model <strong>who</strong> is contributing/modifying
     * information, <strong>when</strong> they contributed it, and <strong>why</strong> they are making the
     * contribution/modification.
 */
class Attribution extends \Gedcomx\Common\ExtensibleData
{

    /**
     * Reference to the contributor of the attributed data.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $contributor;

    /**
     * The modified timestamp for the attributed data.
     *
     * @var integer
     */
    private $modified;

    /**
     * The &quot;change message&quot; for the attributed data provided by the contributor.
     *
     * @var string
     */
    private $changeMessage;

    /**
     * Constructs a Attribution from a (parsed) JSON hash
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
     * Reference to the contributor of the attributed data.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * Reference to the contributor of the attributed data.
     *
     * @param \Gedcomx\Common\ResourceReference $contributor
     */
    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
    }
    /**
     * The modified timestamp for the attributed data.
     *
     * @return integer
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * The modified timestamp for the attributed data.
     *
     * @param integer $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }
    /**
     * The &quot;change message&quot; for the attributed data provided by the contributor.
     *
     * @return string
     */
    public function getChangeMessage()
    {
        return $this->changeMessage;
    }

    /**
     * The &quot;change message&quot; for the attributed data provided by the contributor.
     *
     * @param string $changeMessage
     */
    public function setChangeMessage($changeMessage)
    {
        $this->changeMessage = $changeMessage;
    }
    /**
     * Returns the associative array for this Attribution
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->contributor) {
            $a["contributor"] = $this->contributor->toArray();
        }
        if ($this->modified) {
            $a["modified"] = $this->modified;
        }
        if ($this->changeMessage) {
            $a["changeMessage"] = $this->changeMessage;
        }
        return $a;
    }


    /**
     * Initializes this Attribution from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['contributor'])) {
                $this->contributor = new \Gedcomx\Common\ResourceReference($o["contributor"]);
        }
        if (isset($o['modified'])) {
                $this->modified = $o["modified"];
        }
        if (isset($o['changeMessage'])) {
                $this->changeMessage = $o["changeMessage"];
        }
    }
}
