 <?php

  include_once($_SERVER['DOCUMENT_ROOT']."/Rpgcloud/repository/DataSource.class.php");
  include_once($_SERVER['DOCUMENT_ROOT']."/Rpgcloud/entity/Hero.class.php");

class HeroDao extends DataSource {

	function insert(Hero $hero,$id){
	     $sql = "insert into hero values(null,'".$hero->getName()."','".$hero->getRace()."','".$hero->getHp()."','".$hero->getMp()."','".$hero->getAtk()."','".$hero->getDefense()."','".$hero->getAgility()."','".$hero->getInteligence()."','".$id."')";
	     parent::insertEntity($sql);
	 }

	function findAll(){
	     $sql = "select * from hero";
	     return parent::findAllEntity($sql);
	}

	function findOne($id){
	     $sql = "select * from hero where id =".$id;
	     return parent::findOneEntity($sql);
	}

	function delete($id){
		 $sql = "delete from hero where id =".$id;
		return parent::deleteEntity($sql);
	}
}