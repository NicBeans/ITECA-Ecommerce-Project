public function __construct()
    {
        $dsn= 'mysql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->dbname . ';sslmode=' . $this->ssl;
        $options = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->password, $options);
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
        }
    }

