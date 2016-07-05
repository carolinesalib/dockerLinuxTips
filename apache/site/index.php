<?php
  $host = $_POST["host"];
  $port = $_POST["port"];
  $base = $_POST["database"];
  $user = $_POST["user"];
  $pass = $_POST["password"];

  // echo "host={$host} port={$port} dbname={$base} user={$user} password={$pass}";

	if ($host) {
	  $dbconn = pg_connect("host={$host} port={$port} dbname={$base} user={$user} password={$pass}") or die("Erro ao conectar");

	  $stat = pg_connection_status($dbconn);
	  if ($stat === PGSQL_CONNECTION_OK) {
	      echo 'Connection status ok';
	  } else {
	      echo 'Connection status bad';
        echo pg_last_error($dbconn);
	  }
	}

?>

<!DOCTYPE html>
<html>
<head>
	 <!-- Compiled and minified CSS -->
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

	  <!-- Compiled and minified JavaScript -->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
	<meta charset="utf-8">
	<title>Teste de conexão</title>
</head>
<body>
<div class="row">
    <form class="col s6" action="index.php" method="post">
	<div class="row">
        <div class="input-field col s6">
          <input placeholder="Host Name" id="host" name="host" type="text" value=<?php echo $_POST["host"]; ?> class="validate">
          <label for="host"></label>
        </div>
    </div>
	<div class="row">
        <div class="input-field col s6">
          <input placeholder="Port Number" id="port" name="port" type="number"  value=<?php echo $_POST["port"]; ?> class="validate">
          <label for="port"></label>
        </div>
    </div>
	<div class="row">
        <div class="input-field col s6">
          <input placeholder="Database Name" id="database" name="database" type="text" value=<?php echo $_POST["database"]; ?> class="validate">
          <label for="database"></label>
        </div>
    </div>
	<div class="row">
        <div class="input-field col s6">
          <input placeholder="User Name" id="user" name="user" type="text" value=<?php echo $_POST["user"]; ?> class="validate">
          <label for="user"></label>
        </div>
    </div>
	<div class="row">
        <div class="input-field col s6">
          <input placeholder="Password" id="password" name="password" type="text" value=<?php echo $_POST["password"]; ?> class="validate">
          <label for="password"></label>
        </div>
    </div>
	<div class="row">
	  <button class="btn waves-effect waves-light" type="submit" name="action">Testar conexão
	    <!-- <i class="material-icons right">send</i> -->
	  </button>
    </div>
    </form>
  </div>
</body>
</html>
