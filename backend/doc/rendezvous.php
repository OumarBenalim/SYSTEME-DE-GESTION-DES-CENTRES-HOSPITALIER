<?php
// Connexion à la base
$conn = mysqli_connect("localhost", "root", "", "hmisphp");

// Si le formulaire est soumis
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $doctor = $_POST['doctor'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $reason = $_POST['reason'];

  $sql = "INSERT INTO appointments (patient_name, doctor_id, appointment_date, appointment_time, reason)
          VALUES ('$name', '$doctor', '$date', '$time', '$reason')";
  mysqli_query($conn, $sql);
  echo "✅ Rendez-vous enregistré !";
}
?>

<form method="post">
  Nom du patient: <input type="text" name="name"><br>
  Médecin: <input type="number" name="doctor"><br>
  Date: <input type="date" name="date"><br>
  Heure: <input type="time" name="time"><br>
  Motif: <textarea name="reason"></textarea><br>
  <button type="submit" name="submit">Prendre rendez-vous</button>
</form>
