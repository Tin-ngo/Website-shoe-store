<?php
     require_once('ketnoi.php');

     /**
      * 
      */
     class mathang
     {
      var $conn;
      
      function __construct()
      {
        $connect_obj = new ketnoi();
        $this->conn = $connect_obj->connect;
      }


          function details_hang($id)  //đang
          {
               $query = "SELECT * from sanpham WHERE idSP = '$id'";
               return $this->conn->query($query)->fetch_assoc();

               
          }

           function loaisanpham()  //đang
          {
               $query = "SELECT * from loaisanpham";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;
          }


          function layten_loaisanpham($id)
          {
              $query = "SELECT * FROM loaisanpham WHERE idLoaiSP = '$id'";
              return $this->conn->query($query)->fetch_assoc();
          }

          function getcolor($id)
          {
              $query = "SELECT * FROM color WHERE idcolor = '$id'";
              return $this->conn->query($query)->fetch_assoc();
          }

          function getsize($id)
          {
              $query = "SELECT * FROM size WHERE idsize = '$id'";
              return $this->conn->query($query)->fetch_assoc();
          }






           function sanpham_cuahangtheoid($idLoaiSP)  //đang
          {
               $query = "SELECT * FROM sanpham WHERE idLoaiSP = $idLoaiSP";
               $result = $this->conn->query($query);

               $data = array();

               while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
                }
               return $data;


          }



          //hiển thị sản phẩm liên quan
           function sanphamlienquan($id)
           {
            $query = " SELECT * FROM sanpham WHERE idLoaiSP = '$id'";
            $result = $this->conn->query($query);

            $data = array();

            while ($row = $result->fetch_assoc()) {
              $data[] = $row;
            }

            return $data;
           }



     }
?>