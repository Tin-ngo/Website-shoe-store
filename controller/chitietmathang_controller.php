<?php
   //    require_once('views/index.php');    gọi câu mới xuất hiện giao diện được

    require_once('./model/hang.php');

    /**
     * 
     */
    class chitietmathang
    {
    	var $chitietmathang_controller;
    	
    	function __construct()
    	{
    		$this->chitietmathang_controller = new mathang();
    	}
        
        

        public function chitiet_hang()
        {
            
            $id = isset($_GET['id']) ? $_GET['id'] : '2';

            $data_chitiet = $this->chitietmathang_controller->details_hang($id);

            $data_loaisanpham = $this->chitietmathang_controller->loaisanpham();

            $ten_loaisanpham = $this->chitietmathang_controller->layten_loaisanpham($id);

            $ten_color = $this->chitietmathang_controller->getcolor($id);

            $size = $this->chitietmathang_controller->getsize($id);

            $idLoaiSP = isset($_GET['idLoaiSP']) ? $_GET['idLoaiSP'] : '1';
            $data_sanphamlienquan = $this->chitietmathang_controller->sanphamlienquan($idLoaiSP);


        	$xem_gopy = $this->chitietmathang_controller->xem_gopy();

                require_once('views/index.php');
        }



        // sản phẩm liên quan, ý tưởng là phân theo loại sản phẩm





//chưa đụng tới
  //      public function list_theoid()
   //     {
//
       // 	$data_loaisanpham = $this->home_controller->loaisanpham();
//
   //     	$idLoaiSP = $_GET['id'] ? $_GET['id'] : '1';
    //        $data_sanphamcuahang = $this->home_controller->sanpham_cuahangtheoid($idLoaiSP);

      //      }

            public function gopy()
            {  
                $idSP = isset($_GET['id'])? $_GET['id'] : '1';
                $email = filter_input(INPUT_POST, 'email_gopy');
                $noidung = filter_input(INPUT_POST, 'noidung_gopy');

                $this->chitietmathang_controller->them_gopy($idSP, $email, $noidung);
            }





    }
?>