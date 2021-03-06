<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Conclusion;

/**
 * A relationship between two or more persons.
 */
class Relationship extends \Gedcomx\Conclusion\Subject
{

    /**
     * The type of this relationship.
     *
     * @var string
     */
    private $type;

    /**
     * A reference to a person in the relationship. The name &quot;person1&quot; is used only to distinguish it from
     * the other person in this relationship and implies neither order nor role. When the relationship type
     * implies direction, it goes from &quot;person1&quot; to &quot;person2&quot;.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $person1;

    /**
     * A reference to a person in the relationship. The name &quot;person2&quot; is used only to distinguish it from
     * the other person in this relationship and implies neither order nor role. When the relationship type
     * implies direction, it goes from &quot;person1&quot; to &quot;person2&quot;.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $person2;

    /**
     * The fact conclusions for the relationship.
     *
     * @var \Gedcomx\Conclusion\Fact[]
     */
    private $facts;

    /**
     * The references to the record fields being used as evidence.
     *
     * @var \Gedcomx\Records\Field[]
     */
    private $fields;

    /**
     * Constructs a Relationship from a (parsed) JSON hash
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
     * The type of this relationship.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of this relationship.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * A reference to a person in the relationship. The name &quot;person1&quot; is used only to distinguish it from
       * the other person in this relationship and implies neither order nor role. When the relationship type
       * implies direction, it goes from &quot;person1&quot; to &quot;person2&quot;.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getPerson1()
    {
        return $this->person1;
    }

    /**
     * A reference to a person in the relationship. The name &quot;person1&quot; is used only to distinguish it from
       * the other person in this relationship and implies neither order nor role. When the relationship type
       * implies direction, it goes from &quot;person1&quot; to &quot;person2&quot;.
     *
     * @param \Gedcomx\Common\ResourceReference $person1
     */
    public function setPerson1($person1)
    {
        $this->person1 = $person1;
    }
    /**
     * A reference to a person in the relationship. The name &quot;person2&quot; is used only to distinguish it from
       * the other person in this relationship and implies neither order nor role. When the relationship type
       * implies direction, it goes from &quot;person1&quot; to &quot;person2&quot;.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getPerson2()
    {
        return $this->person2;
    }

    /**
     * A reference to a person in the relationship. The name &quot;person2&quot; is used only to distinguish it from
       * the other person in this relationship and implies neither order nor role. When the relationship type
       * implies direction, it goes from &quot;person1&quot; to &quot;person2&quot;.
     *
     * @param \Gedcomx\Common\ResourceReference $person2
     */
    public function setPerson2($person2)
    {
        $this->person2 = $person2;
    }
    /**
     * The fact conclusions for the relationship.
     *
     * @return \Gedcomx\Conclusion\Fact[]
     */
    public function getFacts()
    {
        return $this->facts;
    }

    /**
     * The fact conclusions for the relationship.
     *
     * @param \Gedcomx\Conclusion\Fact[] $facts
     */
    public function setFacts($facts)
    {
        $this->facts = $facts;
    }
    /**
     * The references to the record fields being used as evidence.
     *
     * @return \Gedcomx\Records\Field[]
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * The references to the record fields being used as evidence.
     *
     * @param \Gedcomx\Records\Field[] $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    /**
     * Returns the associative array for this Relationship
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->type) {
            $a["type"] = $this->type;
        }
        if ($this->person1) {
            $a["person1"] = $this->person1->toArray();
        }
        if ($this->person2) {
            $a["person2"] = $this->person2->toArray();
        }
        if ($this->facts) {
            $ab = array();
            foreach ($this->facts as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['facts'] = $ab;
        }
        if ($this->fields) {
            $ab = array();
            foreach ($this->fields as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['fields'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Relationship from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['type'])) {
            $this->type = $o["type"];
        }
        if (isset($o['person1'])) {
                $this->person1 = new \Gedcomx\Common\ResourceReference($o["person1"]);
        }
        if (isset($o['person2'])) {
                $this->person2 = new \Gedcomx\Common\ResourceReference($o["person2"]);
        }
        $this->facts = array();
        if (isset($o['facts'])) {
            foreach ($o['facts'] as $i => $x) {
                    $this->facts[$i] = new \Gedcomx\Conclusion\Fact($x);
            }
        }
        $this->fields = array();
        if (isset($o['fields'])) {
            foreach ($o['fields'] as $i => $x) {
                    $this->fields[$i] = new \Gedcomx\Records\Field($x);
            }
        }
    }
}
