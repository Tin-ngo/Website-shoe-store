<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database sanpham</h4>

      <a class="pull-left themmoi" href="?action=them_sanpham_giaodien"> Thêm mới</a>

      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
          <input type="text" placeholder="Search"/>&ensp;
          <a href="#"><i class="fa fa-search" id="i1"></i></a>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>Mã SP</th>
                  <th class="theadd">Tên sản phẩm</th>
                  <th class="theadd">Giá thành</th>
                  <th class="theadd">Loại</th>
                  <th class="theadd">id Màu / id Size</th>
                  <th class="theadd">Hình ảnh</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value) { ?>
                 
           
              <tr>
                  <td scope="row"><?= $value['idSP'] ?></td>
                 <td><?= $value['tenSP'] ?></td>
                  <td><?= $value['Dongia'] ?></td>
                  <td>
                    <?php 
                    if($value['idLoaiSP'] == 1) echo "Giày Thể Thao"; 
                    if($value['idLoaiSP'] == 2) echo "Giày Công Sở"; 
                    if($value['idLoaiSP'] == 3) echo "Giày Học Sinh"; 
                    if($value['idLoaiSP'] == 4) echo "Giày Da Bò"; 
                    if($value['idLoaiSP'] == 5) echo "Giày Thời Trang"; 
                    ?>
                  </td> 
                  <td><?= $value['idcolor']." / ".$value['idsize'] ?></td>
                   <td><img src="./public_admin/image/sanpham/<?php echo $value['anh1'] ?>" widh='40' height='40'></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                      <a href="?action=xemsanpham&id=<?= $value['idSP'] ?>" type="button" class="btn btn-light">Chi tiết</a>
                      <a href="?action=suasanpham&id=<?= $value['idSP'] ?>" type="button" class="btn  btn-light">Sửa</a>
                      <a href="?action=xoasanpham&id=<?= $value['idSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"title="Xóa  ">
                        <i class="fa fa-times"></i></a>
                  </td> 
              </tr>

              <?php } ?>
             
          </tbody>
      </table>

      <br>
      <br>
      <br>
     

</div>

</div>



