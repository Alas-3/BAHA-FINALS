<?php
    function setComments($conn){
        if(isset($_POST['commentSubmit'])){
            $uid = $_POST['uid'];
            $comment = $_POST['comment'];

            $sql = "INSERT INTO tbl_comments (uid, comment) VALUES ('$uid', '$comment')";
            $result = $conn -> query($sql);
        }
    }

    function getComments($conn){
        $sql = "SELECT * FROM tbl_comments ORDER BY cid DESC";
        $result = $conn -> query($sql);

        while($row = $result -> fetch_assoc()){
            $id = $row['uid'];
            $sqlUser = "SELECT * FROM tbl_users WHERE ID = '$id'";
            $resultUser = $conn -> query($sqlUser);

            if($rowUser = $resultUser->fetch_assoc()){
                echo "<div class='commentBox'><p>";
                    echo $rowUser['Username'];
                    echo nl2br($row['comment']);
                echo "</p>
                
                </div>";
            }
        }
    }

    function deleteComments($conn){
        if(isset($_POST['commentDelete'])){
            $cid = $_POST['cid'];

            $sql = "DELETE FROM tbl_comments WHERE cid='$cid'";
            $result = $conn -> query($sql);
        }
    }