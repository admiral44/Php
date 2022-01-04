<?php
include("../conn/conn.php");


$sql = " SELECT `p_name`, `p_no`, `p_email` FROM `Personal_info` ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $no = 1;
    while ($row = $result->fetch_assoc()) {
?>

        <tr>
            <th><?php echo $no; ?></th>
            <td><?php echo $row["p_name"]; ?></td>
            <td><?php echo $row["p_no"]; ?> </td>
            <td><?php echo $row["p_email"]; ?> </td>
            <td><?php echo ""; ?> </td>
        </tr>

    <?php
        $no++;
    }
} else {
    ?>
    <tr>
        <td>
            <p>0 Result Found</p>
        </td>
    </tr>
<?php
}
$conn->close();
?>