<?php

use yii\db\Schema;
use yii\db\Migration;

class m151202_095801_tbl_advert extends Migration
{
    public function up()
    {
        $this->execute("
        CREATE TABLE IF NOT EXISTS `advert` (
  `advert` int(11) NOT NULL AUTO_INCREMENT,
  `price` mediumint(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `fk_agent_detail` mediumint(11) DEFAULT NULL,
  `bedroom` smallint(1) DEFAULT NULL,
  `livingroom` smallint(1) DEFAULT NULL,
  `parking` smallint(1) DEFAULT NULL,
  `kitchen` smallint(1) DEFAULT NULL,
  `general_image` varchar(255) DEFAULT NULL,
  `description` text,
  `location` varchar(30) DEFAULT NULL,
  `hot` smallint(1) DEFAULT NULL,
  `sold` smallint(1) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `recommend` smallint(1) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`advert`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
        ");
    }

    public function down()
    {
        $this->dropTable("advert");

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
