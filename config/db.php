<?php
class db
{
    private $host = "localhost";
    private $dbname = "login";
    private $user = "root";
    private $password = "";
    public function conexion()
    {
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}
?>


<?php
class db1
{
    private $host = "localhost";
    private $dbname = "login";
    private $user = "root";
    private $password = "";
    public function conexion()
    {
        try {
            $PDO = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}

// Crear una instancia de la clase db1 para la primera base de datos
$db1 = new db1();
$conexion_db1 = $db1->conexion();

// Conectar a la segunda base de datos usando MySQLi
$conn = mysqli_connect("localhost", "root", "", "chatbot") or die("Database Error");

// Obteniendo el mensaje del usuario a través de Ajax (de la segunda base de datos)
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// Comprobando la consulta del usuario en la segunda base de datos
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// Si la consulta en la segunda base de datos tiene éxito...
if (mysqli_num_rows($run_query) > 0) {
    // Recuperar la respuesta de la segunda base de datos
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['replies'];
    echo $replay;
} else {
    echo "¡Lo siento, no puedo ayudarte con este inconveniente! Favor comunícate con el administrador en el siguiente enlace:
    
    </br><a href='https://www.configuroweb.com/contacto/'>Contacto</a>";
}

// Cerrar ambas conexiones cuando hayas terminado
$conexion_db1 = null;
mysqli_close($conn);
?>
