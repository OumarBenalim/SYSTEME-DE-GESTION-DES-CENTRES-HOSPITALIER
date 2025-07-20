<?php
$conn = mysqli_connect("localhost", "root", "", "hmisphp");

// Récupération des rendez-vous
$sql = "SELECT a.*, e.doc_Iname AS doctor_name 
        FROM appointments a 
        JOIN his_docs e ON a.doctor_id = e.id 
        ORDER BY appointment_date ASC, appointment_time ASC";
$result = mysqli_query($conn, $sql);
?>

<h2>📅 Liste des rendez-vous</h2>
<table border="1">
  <tr>
    <th>Patient</th>
    <th>Médecin</th>
    <th>Date</th>
    <th>Heure</th>
    <th>Motif</th>
    <th>Statut</th>
  </tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?= $row['patient_name'] ?></td>
    <td><?= $row['doctor_name'] ?></td>
    <td><?= $row['appointment_date'] ?></td>
    <td><?= $row['appointment_time'] ?></td>
    <td><?= $row['reason'] ?></td>
    <td><?= $row['status'] ?></td>
  </tr>
<?php } ?>
</table>
