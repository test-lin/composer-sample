 <?php 

namespace Testlin\Db;

use Testlin\Db\Exception\Exception;
use mysqli;

class Db
{
    public function __construct($host, $user, $pass, $db_name)
    {
        $mysqli = new mysqli($host, $user, $pass, $db_name);

        if ($mysqli->connect_error) {
            throw new Exception($mysqli->connect_error, $mysqli->connect_errno);
        }
    }
}