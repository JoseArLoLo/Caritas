<?php
require_once('librerias/conekta-php-master//lib/Conekta.php');

class Payment
{
    private $ApiKey = "key_reKSCCF6b4rt3jpRrv04bI5"; // Llave privada de conekta
    private $ApiVersion = "2.0.0";

    private $UserDB = 'worse-loss-jus';
    private $PassDB = 'g1YrR-Lz9SGqd71__9';
    private $ServerDB = 'nyc.domcloud.co';
    private $DataBaseDB = 'worse_loss_jus_db';

    public function __construct($token, $card, $name, $description, $total, $email)
    {
        $this->token = $token;
        $this->card = $card;
        $this->name = $name;
        $this->description = $description;
        $this->total = $total;
        $this->email = $email;
    }

    public function Pay()
    {

        \Conekta\Conekta::setApiKey($this->ApiKey);
        \Conekta\Conekta::setApiVersion($this->ApiVersion);

        if (!$this->Validate())
            return false;

        if (!$this->CreateCustomer())
            return false;

        if (!$this->CreateOrder())
            return false;

        $this->Save();

        return true;
    }
    public function Save()
    {
        $conexion = new PDO('mysql:host=' . $this->ServerDB . ';dbname=' . $this->DataBaseDB, $this->UserDB, $this->PassDB);

        $query = "INSERT INTO payment (total, date_created, description, name, number_card, email, order_id)
VALUES (:total, now(), :description, :name, :number_card, :email, :order_id)";
        $query = $conexion->prepare($query);
        $query->bindParam(':total', $this->total);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':name', $this->name);
        $query->bindParam(':number_card', substr($this->card, strlen($this->card) - 5, 4));
        $query->bindParam(':email', $this->email);
        $query->bindParam(':order_id', $this->order->id);
        $query->execute();
    }
    public function CreateOrder()
    {
        try {
            $this->order = \Conekta\Order::create(
                array(
                    'amount' => $this->total,
                    'line_items' => array(
                        array(
                            'name' => $this->description,
                            'unit_price' => $this->total * 100,
                            'quantity' => 1
                        )
                    ),
                    'currency' => 'MXN',
                    'customer_info' => array(
                        'customer_id' => $this->customer->id
                    ),
                    'charges' => array(
                        array(
                            'payment_method' => array(
                                'type' => 'default'
                            )
                        )
                    )
                )
            );
        } catch (\Conekta\ProcessingError $error) {
            $this->error = $error->getMessage();
            return false;
        } catch (\Conekta\ParameterValidationError $error) {
            $this->error = $error->getMessage();
            return false;
        } catch (\Conekta\Handler $error) {
            $this->error = $error->getMessage();
            return false;
        }

        return true;
    }

    public function CreateCustomer()
    {
        try {
            $this->customer = \Conekta\Customer::create(
                array(
                    'name' => $this->name,
                    'email' => $this->email,
                    // 'phone' => '+522020202020',
                    'payment_sources' => array(
                        array(
                            'type' => 'card',
                            'token_id' => $this->token
                        )
                    )
                )
            );
        } catch (\Conekta\ProcessingError $error) {
            $this->error = $error->getMessage();
            return false;
        } catch (\Conekta\ParameterValidationError $error) {
            $this->error = $error->getMessage();
            return false;
        } catch (\Conekta\Handler $error) {
            $this->error = $error->getMessage();
            return false;
        }

        return true;
    }

    public function Validate()
    {
        if ($this->card == '' || $this->name == '' || $this->description == '' || $this->total == '' || $this->email == '') {
            $this->error = 'El número de tarjeta, el nombre, el monto y el correo electronico son obligatorios';
            return false;
        }

        if (strlen($this->card <= 15)) {
            $this->error = 'El número de tarjeta debe tener al menos 16 caracteres';
            return false;
        }

        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $this->error = 'El correo electronico no tiene un formato valido';
            return false;
        }

        if ($this->total <= 20) {
            $this->error = 'El monto por motivos legales solo puede ser mayor a 25 pesos';
            return false;
        }

        return true;
    }
}
