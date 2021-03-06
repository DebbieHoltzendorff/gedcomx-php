<?php
/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

namespace Gedcomx\Extensions\FamilySearch\Discussions;

/**
 * A discussion.
 */
class Discussion extends \Gedcomx\Links\HypermediaEnabledData
{

    /**
     * the one-line summary text
     *
     * @var string
     */
    private $title;

    /**
     * The text or &quot;message body&quot; of the discussion
     *
     * @var string
     */
    private $details;

    /**
     * date of creation
     *
     * @var integer
     */
    private $created;

    /**
     * contributor of discussion
     *
     * @var \Gedcomx\Common\ResourceReference
     */
    private $contributor;

    /**
     * Date of last modification
     *
     * @var integer
     */
    private $modified;

    /**
     * Number of comments
     *
     * @var integer
     */
    private $numberOfComments;

    /**
     * The comments on this discussion.
     *
     * @var \Gedcomx\Extensions\FamilySearch\Discussions\Comment[]
     */
    private $comments;

    /**
     * Constructs a Discussion from a (parsed) JSON hash
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
     * the one-line summary text
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * the one-line summary text
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * The text or &quot;message body&quot; of the discussion
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * The text or &quot;message body&quot; of the discussion
     *
     * @param string $details
     */
    public function setDetails($details)
    {
        $this->details = $details;
    }
    /**
     * date of creation
     *
     * @return integer
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * date of creation
     *
     * @param integer $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }
    /**
     * contributor of discussion
     *
     * @return \Gedcomx\Common\ResourceReference
     */
    public function getContributor()
    {
        return $this->contributor;
    }

    /**
     * contributor of discussion
     *
     * @param \Gedcomx\Common\ResourceReference $contributor
     */
    public function setContributor($contributor)
    {
        $this->contributor = $contributor;
    }
    /**
     * Date of last modification
     *
     * @return integer
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Date of last modification
     *
     * @param integer $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }
    /**
     * Number of comments
     *
     * @return integer
     */
    public function getNumberOfComments()
    {
        return $this->numberOfComments;
    }

    /**
     * Number of comments
     *
     * @param integer $numberOfComments
     */
    public function setNumberOfComments($numberOfComments)
    {
        $this->numberOfComments = $numberOfComments;
    }
    /**
     * The comments on this discussion.
     *
     * @return \Gedcomx\Extensions\FamilySearch\Discussions\Comment[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * The comments on this discussion.
     *
     * @param \Gedcomx\Extensions\FamilySearch\Discussions\Comment[] $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
    /**
     * Returns the associative array for this Discussion
     *
     * @return array
     */
    public function toArray()
    {
        $a = parent::toArray();
        if ($this->title) {
            $a["title"] = $this->title;
        }
        if ($this->details) {
            $a["details"] = $this->details;
        }
        if ($this->created) {
            $a["created"] = $this->created;
        }
        if ($this->contributor) {
            $a["contributor"] = $this->contributor->toArray();
        }
        if ($this->modified) {
            $a["modified"] = $this->modified;
        }
        if ($this->numberOfComments) {
            $a["numberOfComments"] = $this->numberOfComments;
        }
        if ($this->comments) {
            $ab = array();
            foreach ($this->comments as $i => $x) {
                $ab[$i] = $x->toArray();
            }
            $a['comments'] = $ab;
        }
        return $a;
    }


    /**
     * Initializes this Discussion from an associative array
     *
     * @param array $o
     */
    public function initFromArray($o)
    {
        parent::initFromArray($o);
        if (isset($o['title'])) {
                $this->title = $o["title"];
        }
        if (isset($o['details'])) {
                $this->details = $o["details"];
        }
        if (isset($o['created'])) {
                $this->created = $o["created"];
        }
        if (isset($o['contributor'])) {
                $this->contributor = new \Gedcomx\Common\ResourceReference($o["contributor"]);
        }
        if (isset($o['modified'])) {
                $this->modified = $o["modified"];
        }
        if (isset($o['numberOfComments'])) {
                $this->numberOfComments = $o["numberOfComments"];
        }
        $this->comments = array();
        if (isset($o['comments'])) {
            foreach ($o['comments'] as $i => $x) {
                    $this->comments[$i] = new \Gedcomx\Extensions\FamilySearch\Discussions\Comment($x);
            }
        }
    }
}
