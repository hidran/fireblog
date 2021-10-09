<?php
namespace App\DB;

/**
 * Description of DbFactory
 *
 * @author hidran
 */
class DbFactory {

    public static function create(array $options):DbPdo
    {
        if(array_key_exists('dsn', $options)){
            return  DbPdo::getInstance($options);
        }
        if(!array_key_exists('charset', $options)){
            $options['charset'] ='utf8';
        }
        if(!array_key_exists('dsn', $options, true)){
            if(!array_key_exists('driver', $options)){
                throw  new \InvalidArgumentException('Nessun drive predefinito');
            }
            $dsn = '';
            switch($options['driver']){

                case 'mysql':
                case 'oracle':
                case 'mssql':
                    $dsn = $options['driver'].':host='. $options['host'];
                    $dsn .= ';dbname=' .$options['database'].';charset='. $options['charset'];
                    break;
                case 'sqlite':
                    $dsn = 'sqlite:'. $options['database'];
                    break;
                default :
                    throw  new \InvalidArgumentException('Driver non impostato o sconosciuto');
            }
            $options['dsn'] =  $dsn;
        }

        return  DbPdo::getInstance($options);
    }
}
