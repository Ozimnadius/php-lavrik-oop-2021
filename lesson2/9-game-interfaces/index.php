<?php

interface Multiplyable{
	public function multiple();
}

interface Transportable{
	public function moveTo();
}

interface Destroyable{
	public function destroy();
}

interface LiveUnit{
	public function makeAction();
}

/* interface IOnGameCard extends Multiplyable, Transportable, Destroyable, LiveUnit{

} */

class Animal implements LiveUnit, Transportable, Destroyable{
	public function moveTo(){}
	public function destroy(){}
	public function makeAction(){}
}

class Wall implements Destroyable{
	public function destroy(){}
}

class Stone implements Transportable, Destroyable{
	public function moveTo(){}
	public function destroy(){}
}

class Seaweed implements Transportable, Destroyable, Multiplyable{
	public function moveTo(){}
	public function destroy(){}
	public function multiple(){}
}