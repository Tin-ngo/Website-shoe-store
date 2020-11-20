<div id="viewport">

<div class="container-fluid" id="noidung">
      <h4>Database loaisanpham</h4>

      <a class="pull-left themmoi" href="?action=themloaisanpham_giaodien"> Thêm mới</a>

      <div class="search_box pull-right" style="margin-right: 50px; margin-top: 0px;">
          <input type="text" placeholder="Search"/>&ensp;
          <a href="#"><i class="fa fa-search" id="i1"></i></a>
      </div>

      <br>
      <br>
   
      <table border="3" cellpadding="10" style="font-size: 15px;">
          
          <thead>
               <tr>
                  <th>idLoaiSP</th>
                  <th class="theadd">Tên loại sản phẩm</th>
                  <th class="theadd">Hình ảnh</th>
                  <th>Hành động</th>
               </tr>
          </thead>
          <tbody>
            <?php foreach ($data as $value) { ?>
                 
           
              <tr>
                  <td scope="row"><?= $value['idLoaiSP'] ?></td>
                 <td><?= $value['tenLSP'] ?></td>
                  <td><img src="./public_admin/image/loaisanpham<?= $value['hinhanh'] ?>"  height='90' ></td>
                  <td>
                      <!-- để ý dấu bằng trong href -->
                      <a href="?action=xemloaisanpham&id=<?= $value['idLoaiSP'] ?>" type="button" class="btn btn-light">Chi tiết</a>
                      <a href="?action=sualoaisanpham&id=<?= $value['idLoaiSP'] ?>" type="button" class="btn  btn-light">Sửa</a>
                      <a href="?action=xoaloaisanpham&id=<?= $value['idLoaiSP'] ?>" onclick="return confirm('Bạn có thật sự muốn xóa ?');" type="button" class="btn btn-danger"title="Xóa ">
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



