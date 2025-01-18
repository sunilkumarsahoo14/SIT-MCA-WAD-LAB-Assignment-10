<!-- Name: Sunil Kumar Sahoo -->
<!-- Sic: 23MMCI38 -->
<!-- Roll: 16 -->
<?php
require_once "dbconnect.php";
function addStudent($name, $gender, $dob, $mobile, $email, $address, $department, $cgpa){
    global $conn;
    try{
        // Prepare Query
        $qry = "INSERT INTO student(name, gender, dob, mobile, email, address, department, cgpa) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn -> prepare($qry);
        // Bind Param
        $stmt -> bind_param("sssisssd", $name, $gender, $dob, $mobile, $email, $address, $department, $cgpa);
        // Execute Query
        $status = $stmt -> execute();
        return $status;
    }
    catch(Exception $e){
        die($e -> getMessage());
    }
    finally{ 
        $conn -> close();
    }
}

function allStudents(){
    global $conn;
    try{
        $qry = "SELECT * FROM student";
        $stmt = $conn->prepare($qry);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result -> num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    } catch(Exception $e){
        die($e -> getMessage());
    } finally{
        $conn -> close();
    }
}

function getStudentById($id){
    global $conn;
    try{
        $qry = "SELECT * FROM student WHERE id=?";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result ->num_rows > 0){
            return $result;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}

function deleteStudentById($id){
    global $conn;
    try{
        $qry = "DELETE FROM student WHERE id=?";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if($conn->affected_rows > 0){
            return true;
        } else{
            return false;
        }
    }catch(Exception $e){
        die($e->getMessage());
    }finally{
        $conn->close();
    }
}

function updateStudent($name, $gender, $dob, $mobile, $email, $address, $department, $cgpa, $id){
    global $conn;
    try{
        $qry = "UPDATE student SET name=?, gender=?, dob=?, mobile=?, email=?, address=?, department=?, cgpa=? WHERE id=?";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("sssisssdi", $name, $gender, $dob, $mobile, $email, $address, $department, $cgpa, $id);
        $status = $stmt->execute();
        if($conn->affected_rows > 0){
            return true;
        }else{
            return false;
        }
    }catch(Exception $e){
        die($e -> getMessage());
    }finally{
        $conn -> close();
    }
}
?>