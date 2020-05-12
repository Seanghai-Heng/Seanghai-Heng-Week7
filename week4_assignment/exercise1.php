<?php
// multiple inheritence is good because a subclass can inherit properties from parents or superclass
// and can derived from more than one super class base on different purposes.
//The disdavantages of multiple inheritence is causing problem when a child class extends 2 of super class and use 
// the same method, so we don't know which method of super classes would be called,

// bacause php doesn't support multiple inheritence we use trait.
class greeting { 
    public function sayhello() { 
       echo "Hello"; 
    } 
  } 

  trait saying { 
    public function sayfor() { 
       echo " World". "<br>";
    } 
  } 
    
  class Sample extends greeting { 
     use saying; 
     public function example() { 
        echo "Hi there"; 
    }  
  } 
  $test = new Sample(); 
  $test->sayhello(); 
  $test->sayfor();
  $test->example(); 
// Hello World
// Hi there;
?>