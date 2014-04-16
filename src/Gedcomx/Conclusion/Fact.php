<?php

/**
 *
 * 
 *
 * Generated by <a href="http://enunciate.codehaus.org">Enunciate</a>.
 *
 */

  namespace Gedcomx\Conclusion {

    /**
     * A conclusion about a fact applicable to a person or relationship.
     */
    class Fact extends \Gedcomx\Conclusion\Conclusion  {
    
      /**
       * Whether this fact is the primary fact of the record from which the subject was extracted.
       */
      private $primary;
      /**
       * The type of the fact.
       */
      private $type;
    
      /**
       * The date of applicability of this fact.
       */
      private $date;
      /**
       * The place of applicability of this fact.
       */
      private $place;
      /**
       * The value as supplied by the user.
       */
      private $value;
      /**
       * The qualifiers associated with this fact.
       */
      private $qualifiers;
      /**
       * The references to the record fields being used as evidence.
       */
      private $fields;

      /**
       * Constructs a Fact from a (parsed) JSON hash
       */
      public function __construct($o = null) {
        if( $o ) {
          $this->initFromArray($o);
        }
      }
      
      /**
       * Whether this fact is the primary fact of the record from which the subject was extracted.
       */
      public function getPrimary() {
        return $this->primary;
      }
      
      /**
       * Whether this fact is the primary fact of the record from which the subject was extracted.
       */
      public function setPrimary($primary) {
        $this->primary = $primary;
      }
      /**
       * The type of the fact.
       */
      public function getType() {
        return $this->type;
      }
      
      /**
       * The type of the fact.
       */
      public function setType($type) {
        $this->type = $type;
      }
      /**
       * The date of applicability of this fact.
       */
      public function getDate() {
        return $this->date;
      }
      
      /**
       * The date of applicability of this fact.
       */
      public function setDate($date) {
        $this->date = $date;
      }
      /**
       * The place of applicability of this fact.
       */
      public function getPlace() {
        return $this->place;
      }
      
      /**
       * The place of applicability of this fact.
       */
      public function setPlace($place) {
        $this->place = $place;
      }
      /**
       * The value as supplied by the user.
       */
      public function getValue() {
        return $this->value;
      }
      
      /**
       * The value as supplied by the user.
       */
      public function setValue($value) {
        $this->value = $value;
      }
      /**
       * The qualifiers associated with this fact.
       */
      public function getQualifiers() {
        return $this->qualifiers;
      }
      
      /**
       * The qualifiers associated with this fact.
       */
      public function setQualifiers($qualifiers) {
        $this->qualifiers = $qualifiers;
      }
      /**
       * The references to the record fields being used as evidence.
       */
      public function getFields() {
        return $this->fields;
      }
      
      /**
       * The references to the record fields being used as evidence.
       */
      public function setFields($fields) {
        $this->fields = $fields;
      }
      /**
       * Returns the associative array for this Fact
       */
      public function toArray() {
        $a = parent::toArray();
        if( $this->primary ) {
          $a["primary"] = $this->primary;
        }
        if( $this->type ) {
          $a["type"] = $this->type;
        }
        if( $this->date ) {
          $a["date"] = $this->date->toArray();
        }
        if( $this->place ) {
          $a["place"] = $this->place->toArray();
        }
        if( $this->value ) {
          $a["value"] = $this->value;
        }
        if( $this->qualifiers ) {
          $ab = array();
          foreach( $this->qualifiers as $i => $x ) {
            $ab[$i] = $x->toArray();
          }
          $a['qualifiers'] = $ab;
        }
        if( $this->fields ) {
          $ab = array();
          foreach( $this->fields as $i => $x ) {
            $ab[$i] = $x->toArray();
          }
          $a['fields'] = $ab;
        }
        return $a;
      }
      

      /**
       * Initializes this Fact from an associative array
       */
      public function initFromArray($o) {
        parent::initFromArray($o);
        if( isset($o['primary']) ) {
          $this->primary = $o["primary"];
        }
        if( isset($o['type']) ) {
          $this->type = $o["type"];
        }
        if( isset($o['date']) ) {
          $this->date = new \Gedcomx\Conclusion\DateInfo($o["date"]);
        }
        if( isset($o['place']) ) {
          $this->place = new \Gedcomx\Conclusion\PlaceReference($o["place"]);
        }
        if( isset($o['value']) ) {
          $this->value = $o["value"];
        }
        $this->qualifiers = array();
        if( isset($o['qualifiers']) ) {
          foreach( $o['qualifiers'] as $i => $x ) {
            $this->qualifiers[$i] = new \Gedcomx\Common\Qualifier($x);
          }
        }
        $this->fields = array();
        if( isset($o['fields']) ) {
          foreach( $o['fields'] as $i => $x ) {
            $this->fields[$i] = new \Gedcomx\Records\Field($x);
          }
        }
      }
    
    }
    
  }

?>