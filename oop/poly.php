<?php

class ParentClass {
 public function myOwnMethod() {
 echo "ParentClass method called";
 }
}
class ChildClass extends ParentClass {
 public function myOwnMethod() {
 echo "ChildClass method called";
 }
}
function runClass(ParentClass $c) {
 $c->myOwnMethod();
}
$c = new ChildClass();
$d = new ParentClass();
runClass($c);
runclass($d);