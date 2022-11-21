<?php
session_start();
require 'dbcon.php';


if(isset($_POST['delete_schedule']))
{
    $schedule_id = mysqli_real_escape_string($con, $_POST['delete_schedule']);

    $query = "DELETE FROM schedule WHERE id='$schedule_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "schedule Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "schedule Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_schedule']))
{
    $schedule_id = mysqli_real_escape_string($con, $_POST['schedule_id']);

    $truck_name = mysqli_real_escape_string($con, $_POST['truck_name']);
    $area = mysqli_real_escape_string($con, $_POST['area']);
    $division = mysqli_real_escape_string($con, $_POST['division']);
    $clock = mysqli_real_escape_string($con, $_POST['clock']);

    $query = "UPDATE schedule SET truck_name='$truck_name', area='$area', division='$division', clock='$clock' WHERE id='$schedule_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "schedule Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "schedule Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_schedule']))
{
    $truck_name = mysqli_real_escape_string($con, $_POST['truck_name']);
    $area = mysqli_real_escape_string($con, $_POST['area']);
    $division = mysqli_real_escape_string($con, $_POST['division']);
    $clock = mysqli_real_escape_string($con, $_POST['clock']);

    $query = "INSERT INTO schedule (truck_name,area,division,clock) VALUES ('$truck_name','$area','$division','$clock')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "schedule Created Successfully";
        header("Location: schedule-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "schedule Not Created";
        header("Location: schedule-create.php");
        exit(0);
    }
}

?>