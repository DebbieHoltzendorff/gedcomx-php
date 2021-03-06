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
 * A genealogical conclusion.
 */
class Conclusion extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * The level of confidence the contributor has about the data.
     *
     * @var string
     */
    private $confidence;

    /**
     * The language of the conclusion.
     *
     * @var string
     */
    private $lang;

    /**
     * Attribution metadata for a conclusion.
     *
     * @var \Gedcomx\Common\Attribution
     */
    private $attribution;

    /**
     * The source references for a conclusion.
     *
     * @var \Gedcomx\Source\SourceReference[]
     */
    private $sources;

    /**
     * A reference to the analysis document explaining the analysis that went into this conclusion.
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $analysis;

    /**
     * Notes about a person.
     *
     * @var \Gedcomx\Common\Note[]
     */
    private $notes;

    /**
     * Constructs a Conclusion from a (parsed) JSON hash
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
     * The level of confidence the contributor has about the data.
     *
     * @return string
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * The level of confidence the contributor has about the data.
     *
     * @param string $confidence
     */
    public function setConfidence($confidence)
    {
        $this->confidence = $confidence;
    }
    /**
     * The language of the conclusion.
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * The language of the conclusion.
     *
     * @param string $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }
    /**
     * Attribution metadata for a conclusion.
     *
     * @return \Gedcomx\Common\Attribution
     */
    public function getAttribution()
    {
        return $this->attribution;
    }

    /**
     * Attribution metadata for a conclusion.
     *
     * @param \Gedcomx\Common\Attribution $attribution
     */
    public function setAttribution($attribution)
    {
        $this->attribution = $attribution;
    }
    /**
     * The source references for a conclusion.
     *
     * @return \Gedcomx\Source\SourceReference[]
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * The source references for a conclusion.
     *
     * @param \Gedcomx\Source\SourceReference[] $sources
     */
    public function setSources($sources)
    {
        $this->sources = $sources;
    }
    /**
     * A reference to the analysis document explaining the analysis that went into this conclusion.
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getAnalysis()
    {
        return $this->analysis;
    }

    /**
     * A reference to the analysis document explaining the analysis that went into this conclusion.
     *
     * @param \Gedcomx\Common\ResourceReference $analysis
     */
    public function setAnalysis($analysis)
    {
        $this->analysis = $analysis;
    }
    /**
     * Notes about a person.
     *
     * @return \Gedcomx\Common\Note[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Notes about a person.
     *
     * @param \Gedcomx\Common\Note[] $notes
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }
    /**
     * Returns the associative array for this Conclusion
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->confidence) {
            $a["confidence"] = $this->confidence;
        }
        if ($this->lang) {
            $a["lang"] = $this->lang;
        }
        if ($this->attribution) {
            $a["attribution"] = $this->attribution->toArray();
        }
        if ($this->sources) {
            $ab = array();
            foreach ($this->sources as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['sources'] = $ab;
        }
        if ($this->analysis) {
            $a["analysis"] = $this->analysis->toArray();
        }
        if ($this->notes) {
            $ab = array();
            foreach ($this->notes as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['notes'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Conclusion from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['confidence'])) {
            $this->confidence = $o["confidence"];
        }
        if (isset($o['lang'])) {
            $this->lang = $o["lang"];
        }
        if (isset($o['attribution'])) {
                $this->attribution = new \Gedcomx\Common\Attribution($o["attribution"]);
        }
        $this->sources = array();
        if (isset($o['sources'])) {
            foreach ($o['sources'] as $i => $x) {
                    $this->sources[$i] = new \Gedcomx\Source\SourceReference($x);
            }
        }
        if (isset($o['analysis'])) {
                $this->analysis = new \Gedcomx\Common\ResourceReference($o["analysis"]);
        }
        $this->notes = array();
        if (isset($o['notes'])) {
            foreach ($o['notes'] as $i => $x) {
                    $this->notes[$i] = new \Gedcomx\Common\Note($x);
            }
        }
    }
}
