<?php
    class accountmodel extends database{
        //Đăng nhập người dùng
        function LoginUser($email,$pass){
            $sql = "SELECT * FROM user_account WHERE email_account = '$email' and pass_word  = '$pass'";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->rowCount();
            return $result;
        }
        
        // //Kiểm tra người dùng có bị block tài khoản hay không
        function CheckBlockUser($email){
            $sql = "SELECT * FROM user_account WHERE email_account = '$email' and active_status = 'block'";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->rowCount();
            return $result;
        }

        //Lấy thông tin người dùng
        function GetNameUser($email,$pass){
            $sql = "SELECT * FROM user_account WHERE email_account = '$email' and pass_word  = '$pass'";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  json_encode($query->fetchAll(PDO::FETCH_ASSOC));
            return json_decode($result,true);
        }

        //Lấy danh sách người dùng theo trang
        function GetAllUser($limit,$offset){
            $sql = "SELECT * FROM user_account ORDER BY 'id' ASC LIMIT $limit OFFSET $offset";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        //Lấy ra số lượng người dùng để phân trang
        function GetNumberUser(){
            $sql = "SELECT * FROM user_account";
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->rowCount();
            return $result;
        }


    }
?>