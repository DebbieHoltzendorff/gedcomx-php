<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Records;

/**
 * An element representing a value in a record field.
 */
class FieldValue extends \Gedcomx\Conclusion\Conclusion
{

    /**
     * URI that resolves to the value of the field.
     *
     * @var string
     */
    private $resource;

    /**
     * The datatype of the text value of the field.
     *
     * @var string
     */
    private $datatype;

    /**
     * The type of the field value.
     *
     * @var string
     */
    private $type;

    /**
     * The id of the label applicable to this field value.
     *
     * @var string
     */
    private $labelId;

    /**
     * The text value.
     *
     * @var string
     */
    private $text;

    /**
     * Constructs a FieldValue from a (parsed) JSON hash
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
     * URI that resolves to the value of the field.
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * URI that resolves to the value of the field.
     *
     * @param string $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }
    /**
     * The datatype of the text value of the field.
     *
     * @return string
     */
    public function getDatatype()
    {
        return $this->datatype;
    }

    /**
     * The datatype of the text value of the field.
     *
     * @param string $datatype
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;
    }
    /**
     * The type of the field value.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the field value.
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * The id of the label applicable to this field value.
     *
     * @return string
     */
    public function getLabelId()
    {
        return $this->labelId;
    }

    /**
     * The id of the label applicable to this field value.
     *
     * @param string $labelId
     */
    public function setLabelId($labelId)
    {
        $this->labelId = $labelId;
    }
    /**
     * The text value.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * The text value.
     *
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    /**
     * Returns the associative array for this FieldValue
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->resource) {
            $a["resource"] = $this->resource;
        }
        if ($this->datatype) {
            $a["datatype"] = $this->datatype;
        }
        if ($this->type) {
            $a["type"] = $this->type;
        }
        if ($this->labelId) {
            $a["labelId"] = $this->labelId;
        }
        if ($this->text) {
            $a["text"] = $this->text;
        }
        return $a;
    }


    /**
     * Initializes this FieldValue from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['resource'])) {
            $this->resource = $o["resource"];
        }
        if (isset($o['datatype'])) {
            $this->datatype = $o["datatype"];
        }
        if (isset($o['type'])) {
            $this->type = $o["type"];
        }
        if (isset($o['labelId'])) {
            $this->labelId = $o["labelId"];
        }
        if (isset($o['text'])) {
                $this->text = $o["text"];
        }
    }
}
