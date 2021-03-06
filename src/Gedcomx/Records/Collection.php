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
 * A collection of genealogical resources.
 */
class Collection extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * The language of this description of the collection
     *
     * @var string
     */
    private $lang;

    /**
     * A title for the collection.
     *
     * @var string
     */
    private $title;

    /**
     * The size of the collection, in terms of the number of items in this collection.
     *
     * @var integer
     */
    private $size;

    /**
     * Descriptions of the content of this collection.
     *
     * @var \Gedcomx\Records\CollectionContent[]
     */
    private $content;

    /**
     * Attribution metadata for this collection.
     *
     * @var \Gedcomx\Common\Attribution
     */
    private $attribution;

    /**
     * Constructs a Collection from a (parsed) JSON hash
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
     * The language of this description of the collection
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * The language of this description of the collection
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
    /**
     * A title for the collection.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * A title for the collection.
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * The size of the collection, in terms of the number of items in this collection.
     *
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * The size of the collection, in terms of the number of items in this collection.
     *
     * @param integer $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
    /**
     * Descriptions of the content of this collection.
     *
     * @return \Gedcomx\Records\CollectionContent[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Descriptions of the content of this collection.
     *
     * @param \Gedcomx\Records\CollectionContent[] $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    /**
     * Attribution metadata for this collection.
     *
     * @return \Gedcomx\Common\Attribution
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    /**
     * Attribution metadata for this collection.
     *
     * @param \Gedcomx\Common\Attribution $attribution
     */
    public function setAttribution($attribution)
    {
        $this->attribution = $attribution;
    }
    /**
     * Returns the associative array for this Collection
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->lang) {
            $a["lang"] = $this->lang;
        }
        if ($this->title) {
            $a["title"] = $this->title;
        }
        if ($this->size) {
            $a["size"] = $this->size;
        }
        if ($this->content) {
            $ab = array();
            foreach ($this->content as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['content'] = $ab;
        }
        if ($this->attribution) {
            $a["attribution"] = $this->attribution->toArray();
        }
        return $a;
    }


    /**
     * Initializes this Collection from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['lang'])) {
            $this->lang = $o["lang"];
        }
        if (isset($o['title'])) {
                $this->title = $o["title"];
        }
        if (isset($o['size'])) {
                $this->size = $o["size"];
        }
        $this->content = array();
        if (isset($o['content'])) {
            foreach ($o['content'] as $i => $x) {
                    $this->content[$i] = new \Gedcomx\Records\CollectionContent($x);
            }
        }
        if (isset($o['attribution'])) {
                $this->attribution = new \Gedcomx\Common\Attribution($o["attribution"]);
        }
    }
}
