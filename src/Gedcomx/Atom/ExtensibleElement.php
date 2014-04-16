<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Atom {

    /**
     * 
     */
    class ExtensibleElement extends \Gedcomx\Atom\CommonAttributes  {
    
    

      /**
       * Constructs a ExtensibleElement from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * Returns the associative array for this ExtensibleElement
       */
      public function toArray() {
        $a = parent::toArray();
        return $a;
      }
      

      /**
       * Initializes this ExtensibleElement from an associative array
       */
      public function initFromArray($o) {
        parent::initFromArray($o);
      }
    
    }
    
  }

?>