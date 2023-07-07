<?php 

    class GuarderiaModel{

        private $pdo = null;

        private $stmt = null;

        

        function __construct()

        {

            try{

                $this->pdo = new PDO(

                    "mysql:host=localhost;dbname=guarderiamascota;charset=utf8",

                    "root",

                    "",[

                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

                        PDO::ATTR_EMULATE_PREPARES => false,

                    ]

                );

            }catch(Exception $ex){

                echo "Ha ocurrido un error";

                die($ex->getMessage());

            }

        }



        function __destruct()

        {

            if($this->stmt !== null){

                $this->stmt = null;

            }

            if($this->pdo !== null){

                $this->pdo = null;

            }

        }

        /**

         * Este método permite realizar operaciones

         * sobre la base de datos

         */

        function select($sql, $cond=null){

            $result = false;

            try{

                $this->stmt = $this->pdo->prepare($sql);

                $this->stmt->execute($cond);

                //DEVUELVE TRUE SI SE EJECUTO CORRECTAMENTE

                $result = $this->stmt->fetchAll();

            }

            catch(Exception $ex){

                echo "Ha ocurrido un error al ejecutar la consulta";

                die($ex->getMessage());

            }

            //liberamos la variable stmt

            $this->stmt = null;

            //regresamos el resultado

            return $result;



        }

    }

?>